<?php
//check user is logged in as admin
if (isset($_SESSION['admin'])) {

// retrieve info from database
include("gather_info.php");

// retrieve the current values for the song
$ID = $_REQUEST['ID'];

// get values from the DB
$edit_query = get_data($dbconnect, "WHERE s.ID = $ID");

$edit_results_query = $edit_query[0];
$edit_results_rs = mysqli_fetch_assoc($edit_results_query);

$song_eng = $edit_results_rs['song_eng'];
$song_jpn = $edit_results_rs['song_jpn'];

$is_a_vocaloid = $edit_results_rs['vocaloid'];

$main_singer_ID = $edit_results_rs['character_1'];
$main_singer_rs = get_item_name($dbconnect, 'characters', 'ID', $main_singer_ID);
$main_singer = $main_singer_rs['name'];

$backup_singer_ID = $edit_results_rs['character_2'];
$backup_singer_rs = get_item_name($dbconnect, 'characters', 'ID', $backup_singer_ID);
$backup_singer = $backup_singer_rs['name'];

$producer_ID = $edit_results_rs['producer'];
$producer_rs = get_item_name($dbconnect, 'producer', 'ID', $producer_ID);
$producer = $producer_rs['name'];

$year = $edit_results_rs['year'];

$minutes = $edit_results_rs['minutes'];
$seconds = $edit_results_rs['seconds'];
$yt_veiws = $edit_results_rs['veiws'];
$yt_link = $edit_results_rs['yt_link'];

$theme_1_ID = $edit_results_rs['theme_1'];
$theme_1_rs = get_item_name($dbconnect, 'theme', 'ID', $theme_1_ID);
$theme_1 = $theme_1_rs['theme'];

$theme_2_ID = $edit_results_rs['theme_2'];
$theme_2_rs = get_item_name($dbconnect, 'theme', 'ID', $theme_2_ID);
$theme_2 = $theme_2_rs['theme'];


?>

<div class = "admin-form">

<h1>Edit a Song</h1>

    <form action="index.php?page=../admin/change_song&ID=<?php echo($ID); ?>&producerID=<?php echo($producer_ID); ?>" method="post">

    <div class = "important">
        If you edit the name of a singer or producer, 
        it will change their name only for the song being edited. 
        It will not change all songs associated with the name.
    </div>

        <p><textarea name="song_eng" placeholder="Song name (English) (required)" required><?php echo $song_eng; ?></textarea></p>
        <p><textarea name="song_jpn" placeholder="Song name (Japanese)"><?php echo $song_jpn; ?></textarea></p>
        <p>Please insert up to two Vocaloid / Utauloid / SynthV that sing in the song </p>

        
        <div class="autocomplete">
            <input name="singer_1" id="singer_1" value="<?php echo $main_singer; ?>" required />
        </div>

		<br /><br />

        <div class="autocomplete">
            <input name="singer_2" id="singer_2" value="<?php echo $backup_singer; ?>" />
        </div>

        <p>Is the main singer a Vocaloid?</p>
        <select class="form-choose" name="boolean" >
            <option value=0 <?php if($is_a_vocaloid == 0) echo'selected="selected"';?>>No</option>
            <option value=1 <?php if($is_a_vocaloid == 1) echo'selected="selected"';?>>Yes</option>
        </select>
		
		<br /><br />

        <p>Who is the producer credited to this song?</p>
        <div class="autocomplete">
            <input name="producer" id="producer" value="<?php echo $producer; ?>"  required />
        </div>
        
        <p>When was the song released?</p>
        <p><input type="number" name="year" min=2000 max=<?php echo date('Y');?> value="<?php echo $year; ?>"  required/></p>
        
        <p>What is the length of the song (minutes : seconds)?</p>
        <div>
            <input class="smaller" type="number" name="minutes"  value="<?php echo $minutes; ?>"  required>
            :
            <input class="smaller" type="number" min=0 max=59 name="seconds"  value="<?php echo $seconds; ?>"  required>
        </div>
        
        <p>How many veiws does the song have on youtube? (minimum of 1000 and the video must be provided below as well)</p>
        <p><input type="number" name="youtube_veiws" min=1000 value="<?php echo $yt_veiws; ?>"  required/></p>
        <p><input type="url" name="yt_link" value="<?php echo $yt_link; ?>"  required/></p>
        
        <p>What are two main themes of the song? (no theme appears as n/a)</p>
        <div class="autocomplete">
            <input type="text" name="theme1" id="theme_1"  value="<?php echo $theme_1; ?>"  required/>
        </div>

        <br /><br />

        <div class="autocomplete">
            <input type="text" name="theme2" id="theme_2"  value="<?php echo $theme_2; ?>" />
        </div>

        <br /><br />
        
        <p><input class="form-submit" type="submit" name="submit" value="Edit Song"/></p>

    </form>

    <script>
        <?php include("autocomplete.php"); ?>

        /* Arrays containing lists */
        var all_tags = <?php print("$all_themes")?>;
        autocomplete(document.getElementById("theme_1"), all_tags);
        autocomplete(document.getElementById("theme_2"), all_tags);

        var all_singer = <?php print("$all_singers") ?>;
        autocomplete(document.getElementById("singer_1"), all_singer)
        autocomplete(document.getElementById("singer_2"), all_singer)

        var all_producer = <?php print("$all_producers") ?>;
        autocomplete(document.getElementById("producer"), all_producer)

    </script>

</div>
<?php
} // end of user is admin

else {
    $login_error = 'Please login to access this page';
    header("Location: index.php?page=../admin/login&error=$login_error");
}
?>