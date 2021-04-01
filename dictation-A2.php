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
    <h2> Please write down what you're hearing, the first voice one is very slow yet the second one is quit faster.</h2>
    <br/>
<p style="color:orange;">Pay attention to punctuation, capital letters and don't make mistakes.</p>
<table>
<tr class="dark">
<td valign="middle" >
<p style="font-size:25">Fast version</p></td>
<td>
   <audio src="london.mp3"  controls></td>
   </tr>
   <tr class="dark"><td>
<p style="font-size:25">slow version</p></td><td>
   <audio src="londonslow.mp3" controls></td>
</tr>
</table>
<form name="formulaire" method="post" action="evaluation-4.php"> 
<textarea cols="80" rows="20" name="essai"></textarea>
<input type="submit" value="submit" class="butto">
</form>
<!------------------------------------------------------------------------------------------------------------------------------>
    </div>
    <div id="column">
      <div id="featured">
        <ul>
          <li>
            <h2>How's the hard work going?</h2>
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