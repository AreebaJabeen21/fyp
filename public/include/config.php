<?php

$server="localhost";
$username="root";
$password="";
$database="GiveToShare";

$conn=new mysqli($server,$username,$password,$database);

if ($conn->connect_error) {
die("connection failed".$conn->connect_error);
}
