<?php
include "config1.php";

if(isset($_POST['submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['name']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from Admin where username='".$uname."' and password='".$password."'";
        //you can declare as many $sql_query variables for as many tables you have.
        $result = mysqli_query($con,$sql_query);
        //you can declare as many $result variables for as many $sql_query you have. 
        $row = mysqli_fetch_array($result);
        //you can declare as many $row variables for as many $result you have. 
        $count = $row['cntUser'];
        //you can declare as many $count variables for as many $row you have. 
        if($count > 0){
            $_SESSION['name'] = $uname;
            header('Location: index.html');
        }else{
            echo "Invalid username and password";
        }
        //you can declare as many if else conditions for as many $count you have. 

    }

}
?>
