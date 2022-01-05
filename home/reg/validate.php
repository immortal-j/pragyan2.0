<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="theme-color" content="#0c0c0c" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/animation.css">
	<link rel="shortcut icon" href="images/favicon.ico">
	<script src="js/jquery.js"></script>
</head>
<body >
	<div id="particles-js">
	</div>
	<script src="js/particles.js"></script>
	<script src="js/security.js"></script>
	<script src="js/app.js"></script>
</body>
</html>

<?php
$host='localhost';
$username='root';
$password='';
$db='colosseum 12.0';
$connection=mysqli_connect($host,$username,$password,$db);

if (isset($_POST['register']))
{   
    $user_name = $_POST['name'];
    $user_email = $_POST['email'];
    $user_contact = $_POST['contact'];
    $user_college = $_POST['college'];

    if ($user_name == ''||$user_email == ''||$user_contact == ''||$user_college == '')
    {
        echo "<h1 style='position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center !important;
  z-index: 1000 !important;
  color: white !important;'>Please enter all the required details!</h1>";
        exit(); 
        
    }

    if(!isset($_POST['campusXperia'])&&!isset($_POST['picasso'])&&!isset($_POST['poster'])&&!isset($_POST['workshop'])&&!isset($_POST['ideathon'])&&!isset($_POST['gamengain'])&&!isset($_POST['funwithtech'])&&!isset($_POST['escaperoom'])){
        echo "<h1 style='position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center !important;
  z-index: 1000 !important;
  color: white !important;'>Select atleast one event!</h1>";
        exit(); 
        
    }

    if(isset($_POST['campusXperia'])){
        
        $insert_user = "insert into campusxperia (Name,College,Email,Phone) VALUE ('$user_name','$user_college','$user_email','$user_contact')";
        mysqli_query($connection, $insert_user);
           
    }
    if (isset($_POST['picasso'])) {
        $insert_user = "insert into picasso (Name,College,Email,Phone) VALUE ('$user_name','$user_college','$user_email','$user_contact')";
        mysqli_query($connection, $insert_user);
    }
    if (isset($_POST['poster'])) {
        $insert_user = "insert into poster (Name,College,Email,Phone) VALUE ('$user_name','$user_college','$user_email','$user_contact')";
        mysqli_query($connection, $insert_user);
    }
    if (isset($_POST['workshop'])) {
        $insert_user = "insert into workshop (Name,College,Email,Phone) VALUE ('$user_name','$user_college','$user_email','$user_contact')";
        mysqli_query($connection, $insert_user);
    }
    if (isset($_POST['ideathon'])) {
        $insert_user = "insert into ideathon (Name,College,Email,Phone) VALUE ('$user_name','$user_college','$user_email','$user_contact')";
        mysqli_query($connection, $insert_user);
    }
    if (isset($_POST['gamengain'])) {
        $insert_user = "insert into gamengain (Name,College,Email,Phone) VALUE ('$user_name','$user_college','$user_email','$user_contact')";
        mysqli_query($connection, $insert_user);
    }
    if (isset($_POST['funwithtech'])) {
        $insert_user = "insert into funwithtech (Name,College,Email,Phone) VALUE ('$user_name','$user_college','$user_email','$user_contact')";
        mysqli_query($connection, $insert_user);
    }
    if (isset($_POST['escaperoom'])) {
        $insert_user = "insert into escaperoom (Name,College,Email,Phone) VALUE ('$user_name','$user_college','$user_email','$user_contact')";
        mysqli_query($connection, $insert_user);
    }
    
    


}
?>

