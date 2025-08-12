<?php

// retrieve search type . . .
$search_type = clean_input($dbconnect, $_POST['search_type']);
$search_term = clean_input($dbconnect, $_POST['quick_search']);

// set up searches
$song_search = "
s.song_eng LIKE '%$search_term%'
OR s.song_jpn LIKE '%$search_term%'";

$producer_search = "p.name LIKE '%$search_term%'";

$singer_search = "
c1.name LIKE '%$search_term%'
OR c2.name LIKE '%$search_term%'";

$theme_search = "
t1.theme LIKE '%$search_term%'
OR t2.theme LIKE '%$search_term%'";

if ($search_type == "song") {
	$sql_conditions = "WHERE $song_search";
	$heading = "Song titles that include '$search_term'";
}

else if ($search_type == "producer") {
	$sql_conditions = "WHERE $producer_search;";
	$heading = "'Songs with producers '$search_term'";
}

else if ($search_type == "singer") {
	$sql_conditions = "WHERE $singer_search;";
	$heading = "Songs sung by singers '$search_term'";
}

else if ($search_type == "theme") {
	$sql_conditions = "WHERE $theme_search";
	$heading = "'Songs with themes '$search_term'";
}
	
else {
	$sql_conditions = "
	WHERE $song_search OR $producer_search OR $singer_search OR $theme_search
	";
	$heading = "'$search_term' songs";
}


include("results.php");

?>