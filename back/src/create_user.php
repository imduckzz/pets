<?php

include("../config/connectionDB.php");

//Get Data

$fName=$_POST['f_name'];
$lName=$_POST['l_name'];
$idNum=$_POST['id_num'];
$address=$_POST['address'];
$celPhone=$_POST['cel_phone'];
$email=$_POST['email'];
$pass=$_POST['passwd'];

//Prepare SQL

$sql="INSERT INTO users (first_name,last_name,number_id,address,celphone,email,password) VALUES ('$fName','$lName','$idNum','$address','$celPhone','$email','$pass')";

//$conn -> query($sql);
if ($conn -> query($sql)===TRUE){
    echo ".::: USER HAS BEEN CREATED SUCCESSFULLY:::."; 
    echo "<script> alert('User has been created successfully')</script>";
    header("refresh:0;url=http://localhost/pets/front/src/login.html");
}else{
    echo "ERROR: ". $conn -> ERROR . "<br>" .$sql;
    echo "<script>alert('User wasn't created successfully')</script>";
    header("refresh:0;url=http://localhost/pets/front/src/create_user.html");
}
?>
