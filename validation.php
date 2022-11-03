<?php
session_start();
// header('location:adminlogin/adminsignup.php');

$con = mysqli_connect('localhost' , 'root');

// if($con){
//     echo("You have successfully connected to the database dude ... ");
// }
// else{
//     echo("Connection abort");
// }

mysqli_select_db($con, 'svproject');

// $username = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];
// $phone = $_POST['phone'];
// $fb = $_POST['fb'];
// $github = $_POST['github'];
// $linkedn = $_POST['linkedn'];


$q = "select * from signin where email='$email' && password='$pass'";

$result  = mysqli_query($con , $q);

$num = mysqli_num_rows($result);



if($num == 1){
    // echo "already Exists";

    $_SESSION['emailaddress'] = $email;
    header('location:dashboard.php');
    $_SESSION['password'] = $pass;
    header('location:dashboard.php');
    

}
else{
    // $qy = "insert into signin(name,fb,github,linkedn , email , phone , password ) values('$username','$fb','$github' , '$linkedn' , '$email' , '$phone' , '$pass')";
    // mysqli_query($con ,$qy);
    header('location:adminlogin/adminsignup.php');
}
?>