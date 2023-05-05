<?php
    include("../config/connectionDB.php");
    // Get data
    $email = $_POST['email'];
    $password = md5($_POST['passwd']);

    //Create Query
    $sql = "SELECT * FROM USERS WHERE email = '$email' AND password = '$password'";
    $result = $conn -> query ($sql);

    if( $result -> num_rows > 0) {
        header("Location:http://localhost/pets/front/src/home.html");
    } else{
        echo "<script>alert('The user doesn't exist or incorrect information')"
        header("refresh:0;ulr=http://localhost/pets/front/src/login.html");
    }
?>