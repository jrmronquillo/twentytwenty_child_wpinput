<?php
/**
 * Template Name: process input template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

global $wpdb;



$postDataArchive = $_POST['idea_var'];


$postData = $_POST['destination_title'];
echo $postData;


# show db errors
# $wpdb->show_errors();
#$wpdb->print_error();
# print_r( $wpdp->queries );



# insert data into db with direct query
#$wpdb->query("INSERT INTO wp_ideas ( idea_content ) VALUES ( '$testerVAR' )");

# safer insert 
$wpdb->insert(
		$wpdb->prefix.'ideas',
		array(
			'idea_content' => $postData,
		)
	);


?>

<div>
	<span> Input submission</span>
	<form action='/process-input' method="post">
		<input type="text" id="idea_var" name="idea_var"><br><br>
		<input type="text" id="destination_title" name="destination_title"><br><br>
		<input type="submit" value="Submit">
	</form>
	<hr>

	  
</div>




<?php
# select & display data from db
$resultA = $wpdb->get_results('SELECT * FROM ' . $wpdb->prefix . 'ideas');

#echo $resultA[1]->idea_content;

foreach ($resultA as $value){
	
	echo "$value->idea_content <br>";
}

?>