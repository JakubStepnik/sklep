<?php 
$serverName= "localhost";
$dbUsername="root";
$dbPassword="";
$dbname="sklep";
$conn =new mysqli($serverName,$dbUsername,$dbPassword,$dbname);

if(!$conn){
    die("Niepowodzenie z łączeniem" . mysqli_connect_error());
};