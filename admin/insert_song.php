<?php

//check user is logged on
if (isset($_SESSION['admin'])) {

    if(isset($_REQUEST['submit'])) {

        include("process_form.php");

        // insert song title
        $stmt = $dbconnect -> prepare("
        INSERT INTO `songs` 
        (`song_eng`, `song_jpn`, `vocaloid`, `character_1`, `character_2`, 
        `producer`, `year`, `minutes`, `seconds`, `theme_1`, `theme_2`, `veiws`, `yt_link`) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");
        $stmt -> bind_param("ssiiiiiiiiiis", 
        $song_eng, $song_jpn, $singer_type, $singer_ID, $backup_id, $producer_ID,
        $year_released, $minutes, $seconds, $theme_ID_1, $theme_ID_2, $youtube_veiws, $yt_link);
        $stmt -> execute();

        $song_eng_ID = $dbconnect -> insert_id;

        // close stmt once everything has been inserted
        $stmt -> close();

        $heading = "";
        $heading_type = "song_success";
        $sql_conditions = "WHERE s.ID = $song_eng_ID";

        include("content/results.php");

    }// end of submit button pushed

} //end of user is admin

else{
    $login_error = 'Please login to access this page';
    header("Location: index.php?page=../admin/login&error=$login_error");
}

?>