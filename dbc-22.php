===<?php
$con=mysqli_connect("localhost","root","","wt");
// Check connection
$pwd = $_POST['pwd'];
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql="SELECT * FROM user WHERE uname='".$_POST['uname']."'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
$dbpwd = $row['pwd'];
}
if(md5($pwd)==$dbpwd) // match password of md database and actual password
{
echo "Password match";
}
else
{
echo "No match";
}
?>