<?php

session_start();

$con = mysqli_connect('localhost','root',);

if($con){
    echo" Connection Succesful";
} else{
    echo" Connection fail";
}

mysqli_select_db($con, 'registration');

$user = $_POST['user'];

$pass1 = $_POST['pass1'];


$q = "select * from registration_tbl where user = '$user' && pass1 = '$pass1' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){

    $_SESSION['user'] = $user;

    header('location:index.html');
}else{
    header('location:login.html');
}

?>