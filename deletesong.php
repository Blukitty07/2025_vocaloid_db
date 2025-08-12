<?php

// check user is logged on
if (isset($_SESSION['admin'])) {

    $ID = $_REQUEST['ID'];
    $producer_ID = $_REQUEST['producer'];

    delete_ghost($dbconnect, $producer_ID);

    $delete_sql =  "DELETE FROM `songs` WHERE `songs`.`ID` = $ID";
    $delete_query = mysqli_query($dbconnect, $delete_sql);

    ?>
    <h2>Delete Success</h2>

    <p>The requested song has been deleted.</p>
    <?php

    
    
} // end of user logged on ot

else {
    $login_error = 'Please login to access this page';
    header("Location: index.php?page=../admin/login&error=$login_error");
}

?>