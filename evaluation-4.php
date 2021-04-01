
<?php include("connex.inc"); ?>
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
<!DOCTYPE html PUBLIC>

<html>
<head>
<title>Your Profile</title>
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
          <li><a  href="profile.php">Your Profile</a></li>
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
</div>
<div class="cont col2">
</div>
<div class="cont col3">
  <div id="container">
    <div id="content">
    <!------------------------------------------------------------------------------------------------------------------------------>
    <?php 
if(isset($_POST['essai']))
{
similar_text("London is the capital of England and the United Kingdom.  It was founded 2,000 years ago by the Romans.
The city has been Western Europe's largest city for centuries: As early as 1700 more than 575,000 people lived in London.
Today, London has a population of over 8 million people, it is also one of the most visited cities in the world,
 because of the many famous attractions there, such as Buckingham Palace, Tower Bridge and the Houses of Parliament.",$_POST['essai'], $note);
$note=round($note/4);
 echo "<h1>your mark is :",$note,"<br>";
 echo "</h1>";
 echo "<h1>";
if($note>=24)
echo "congrats, you did it!";
else
echo "you've failed the exam, sorry!";}
echo "</h1>";
echo "<br>";
echo "<h1>";
echo "<a href=\" test.php \" > go backwards </a></font>";
echo "</h1>";
    $idCon=connex();
	$req="update users set derd=".$note." where email=\"".$_SESSION['email']."\"";
    $result=mysqli_query($idCon,$req);
    if(!$result)
    {
        echo "Impossible Modification";
    }
    else
    {
        $req="select * from users where email=\"".$_SESSION['email']."\"";
        $result=mysqli_query($idCon,$req);
        $ligne=mysqli_fetch_assoc($result);

$level=$ligne['level'];
$derc=$ligne['derc'];
$derl=$ligne['derl'];
$derg=$ligne['derg'];
$derd=$ligne['derd'];
 if (($derl>=24)&&($derc>=24)&&($derg>=24)&&($derd>=24)&&($level!='C2'))
    {
        $derc=0;
        $derl=0;
        $derg=0;
        $derd=0;
        if($level=='A1')
        $level='A2';
        else if($level=='A2')
        $level='B1';
        else if($level=='B1')
        $level='B2';
        else if($level=='B2')
        $level='C1';
        else if($level=='C1')
        $level='C2';
        echo "<h1> CONGRATS YOU'VE PASSED TO THE NEXT LEVEL : ".$level;
        $req="update users set level=A2 where email=\"".$_SESSION['email']."\"";
        $result=mysqli_query($idCon,$req);
        $req="update users set derc=".$derc." where email=\"".$_SESSION['email']."\"";
        $result=mysqli_query($idCon,$req);
        $req="update users set derl=".$derl." where email=\"".$_SESSION['email']."\"";
        $result=mysqli_query($idCon,$req);
        $req="update users set derg=".$derg." where email=\"".$_SESSION['email']."\"";
        $result=mysqli_query($idCon,$req);
        $req="update users set derd=".$derd." where email=\"".$_SESSION['email']."\"";
        $result=mysqli_query($idCon,$req);
        if(!$result)
        {
            echo "Impossible Modification";
        }

        
    }
if (($derl>=24)&&($derc>=24)&&($derg>=24)&&($derd>=24)&&($level=='C2'))
{
    $req="DELETE from users where email=\"".$_SESSION['email']."\"";
        $result=mysqli_query($idCon,$req);
        $ligne=mysqli_fetch_assoc($result);
          session_destroy();
          unset($_SESSION['email']);
          header("location: final.php");
        
    
}
}
?>
<!------------------------------------------------------------------------------------------------------------------------------>
<?php 
echo
'</div>
<div id="column">
  <div id="featured">
    <ul>
      <li>
        <h2>How\'s the hard work going?</h2>
        <p class="imgholder"><img src="images/image/hard.jpg" alt="" /></p>
        <p>Are you having some difficulties passing these tests?
          contact us so we can help you!
          you can also try <a href="https://perfectlyspoken.com/">Perfectly Spoken &raquo;</a> or Duolingo, it should help!</p>
        </p>
      </li>
    </ul>
  </div>
  <div class="holder">
    <h2 class="title"><img src="images/image/shakespeare.jpg" alt="" />William Shakespeare</h2>
    <p>Doubt thou the stars are fire, Doubt that the sun doth move. Doubt truth to be a liar, But never doubt I love. Some are born great, some achieve greatness, and some have greatness thrust upon them. There is nothing either good or bad but thinking makes it so.</p>

  </div>
  <div class="holder">
    <div class="imgholder"><img src="images/image/world.jpg" alt="" /></div>
    <p>English is by far the most common studied language with 1.5 billion learners world wide </p>
    <div class="imgholder"><img src="images/image/know.jpg" alt="" /></div>
    <p> <q>I am</q> is the shortest complete sentence in the English language.</p>

  </div>
</div>
<div class="clear"></div>
</div>
</div>
<div class="cont col5">
<div id="footer">
<img style="float:bottom;"src="images/image/logo.png"/>
<!--fin Contact Form -->
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
<!-- End Company Details -->
<br class="clear" />
</div>
<div class="clear"></div>
</div>
</div>
</body>
</html> ';?>
