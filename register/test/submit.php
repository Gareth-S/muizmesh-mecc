<?php
/***
# How to Send Submissions to Your MySQL Database Using PHP
MySQL PHP Save Example (v2.0)
Jotform Inc. 2022 - AP#0031

This script was built for the following sample form: https://www.jotform.com/222744188444461
For more information, see: https://www.jotform.com/help/?p=608327
***/



/***
Display the data keys and values for debugging purposes.
***/
echo '<pre>', print_r($_POST, 1) , '</pre>';



/***
Test the data if it's a valid submission by checking the submission ID.
***/
if (!isset($_POST['submission_id'])) {
	die("Invalid submission data!");
}



/***
## Database Config

NOTE: 
Replace the values below with your MYSQL database environment variables 
to create a valid connection.
***/
$db_host = "localhost";
$db_username = "sexthera_test";
$db_password = "6(XXSL@D)lZd";
$db_name = "sexthera_test";
$db_table = "registration";



/***
Connect to database.
***/
$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);
if ($mysqli->connect_error) {
	die("Connection failed: " . $mysqli->connect_error);
}



/***
## Data to Save

Prepare the data to prevent possible SQL injection vulnerabilities to the database.

NOTE: Add the POST data to save in your database.
To view the submission as POST data, see: https://www.jotform.com/help/?p=607527
***/
$name = $mysqli->real_escape_string(implode(" ", $_POST['name']));
$email = $mysqli->real_escape_string($_POST['email']);
$message = $mysqli->real_escape_string($_POST['message']);



/***
Prepare the test to check if the submission already exists in your database.
***/
$sid = $mysqli->real_escape_string($_POST['submission_id']);
$result = $mysqli->query("SELECT * FROM $db_table WHERE submission_id = '$sid'");



/***
## Queries to Run

Perform the test and then UPDATE or INSERT the record
depending if the submission is already in the database or not.

NOTE:
Edit the queries below according to your form and database table structure.
For more information, see:
- https://www.freecodecamp.org/news/the-sql-update-statement-explained/#how-do-you-use-an-update-statement
- https://www.freecodecamp.org/news/sql-insert-and-insert-into-statements-with-example-syntax/#how-to-use-insert-into-in-sql
***/
if ($result->num_rows > 0) {
	/* UPDATE query */
	$result = $mysqli->query("UPDATE $db_table 
		SET name = '$name',
			email = '$email', 
			message = '$message' 
		
		WHERE submission_id = '$sid'
	");
}
else {
	/* INSERT query */
	$result = $mysqli->query("INSERT IGNORE INTO $db_table (
		submission_id, 
		name, 
		email, 
		message
	) VALUES (
		'$sid', 
		'$name', 
		'$email',
		'$message')
	");
}



/***
Display the outcome.
***/
if ($result === true) {
	echo "Success!";
}
else {
	echo "SQL error:" . $mysqli->error;
}



/***
Close the connection.
***/
$mysqli->close();

