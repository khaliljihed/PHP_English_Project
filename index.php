<?php include('server2.php') ?>
<?php include("connex.inc"); ?>
<?php 
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
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
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="profile.php">Your Profile</a></li>
        <li><a href="test.php">Start the test</a></li>
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

<div class="cont col2">
  <div id="gallery">
    <ul>
      <li class="placeholder" style="background-image:url(images/image/gallery_default.gif);">Image Holder</li>
      <li><a class="swap" style="background-image:url(images/image/im1.png);" href="#gallery"><strong>Services</strong><span><img src="images/image/fen1.jpg" alt="" /></span></a></li>
      <li><a class="swap" style="background-image:url(images/image/im2.jpg);" href="#gallery"><strong>Products</strong><span><img src="images/image/fen2.jpg" alt="" /></span></a></li>
      <li class="last"><a class="swap" style="background-image:url(images/image/im3.jpg);" href="#gallery"><strong>Company</strong><span><img src="images/image/fen3.jpg" alt="" /></span></a></li>
    </ul>
    <div class="clear"></div>
  </div>
</div>
<div class="cont col4">
  <div id="container">
    <div id="content">
      <h1>About ENGIST websit</h1>
      <p>This is an english testing website.</p>
      <p>This web site is meant to test your english level A1 (BEGINNER) - A2 (ELEMENTARY) - B1 (INTERMEDIATE) - B2 (UPPER INTERMEDIATE) - C1 (ADVANCED) - C2 (PROFICIENT)</p>
      <p>You'll start your journey as a beginner. </p>
      <p>Each level contains four subjects: comprhension, grammar, listening and dictation.</p>
      <p>Each part is rated for 25 pts. To pass to the next level you need to have in each one of them 24 or higher.</p>
      <div class="homecontent">
        <ul>
          <li>
            <p class="imgholder"><img src="images/image/amy.jpg" alt="" /></p>
            <h2>Haley ADAMS</h2>
            <p>I've had such a great time while passing ENGIST test. It's a good website that offers authentic tests.</p>
          </li>
          <li class="last">
            <p class="imgholder"><img src="images/image/jimmy.jpg" alt="" /></p>
            <h2>Jimmy ATWOOD</h2>
            <p>Thanks to ENGIST, I've had 10 out of 10 in the Ielts exam. woohoo!</p>
            <p>I highly recommand this website, I really do.</p>
          </li>
        </ul>
        <div class="clear"></div>
      </div>
      <p>these are some of ENGIST family. Don't hesitate join us now!</p>
    </div>
    <div id="column">
      <div id="featured">
        <ul>
          <li>
            <h2>Intrested in passing Ielts, Toeic or Toefl? </h2>
            <p class="imgholder"><img src="images/image/know-more.png" alt="" /></p>
            <p>learn more about each site right now:</p> <br/>
            <a href="https://www.ielts.org/"> Ielts &raquo;</a> <br/>
            <a href="https://www.ets.org/fr/toefl">Toefl &raquo;</a><br/>
            <a href="https://www.ets.org/toeic">Toeic &raquo;</a><br/>
          </li>
        </ul>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<div class="cont col5">
  <div id="footer">
    <div id="contactform">
      <h2>For more details, contact us!</h2>
      <form action="index.php" method="post" name="formulaire" onSubmit="javascript: return validation();">
        <fieldset>
          <legend>Contact Form</legend>
          <label for="name">Name:
            <input id="name" name="name" type="text" value="" />
          </label>
          <label for="familyname" class="margin">lastname:
            <input id="lastname" name="lastname" type="text" value="" />
          </label>
          <label for="telephone">Telephone:
            <input id="telephone" name="telephone" type="text" value="" />
          </label>
          <label for="subject" class="margin">Subject:
            <input id="subject" name="subject" type="text" value="" />
          </label>
          <label for="text">Message:<br />
            <textarea id="text" name="text" cols="40" rows="4"></textarea>
          </label>
          <p>
            <button id="submitform" name="submitform" type="submit"  class="butto">submit</button>
            &nbsp;
            <input id="resetform" name="resetform" type="reset" value="Reset" class="butto">
          </p>
        </fieldset>
      </form>
    </div>
     
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
<script type="text/javascript">
function validation() { 
var r1=document.formulaire.name.value;
var r2=document.formulaire.telephone.value;
var r3=document.formulaire.text.value;
var r4=document.formulaire.subject.value;
var r5=document.formulaire.lastname.value;
if (r1=='' || r2=='' || r3=='' || r4=='')
{alert("You must fill all fields");
return false}}

  </script>