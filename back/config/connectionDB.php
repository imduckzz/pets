<?php
// Developer: Duckzz
//MySQL Engine Credentials
$host="127.0.0.1";
$username="root";
$password="";
$dbname="pets";
$port="3306";

//Create connection
$conn = new mysqli ($host,$username,$password,$dbname,$port);

//Check connection
if($conn ->connect_error){
    echo "Connection Failed: ".$conn -> connect_error;
}else{
    echo "Connection Successfully";
}
?>
