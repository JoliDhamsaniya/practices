<?php
$con = mysqli_connect("localhost","root","","wt"); //conecction string
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$newpwd = md5($_POST['pwd']);
$query = "INSERT INTO user(uname, pwd) VALUES('$_POST[uname]','$newpwd')";
if (mysqli_query($con, $query)) 
{
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>


<?php

    //Connection 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "wtsem6";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if($conn)
    {
              echo "Connection OK";  
    }
    else
    {
        echo "Connection Failed".mysqli_connect_error();
    }


    error_reporting(E_ALL);
    //First query
    if(isset($_POST['signup'])) 
    {
        $Roles    = $_POST['fname'];
        $Fullname = $_POST['lname'];
        $emails    = $_POST['emailid'];
        $Pwd      = $_POST['pwd'];
        $Cpwd     = $_POST['cpwd'];

        $query1  =  "INSERT INTO register VALUES('$Roles','$Fullname','$emails', '$Pwd', '$Cpwd')";
        $data1   =  mysqli_query($conn,$query1);
        if($data1)
        {
            //echo "welcome $Fullname";
            header('Location:homepage2.html');
        }
        else
        {
            echo "Error : Try again later";
        }
    }