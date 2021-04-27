<?php
$servername="localhost";
$username="database_username";
$password="database_password";
$dbname="databse_name";
try{
$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
echo "connection failed".$e->getMessage();
exit;
}
?>
