<?php
session_start();
$username = "";
$email    = "";
$name="";
$familyname="";
$sexe="";
$birthdate="";
$country="";
$password_1 ="";
$password_2 ="";
$errors = array(); 
$db = mysqli_connect('localhost', 'root', 'root');
$sql = "CREATE DATABASE IF NOT EXISTS registration";
$res=mysqli_query($db,$sql);
mysqli_close($db);
$db = mysqli_connect('localhost', 'root', 'root',"registration");
$req="CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(80) NOT NULL,
  `familyname` varchar(80) NOT NULL,
  `birthdate` varchar(80) NOT NULL,
  `country` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `sexe` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `level` varchar(20) NOT NULL,
  `derc` int(100) NOT NULL,
  `derg` int(100) NOT NULL,
  `derd` int(100) NOT NULL,
  `derl` int(100) NOT NULL,
  `pic` varchar(100) ,
  PRIMARY KEY (`email`)
  );";
  
  $results = mysqli_query($db, $req);
if (isset($_POST['reg_user'])) {
  $email = $_POST['email'];
  $name=$_POST['name'];
  $familyname=$_POST['familyname'];
  $sexe=$_POST['sexe'];
  $birthdate=$_POST['birthdate'];
  $country=$_POST['country'];
  $password_1 =$_POST['password_1'];
  $password_2 =$_POST['password_2'];
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    array_push($errors, "email already exists");
  }
  if (count($errors) == 0) {
    $password = $password_1;
  	$query = "INSERT INTO users (name,familyname,birthdate,country,email,sexe,password,level,derc,derg,derd,derl)
  			  VALUES('$name','$familyname','$birthdate','$country','$email','$sexe','$password','A1',0,0,0,0)";
    mysqli_query($db, $query);
    $_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: profile.php');
  }
}

if (isset($_POST['change_user'])) {
 $email = $_POST['email'];
 $name=$_POST['name'];
 $familyname=$_POST['familyname'];
 $sexe=$_POST['sexe'];
 $birthdate=$_POST['birthdate'];
 $country=$_POST['country'];
 $password_1 =$_POST['password_1'];
 $password_2 =$_POST['password_2'];
   if (strcmp($_SESSION['email'], $email) == 0){
    $password = $password_1;

  $query="UPDATE `users` SET `name`='$name',`familyname`='$familyname',`birthdate`='$birthdate',
  `country`='$country',`sexe`='$sexe',`password`='$password'  WHERE email=\"".$_SESSION['email']."\"";
    mysqli_query($db, $query);
   $_SESSION['email'] = $email;
   $_SESSION['success'] = "Modification saved";
   header('location: profile.php');
 }
 else{
  $user_check_query = "SELECT * FROM users WHERE email='$email' ";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
 
  if ($user) { // if user exists
    array_push($errors, "email already exists");
  }
  else{
  $req="SELECT `level`, `derc`, `derg`, `derd`, `derl` , `pic` FROM `users` WHERE email=\"".$_SESSION['email']."\" ";
  $result = mysqli_query($db, $req);
  $user = mysqli_fetch_assoc($result);
  $level=$user['level'];
  $derc=$user['derc'];
  $derg=$user['derg'];
  $derd=$user['derd'];
  $derl=$user['derl'];
  $pic=$user['pic'];
  $password = $password_1;
  $req="DELETE FROM `users` WHERE email=\"".$_SESSION['email']."\" ";
  mysqli_query($db, $req);
  $query ="INSERT INTO users (name,familyname,birthdate,country,email,sexe,password,level,derc,derg,derd,derl,pic)
    VALUES('$name','$familyname','$birthdate','$country','$email','$sexe','$password','$level','$derc','$derg','$derd','$derl','$pic')";
   mysqli_query($db, $query);
   $_SESSION['email'] = $email; 
   $_SESSION['success'] = "Modification saved";
   header('location: profile.php');

  }
 }
}   
if (isset($_POST['login_user'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
      $_SESSION['email'] = $email; 
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: profile.php');
  	}else {
  		array_push($errors, "Wrong email/password combination");
  	}
  }
}

?>