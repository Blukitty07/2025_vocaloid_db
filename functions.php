<?php 

// function to 'clean' data
function clean_input($dbconnect, $data) {
	$data = trim($data);	
	$data = htmlspecialchars($data); //  needed for correct special character rendering
	// removes dodgy characters to prevent SQL injections
	$data = mysqli_real_escape_string($dbconnect, $data);
	return $data;
}

function get_data($dbconnect, $more_condition=null) {
	// s => songs table
	// p => producer table
	// c => c1 and c2 are character
	// t => t1 and 12 are themes
	
	$find_sql = "SELECT 
	
	s.*,
	s.ID AS songID,
	p.*,
	c1.ID AS c1ID,
	c2.ID AS c2ID,
	c1.name AS character1,
	c2.name AS character2,
	t1.theme AS theme1,
	t2.theme AS theme2
	
	FROM songs s
	
	JOIN producer p ON p.ID = s.producer
	JOIN characters c1 ON s.character_1 = c1.ID
	JOIN characters c2 ON s.character_2 = c2.ID
	JOIN theme t1 ON s.theme_1 = t1.ID
	JOIN theme t2 ON s.theme_2 = t2.ID
	
	
	 ";
		
	// if we have a WHERE condition, add it to the sql
	if($more_condition != null) {
		// add extra string onto find sql
		$find_sql .= $more_condition;
	}
		
	$find_query = mysqli_query($dbconnect, $find_sql);
	$find_count = mysqli_num_rows($find_query);
			
	return $find_query_count = array($find_query, $find_count);
	}
	
function get_item_name($dbconnect, $table, $column, $ID)
	{
		$find_sql = "SELECT * FROM $table WHERE $column = $ID";
		$find_query = mysqli_query($dbconnect, $find_sql);
		$find_rs = mysqli_fetch_assoc($find_query);

		return $find_rs;
	}

// get search ID
function get_search_ID($dbconnect, $search_term)
{
	$find_sql = "SELECT * FROM theme WHERE theme LIKE '$search_term'";
	$find_query = mysqli_query($dbconnect, $find_sql);
	$find_rs = mysqli_fetch_assoc($find_query);

	// count results
	$find_count = mysqli_num_rows($find_query);

	if ($find_count == 1) {
	return $find_rs['ID'];
	}
	else {
		return "no results";
	}
}
	

	// entity is subject / full name of author
function autocomplete_list($dbconnect, $item_sql, $entity)    
	{
	// Get entity / topic list from database
	$all_items_query = mysqli_query($dbconnect, $item_sql);

	// Make item arrays for autocomplete functionality...
	while($row=mysqli_fetch_array($all_items_query))
	{
	$item=$row[$entity];
	$items[] = $item;
	}

	$all_items=json_encode($items);
	return $all_items;

	}

function delete_ghost($dbconnect, $producerID)
{
	// see if there are other quotes by that author
	$check_producer_sql = "SELECT * FROM `songs` WHERE `producer` = '$producerID'";
	$check_producer_query = mysqli_query($dbconnect, $check_producer_sql);

	$count_producer = mysqli_num_rows($check_producer_query);
		// if there are no quotes associated with the old author,
		// we can delete the old author
		if ($count_producer <=1) {
			$delete_ghost =  "DELETE FROM `producer` WHERE `ID` = '$producerID'";
			$delete_ghost_query = mysqli_query($dbconnect, $delete_ghost);
		}
}

?>