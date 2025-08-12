<?php

// check user is logged on
if (isset($_SESSION['admin'])) {

    // retreiev the song ID and santise it incase someone edits the URL
    $song_ID = filter_var($_REQUEST['ID'], FILTER_SANITIZE_NUMBER_INT);

    // ajust heading and find song
    $heading_type = "delete_song";
    $heading = "";
    $sql_conditions = "WHERE s.ID = $song_ID";

    include("content/results.php");

    ?>
    
    <p>
        <span class="tag white-tag">
        <a class="other" href="index.php?page=../admin/deletesong&ID=<?php echo $song_ID; ?>&producer=<?php echo $producer_id; ?>">
        Yes, Delete it</a></span>

        &nbsp;

        <span class= "tag white-tag">
            <a class="other" href="javascript:history.back()">No take me back</a></span>

    </p>

    <?php
    
} // end of user logged on ot

else {
    $login_error = 'Please login to access this page';
    header("Location: index.php?page=../admin/login&error=$login_error");
}

?>