<?php
session_start();
$errors = array(); 
$db = mysqli_connect('localhost', 'root', 'root');
$sql = "CREATE DATABASE IF NOT EXISTS registration";
$res=mysqli_query($db,$sql);
mysqli_close($db);
$db = mysqli_connect('localhost', 'root', 'root');
$req="CREATE TABLE IF NOT EXISTS `review` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `lastname` varchar(80) NOT NULL,
  `telephone` varchar(80) NOT NULL,
  `subject` varchar(80) NOT NULL,
  `text` varchar(200) NOT NULL,
   PRIMARY KEY (`id`)
  );";
  
  $results = mysqli_query($db, $req);
  if (isset($_POST['submitform'])) {
    
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $telephone=$_POST['telephone'];
    $subject=$_POST['subject'];
    $text=$_POST['text'];
    if (empty($name)) {
      array_push($errors, "what's your name?");
    }
    if (empty($lastname)) {
      array_push($errors, "we need to know your lastname");
    }
    if (empty($telephone)) {
      array_push($errors, "we must know yor phone number");
    }
    if (empty($text)) {
      array_push($errors, "You need to write your feedback");
    }
    if (empty($subject)) {
      array_push($errors, "You need to write your feedback");
    }
    if (count($errors) == 0) {
      $query = "INSERT INTO review (name,lastname,telephone,subject,text) VALUES('$name','$lastname','$telephone','$subject','$text')";
    $res=mysqli_query($db, $query);
    if ($res){
      echo "<script language=\"javascript\">alert(\"thanks for your feedback\")</script>";}}}
    //if(!empty($text)&&!empty($lastname)&&!empty($telephone)&&!empty($subject)&&!empty($text)){
  	/*$query = "INSERT INTO review (name,lastname,telephone,subject,text) VALUES('$name','$lastname','$telephone','$subject','$text')";
    $res=mysqli_query($db, $query);
    if (!$res) {echo "Error";}
    else {
      $res=false;
      echo "<script language=\"javascript\">alert(\"thanks for your feedback\")</script>";}}}*/
    ?>