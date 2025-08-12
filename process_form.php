<?php

$song_eng = $_REQUEST['song_eng'];
$song_jpn = $_REQUEST['song_jpn'];

$singer_1 = $_REQUEST['singer_1'];
$singer_2 = $_REQUEST['singer_2'];
$singer_type = $_REQUEST['boolean'];

$producer = $_REQUEST['producer'];

$year_released = $_REQUEST['year'];

$minutes = $_REQUEST['minutes'];
$seconds = $_REQUEST['seconds'];

$youtube_veiws = $_REQUEST['youtube_veiws'];
$yt_link = $_REQUEST['yt_link'];

$theme_1 = $_REQUEST['theme1'];
$theme_2 = $_REQUEST['theme2'];

//initilise IDs
$theme_ID_1 = $theme_ID_2 = "";

//handle the blank feilds
if ($theme_2 == "") {
    $theme_2 = "n/a";
}

$themes = array($theme_1, $theme_2);
$theme_IDs = array();

// statement to insert theme/s
$stmt = $dbconnect -> prepare("INSERT INTO `theme` 
(`theme`) VALUES (?);");

foreach ($themes as $theme) {
    $themeID = get_search_ID($dbconnect, $theme);

    if ($themeID == "no results") {
        // insert the theme
        $stmt -> bind_param("s", $theme);
        $stmt -> execute();

        // retrieve theme ID
        $themeID = $dbconnect->insert_id; 

    }

    $theme_IDs[] = $themeID;
}

// retrieve theme ids
$theme_ID_1 = $theme_IDs[0];
$theme_ID_2 = $theme_IDs[1];

// check to see if singer exists
$find_singer_id = "SELECT * FROM characters c WHERE
name = '$singer_1'";

$find_backup_id = "SELECT * FROM characters c WHERE
name = '$singer_2'";

$find_singer_query = mysqli_query($dbconnect, $find_singer_id);
$find_singer_rs = mysqli_fetch_assoc($find_singer_query);
$singer_count = mysqli_num_rows($find_singer_query);

$find_backup_query = mysqli_query($dbconnect, $find_backup_id);
$find_backup_rs = mysqli_fetch_assoc($find_backup_query);
$backup_count = mysqli_num_rows($find_backup_query);

// retrieve id if singer exists
if ($singer_count > 0) {
    $singer_ID = $find_singer_rs['ID'];
}


else {
    //add name to DB
    $stmt = $dbconnect -> prepare("INSERT INTO `characters` (`name`)
    VALUES (?)");
    $stmt -> bind_param("s", $singer_1);
    $stmt -> execute();

    $singer_ID = $dbconnect -> insert_id;

}

// retrieve id if singer exists
if ($backup_count > 0) {
    $backup_id = $find_backup_rs['ID'];
}


else {
    //add name to DB
    $stmt = $dbconnect -> prepare("INSERT INTO `characters` (`name`)
    VALUES (?)");
    $stmt -> bind_param("s", $singer_2);
    $stmt -> execute();

    $singer_ID = $dbconnect -> insert_id;

}

// check to see if producer exists
$find_producer_id = "SELECT * FROM producer p WHERE
name = '$producer'";

$find_producer_query = mysqli_query($dbconnect, $find_producer_id);
$find_producer_rs = mysqli_fetch_assoc($find_producer_query);
$producer_count = mysqli_num_rows($find_producer_query);

// retrieve id if produer exists
if ($producer_count > 0) {
    $producer_ID = $find_producer_rs['ID'];
}

else {
    //add name to DB
    $stmt = $dbconnect -> prepare("INSERT INTO `producer` (`name`)
    VALUES (?)");
    $stmt -> bind_param("s", $producer);
    $stmt -> execute();

    $producer_ID = $dbconnect -> insert_id;
}

?>