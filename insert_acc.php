<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="details"; // Table name 

// Connect to server and select database.
$connection = mysql_connect("$host", "$username", "$password"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$aadhar=$_POST['aadhar'];
$password=$_POST['password'];

  $sql="INSERT INTO $tbl_name(name, lastname, aadhar,password)VALUES('$name', '$lastname','$aadhar', '$password')";
$result=mysql_query($sql, $connection);

// if successfully insert data into database, displays message "Successful". 
if($result)
{
echo "Successful insert in database";
echo "<BR>";
}

else {
echo "ERROR";
}

echo "<a href='insertedit.php'>Back to main page</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='login_page.php'>login page</a>";
?> 

<?php 
// close connection 
mysql_close();
?>