<?php

//check user is logged on
if (isset($_SESSION['admin'])) {

    if(isset($_REQUEST['submit'])) {

        // retrieve Ids from the form
        // check they're integers (incase someone edits the URL)
        $song_ID = filter_var($_REQUEST['ID'], FILTER_SANITIZE_NUMBER_INT);
        $old_producer = filter_var($_REQUEST['producerID'], FILTER_SANITIZE_NUMBER_INT);

		 include("process_form.php");

        // delete producer if there are no songs associated with them
        if ($old_producer != $producer_ID) {
            delete_ghost($dbconnect, $old_producer);
        }
		
        // update song
        $stmt = $dbconnect -> prepare("UPDATE `songs` SET `song_eng` = ?,
		 `song_jpn` = ?, `vocaloid` = ?, `character_1` = ?,
         `character_2` = ?, `producer` = ?, `year` = ?, `minutes` = ?, `seconds` = ?,
         `theme_1` = ?, `theme_2` = ?, `veiws` = ?, `yt_link` = ? WHERE `ID` = ?;");
        $stmt -> bind_param("ssiiiiiiiiiisi", $song_eng, $song_jpn,
    $singer_type, $singer_ID, $backup_id, $producer_ID, $year_released,
$minutes, $seconds, $theme_ID_1, $theme_ID_2, $youtube_veiws, $yt_link, $song_ID);
        $stmt -> execute();

        // close stmt once everything has been inserted
        $stmt -> close();

        $heading = "";
        $heading_type = "edit_success";
        $sql_conditions = "WHERE s.ID = $song_ID";

        include("content/results.php");

    }// end of submit button pushed

} //end of user is admin

else{
    $login_error = 'Please login to access this page';
    header("Location: index.php?page=../admin/login&error=$login_error");
}

?>