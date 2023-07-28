<?php
$conn= new mysqli("localhost","root","","web1");
if(!$conn)
{
    die("error");
}
else
{
    echo("sucess");
}

$id=$_REQUEST["id"];
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$pass=$_REQUEST["password"];



$sql="insert into students(id,name,email,password) values(".$id.",'".$name."','".$email."','".$pass."')";

$conn->query($sql);


?>
