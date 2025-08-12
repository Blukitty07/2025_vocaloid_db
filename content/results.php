<?php
// gather the results
$all_results = get_data($dbconnect, $sql_conditions);

$find_query = $all_results[0];
$find_count = $all_results[1];

if($find_count == 1) {
	$result_s = "Result";
}

else {
	$result_s = "Results";
}

// check that there are results
if($find_count > 0) {

// make and display the heading for the pages
if($heading != "") {
	$heading = "<h1>$heading ($find_count $result_s)</h1>";
}

elseif ($heading_type=="producer") {
	// retrieve producers name
	$producer_rs = get_item_name($dbconnect, 'producer', 'ID', $producer_id);

	$producer_name = $producer_rs['name'];
	$heading = "<h1>$producer_name Songs ($find_count $result_s)</h1>";
}
	
elseif ($heading_type=="singer") {
	$singer_rs = get_item_name($dbconnect, 'characters', 'ID', $singer_id);
	$singer_name = $singer_rs['name'];
	$heading = "<h1>Songs sung by $singer_name ($find_count $result_s)</h1>";
}
	
elseif ($heading_type=="year") {
	$heading = "<h1>Songs released in $the_year ($find_count $result_s)</h1>";
}
	
elseif ($heading_type=="theme") {
	// to make the first letter uppercase
	$theme_name = ucwords($theme_name);	
	$heading = "<h1>$theme_name Songs ($find_count $result_s)</h1>";
}
	
elseif ($heading_type=="delete_song") {
	$heading = "
	<h1>Delete Song - Are you sure?</h1>
	<p>Do you really want to delete the song entry in the box below?</p>";
}

elseif ($heading_type=="edit_success") {
	$heading = "
	<h1>Edit Song Entry Success</h1>
	<p>you have successfully edited this entry. The entry is now...</p>";
}

elseif ($heading_type=="song_success") {
	$heading = "
	<h1>Insert Song Success</h1>
	<p>You have successfully inserted the following song....</p>";
}
	

elseif ($heading_type=="none") {
	// to make the first letter uppercase
	$heading = "<h1>Sorry there was no result for </h1>";
	
}

echo $heading;

while($find_rs = mysqli_fetch_assoc($find_query)) {
    $song = $find_rs['song_eng'];
	$japanese = $find_rs['song_jpn'];

	$ID = $find_rs['songID'];

    $producer = $find_rs['name'];

	// get the id for producer (for quick navigation)
	$producer_id = $find_rs['producer'];
	$producer_find = $producer_id;

	$year = $find_rs['year'];
	$veiws = $find_rs['veiws'];

	// set up characters
	$singer = $find_rs['character1'];
	$singer_ID = $find_rs['c1ID'];
	$singer_find = $singer_ID;
	
	$backup = $find_rs['character2'];
	$backup_ID = $find_rs['c2ID'];
	$backup_find = $backup_ID;
	
    // set up themes
    $theme1 = $find_rs['theme1'];
    $theme2 = $find_rs['theme2'];
	
	// set up total song length
	$minutes = $find_rs['minutes'];
	$original_seconds = $find_rs['seconds'];
	
	// set up appropriate seconds
	if(strlen($original_seconds)==1){
	$seconds = sprintf('%02d', $original_seconds);}
	else{
	$seconds = $original_seconds;}

    // put all themes into a list to iterate through it
    $all_themes = array($theme1, $theme2);
	
	// get yt link
	$yt_link = $find_rs['yt_link'];
	
	// find results display type
	$singer_exploded = explode(' ', $singer);
	$last_name = array_pop($singer_exploded);
	$lower_last_name = strtolower($last_name);
	
	// set up list of singers (last name)
	$singer_list = ["neru", "avanna", "case", "diva", "gackpo", "daina", "dex", "flower", "fukase", "gumi", 
					"miku", "koto", "ia", "yuki", "len", "rin", "kaito", "teto", "lily", "mayu", "luka", "meiko", 
					"oliver", "una", "seeu", "rion", "piko", "yuma"];
	
	if (in_array($lower_last_name, $singer_list)) {
		$results = $lower_last_name;	
	}
	
	
	else {
		$results = "undefined";
	}
	
    ?>

 <div class="results <?php echo $results;?>">
		<h2><?php 
		// if japanese blank doesn't exist
		// set up a full song title for ease in both cases
			if ($japanese == "") {
				echo $song;
			}
	
			else {
				echo "$song ($japanese)";
			}

		?></h2>
		<?php
		// is there a backup singer check
		if ($backup == "") {		
			?> 
			<span style="font-weight: bold;">Featuring: </span> 

			<span><a class="fast_click" href="index.php?page=all_results&search=singer&singer=<?php echo $singer_find?>">
			<?php echo $singer; ?></a></span> <?php
		}
		 else {
			
			?> 
			<span style="font-weight: bold;">Featuring: </span> 

			<span><a class="fast_click" href="index.php?page=all_results&search=singer&singer=<?php echo $singer_find?>">
			<?php echo $singer; ?></a></span> and 
	 		<span><a class="fast_click" href="index.php?page=all_results&search=singer&singer=<?php echo $backup_find?>">
			<?php echo $backup; ?></a></span><?php
		}
		?> <br>
		 	
        	<?php echo "<span style='font-weight: bold;'>Producer:</span> 
			<span><a class='fast_click' href='index.php?page=all_results&search=producer&producer=$producer_find'>
			 $producer</a></span>"; ?><br>
		
		<!-- released song length and amount of veiws -->
		
		<span style='font-weight: bold;'>Year Released:</span>
	 	<span><a class="fast_click" href="index.php?page=all_results&search=year&year=<?php echo $year ?>"><?php echo $year; ?> </a></span><br>
		
		<?php echo "<span style='font-weight: bold;'>Song Length:</span> $minutes:$seconds";?><br>
		
		<!--edit veiws by hand so more easily readable-->
		<?php echo "<span style='font-weight: bold;'>Veiws on Youtube:</span> $veiws";?><br>

        <p>
		<?php   
		// iterate through al_themes and output theme if not blank
        foreach($all_themes as $theme) {
            // check the theme is not "n/a"
            if ($theme != "n/a") {
				// to make the first letter uppercase
				$theme = ucwords($theme);	
                ?>
			<span class="tag">
				<a class="fast_click" href="index.php?page=all_results&search=theme&theme_name=<?php echo $theme; ?>">
					<?php echo $theme; ?>
				</a>
			</span>
			&nbsp;&nbsp;
			
			<?php
            }
  
        }
	
		?>
		<span class="youtube">
			<a class="fast_click" target="_blank" href=<?php echo $yt_link?>>Youtube</a>
		</span>
		&nbsp;&nbsp;
			
			<?php
		// if user is logged in, show edit/delete options
		if (isset($_SESSION['admin'])) {
			?>
			<div class="tools">
				<a class="other" href="index.php?page=../admin/edit_song&ID=<?php echo $ID; ?>">
				<i class="fa fa-edit fa-2x"></i></a> 
				
				&nbsp; &nbsp;

				<a class="other" href="index.php?page=../admin/delete_confirm&ID=<?php echo $ID; ?>">
				<i class="fa fa-trash fa-2x"></i></a>
		</div>
			<?php

		}
	
        ?>
		</p>			
</div>
<br/>
<?php
} // end of the while loop
	
} // end of do we have results condition	

else {
	// to make the first letter uppercase
	$heading = "<h1>Sorry, but there was no result for: $search_term</h1>";
	echo $heading;
	
}



?>
