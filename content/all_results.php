<?php

// retrieve search type . . .
$search_type = clean_input($dbconnect, $_REQUEST['search']);

if ($search_type == "all") {
	$heading = "All Results";
	$sql_conditions = "";
}

else if ($search_type == "recent") {
	$heading = "Recently Added Songs";
	$sql_conditions = "ORDER BY s.ID DESC LIMIT 10";
}

else if ($search_type == "random") {
	// grab the amount of rounds requested
	$number = $_REQUEST['random'];

	$heading = "Random Songs";
	$sql_conditions = "ORDER BY RAND() LIMIT $number";
}

else if ($search_type == "producer") {
	// retrieve producer id
	$producer_id = $_REQUEST['producer'];

	$heading = "";
	$heading_type = "producer";

	$sql_conditions = "WHERE p.ID = $producer_id";
}

else if ($search_type == "singer") {
	// grab the amount of rounds requested
	$singer_id = $_REQUEST['singer'];
	$heading = "";
	$heading_type = "singer";
	$sql_conditions = "
	WHERE 
	c1.ID LIKE '$singer_id'
	OR c2.ID LIKE '$singer_id'
	";
}

else if ($search_type == "year") {
	// retrieve producer id
	$the_year = $_REQUEST['year'];

	$heading = "";
	$heading_type = "year";

	$sql_conditions = "WHERE s.year = $the_year";
}

else if ($search_type == "theme") {
	// grab the amount of rounds requested
	$theme_name = $_REQUEST['theme_name'];

	$heading = "";
	$heading_type = "theme";
	$sql_conditions = "
	WHERE 
	t1.theme LIKE '$theme_name'
	OR t2.theme LIKE '$theme_name'
	
	";
}
	
else {
	$heading = "No results for $search_type";
	$heading_type ="none";
	$sql_conditions = "WHERE s.ID = 10000";
}

include("results.php");

?>