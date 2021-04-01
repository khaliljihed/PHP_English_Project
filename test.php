<?php 
  session_start(); 
  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
<title>ENGIST</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/style.css" type="text/css" />
</head>
<body id="top">
<div class="cont col1">
  <div id="head">
    <h1><a href="index.php">ENGIST</a></h1>
    <p>Get ready for your english test!</p>
    <div id="topnav">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="profile.php">Your Profile</a></li>
        <li><a class="active" href="test.php">Start the test</a></li>
        <li class="last"><?php
         if (isset($_SESSION['email']))
          {
            echo "<a href=\"index.php?logout\"='1'\">Logout</a>";
          }
          else
          {
            echo "<a href=\"login.php\">";
            echo "Login ";
          }
          ?></a></li>
      </ul>
    </div>
  </div>
</div>
<?php
include("connex.inc");
$idCon=connex();
$req="select * from users where email=\"".$_SESSION['email']."\"";
$result=mysqli_query($idCon,$req);
if(!$result)
{
  echo "Lecture impossible";
}
else
{
    $idCon=connex();
	$req="select  * from users where email=\"".$_SESSION['email']."\"";
    $resultat=mysqli_query($idCon,$req);
    if(!$resultat)
				{
					echo "Lecture impossible";
				}
				else
        {
$ligne=mysqli_fetch_assoc($result);
$level=$ligne['level'];
$derc=$ligne['derc'];
$derg=$ligne['derg'];
$derl=$ligne['derl'];
$derd=$ligne['derd'];
$name=$ligne['name'];

        }
        
}
?>
<div class="cont col4">
  <div id="container">
    <h1>Welcome dear <?php echo $name ?>  </h1>
    <h2>You are now in <?php echo $level ?>. You need to pass in order to succeed this level:</h2>
    <h3><?php if ($derg<24) echo "<a href=\"grammar-",$level,".php\" > Grammar test </a> Last time you had ",$derg ; else echo "you've succeeded your grammar test your mark was :",$derg," "; ?></h3>
    <h3><?php if ($derl<24) echo "<a href=\"listening-",$level,".php\" > Listening test </a> Last time you had ",$derl ; else echo "you've succeeded your listening test your mark was :",$derl," "; ?></h3>
    <h3><?php if ($derc<24) echo "<a href=\"comprehension-",$level,".php\" > Comprehension test </a> Last time you had ",$derc ; else echo "you've succeeded your comprehension test your mark was :",$derc," "; ?></h3>
    <h6><?php if ($derd<24) echo "<a href=\"dictation-",$level,".php\" > Dictation test </a> Last time you had ",$derd ; else echo "you've succeeded your dictation test your mark was :",$derd," "; ?></h6>
    <p>The tests can be taken in any order you like. they contain: </p>
    <ul>
      <li>a listening test with 5 questions</li>
      <li>a grammar test with 25 questions</li>
      <li>a comprehension test with 13 questions</li>
      <li>a dictation test</li>
    </ul>
  </div>
</div>
<div class="cont col5">
<div id="footer">
<img style="float:bottom;"src="images/image/logo.png"/>
  
 <div id="compdetails">
   <div id="officialdetails">
     <h2> About Us!</h2>
     <ul>
       <li>ENGIST</li>
       <li>Tunisia; Manouba</li>
     </ul>
     <h2>Keep in Touch</h2>
     <p><a href="https://www.facebook.com/">Facebook</a></p>
   </div>
   <div id="contactdetails">
     <h2>Our Contact Details !</h2>
     <ul>
       <li>ENGIST</li>
       <li>Manouba campus</li>
       <li>La Manouba</li>
        
       <li>Tel: (+216) 65 032 544</li>
         
       <li>Email: ENGIST@domain.com</li>
     </ul>
   </div>
   <div class="clear"></div>
 </div>
 
   <br class="clear" />
 </div>
 <div class="clear"></div>
</div>
</div>
</body>
</html> 