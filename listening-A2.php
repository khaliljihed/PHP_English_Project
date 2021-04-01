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
    <h3>
listen carfully to this sequence and answer the questions above:<br></h3>
<p>
<audio src="listen.mp3" controls>
</p>
<form method="POST" name="myquiz" action="evaluation-3.php">
<div class="qheader">
1) where is it usually best to begin a career in television? </div>
<div class="qselections">
<input type="radio" value="a" name="question0">a)  At the local level<br>
<input type="radio" value="b" name="question0">b)  At the state level<br>
<input type="radio" value="c" name="question0">c)  At the national level<br>
<input type="radio" value="d" name="question0">d)  At the international level<br>
</div>

<br>

<div class="qheader">
2) According to th passage, how is success measured?</div>
<div class="qselections">
<input type="radio" value="a" name="question1">a) By the amount of money made<br>
<input type="radio" value="b" name="question1">b) By obtaining syindication<br>
<input type="radio" value="c" name="question1">c) By the number of viewers<br>
<input type="radio" value="d" name="question1">d) By the amount of paid subscriptions<br>
</div>

<br>

<div class="qheader">
3) What is of utmost importance in order to get a job as a TV celebrity?</div>
<div class="qselections">
<input type="radio" value="a" name="question2">a) What you know<br>
<input type="radio" value="b" name="question2">b) Who you know<br>
<input type="radio" value="c" name="question2">c) How much you know<br>
<input type="radio" value="d" name="question2">d) Where you attended college<br>
</div>

<br>

<div class="qheader">
4) How important is academic training for jobs in journalism or broadcasting? </div>
<div class="qselections">
<input type="radio" value="a" name="question3">a) Very important<br>
<input type="radio" value="b" name="question3">b) somewhat important<br>
<input type="radio" value="c" name="question3">c) Unimportant<br>
<input type="radio" value="d" name="question3">d) Irrelevant<br>
</div>

<br>

<div class="qheader">
5) For jobs in journalism, how should a person speak?</div>
<div class="qselections">
<input type="radio" value="a" name="question4">a) Loudly<br>
<input type="radio" value="b" name="question4">b) Quickly<br>
<input type="radio" value="c" name="question4">c) Clearly<br>
<input type="radio" value="d" name="question4">d) Brusquely<br>
</div>
<br>
<div align="center">
<input type="submit" value="Grade Me!" name="B1" class="butto"> <input type="button" value="Reset" name="B2" class="butto" onClick="document.myquiz.reset()"></div>
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