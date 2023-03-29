<?php

// Require MySQL Connection PHP Class
require('database/DBcontroller.php');



// Require Fetch – Data PHP Class
require('database/FetchData.php');

// Require InsertData Class

require('database/InsertData.php');

// Call DBcontroller Object
$db= new DBcontroller;

// Calling fetchData Class  

$data = new FetchData($db);

$data->get_data();

// Calling Insert data Function 


// InsertData Object

$insertIntoTable = new InsertData($db);
$insertIntoTable -> insertIntoTable();
?>