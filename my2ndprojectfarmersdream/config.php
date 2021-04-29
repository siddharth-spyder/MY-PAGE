<?php
$servername="localhost";
$username="database_username";
$password="db_password";
$dbname="db_name";
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
