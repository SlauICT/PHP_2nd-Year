<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="root"; // Mysql password 
$db_name="student_reg"; // Database name 
$tbl_name="name_tbl"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect to the Server !!!!Sorry .. try again later"); 
mysql_select_db("$db_name")or die("cannot select Database");

// Get values from form 
$name=$_POST['Id'];
$lastname=$_POST['Fname'];
$email=$_POST['Lname'];

// Insert data into mysql 
$sql="INSERT INTO $tbl_name(Id, Fname, Lname) VALUES('$name', '$lastname', '$email')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
	// my message goes here!!!!!
echo "Successful Added";
echo "<BR>";
echo "<a href='index.php'>Back to main page</a>";
}

else {
	// this the message with an error ..lol
echo "ERROR";
}
?> 

<?php 
// close connection 
mysql_close();
?>