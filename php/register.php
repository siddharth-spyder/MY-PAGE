<?php
require"config.php";
if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $fullname=$_POST['fullname'];
        $password=$_POST['pass'];
	
        if($name=="" && $fullname=="" && $password=="")
		{
            echo"please fill in all the information";
        }
        else
        {
            $j_qry=$conn->query("Insert into tablename(username,fullname,password) values('$name','$fullname','$password')");
            if($j_qry)
            {
                echo"registered successfully";
echo"<script>location.href='youractionfilename.html/php'</script>";
            }
            else{
                echo"invalid";
                
            }
        }

    }
?>
