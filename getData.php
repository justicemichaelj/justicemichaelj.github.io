<?php
//database connection info
$dbDetails = array(
	'host' => 'database1.ciez1e9izkli.us-west-2.rds.amazonaws.com',
	'user' => 'admin'
	'pass' => '2ZoXFreioVYP71cUpvlz'
	'db' => 'edjob'
);

//DB Table to use
$table = 'listing';

//Table's primary key
$primaryKey = 'ID';


//Array of database columns which should be read and sent back to DataTables.
//The 'db' parameter represents teh column name in the database.
//The 'dt' parameter represents the DataTables column identifier.
$columns = array(
	array('db' => 'listedDate', 'dt' => 0),
	array('db' => 'jobTitle', 'dt' => 1),
	array('db' => 'districtName', 'dt' => 2),
	array('db' => 'county', 'dt' => 3),
	array('db' => 'state', 'dt' => 4),
	array('db' => 'jobType', 'dt' => 5)
	);
	
	
//Include SQL Query processing class
require('ssp.class.php');

//Output data as json format
echo json_encode(
	SSP::simple($GET, $dbDetails, $table, $primaryKey, $columns)
);
	