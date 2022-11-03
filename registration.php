<?php
session_start();
header('location:adminlogin/adminsignup.php');

$con = mysqli_connect('localhost' , 'root');

if($con){
    echo("You have successfully connected to the database dude ... ");
}
else{
    echo("Connection abort");
}

mysqli_select_db($con, 'svproject');

$adminCode = "SEM3GR59";
$username = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];
$phone = $_POST['phone'];
$fb = $_POST['fb'];
$github = $_POST['github'];
$linkedn = $_POST['linkedn'];
$codeInserted = $_POST['code'];
$alert = "You have entered wrong Admin code or you r not an admin";

$q = "select * from signin where name='$username' && fb='$fb' && github='$github' && linkedn='$linkedn' && password='$pass'&& phone='$phone' && email='$email' ";

$result  = mysqli_query($con , $q);

$num = mysqli_num_rows($result);


if($codeInserted == $adminCode){
    if($num == 1){
        echo "already Exists";
    
    
    }
    else{
        $qy = "insert into signin(name,fb,github,linkedn , email , phone , password ) values('$username','$fb','$github' , '$linkedn' , '$email' , '$phone' , '$pass')";
        mysqli_query($con ,$qy);
    }
}
else{
    $_SESSION['wrongcode'] = $alert;
    header("location:adminlogin/adminsignup.php");
}
    
?>