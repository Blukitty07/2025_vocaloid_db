<?php
// get all themes from the database
$all_tags_sql = "SELECT * FROM theme ORDER BY theme ASC";
$all_themes = autocomplete_list($dbconnect, $all_tags_sql, 'theme');

// initilise theme variables
$tag_1 = "";
$tag_2 = "";

// initialise tag ID's
$tag_1_ID = $tag_2_ID = 0;

// get singer name from database
$singer_name_sql = "SELECT * FROM characters ORDER BY name ASC";
$all_singers = autocomplete_list($dbconnect, $singer_name_sql, 'name');

// get producer name from database
$producer_name_sql = "SELECT * FROM producer ORDER BY name ASC";
$all_producers = autocomplete_list($dbconnect, $producer_name_sql, 'name');
?>