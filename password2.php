<?php
$data = "demo";
$pwd = crypt($data);

$val1 = rand(5,10); //create salt (random value)
$pwd2 = crypt($data, $val1);

echo $pwd."<br>";
echo $pwd2;
?>