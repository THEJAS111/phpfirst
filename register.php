<?php
include 'connect.php';

if(isset($_POST['signup']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $checkEmail="SELECT * FROM USERS WHERE email='$email'" ;
    $result=$conn->query($checkEmail);
    if($result->num_rows>0){
        echo "email address already existed ";
        header("location:index.php");
    }
    else{
        $insertQuery="INSERT INTO users(username,email,password)
        VALUES('$username','$email','$password')";
        if($conn->query($insertQuery)==TRUE){
            header("location:signin.php");
            exit();
        }
        else{
            echo "error ".$conn->error;
        }
    }
}
if(isset($_POST['signup']))
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $check="SELECT * FROM users WHERE email='$email' and password='$password'";
    $res=$conn->query($check);
    if($res->num_rows>0){
    session_start();
    $_SESSION['email']=$res['email'];
    header("Location: home.php");
    exit();
    }
    else{
        echo "Not found incorrect email and password  ";
    }

  
}


?>