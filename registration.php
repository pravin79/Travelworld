<?php

session_start();
header('location:index.html');
$con = mysqli_connect('localhost','root',);

if($con){
    echo" Connection Succesful";
} else{
    echo" Connection fail";
}

mysqli_select_db($con, 'registration');

$user = $_POST['user'];
$user1 = $_POST['user1'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];

$q = "select * from registration_tbl where user = '$user' && pass1 = '$pass1' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){

    header('location:register.html');
    
}else{
    $qy = "insert into registration_tbl(user, user1, email, gender, age, pass1, pass2) values ('$user' , '$user1' , '$email' , '$gender' , '$age' , '$pass1' , '$pass2' ) ";
    mysqli_query($con, $qy);
}

?>