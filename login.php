<?php include('server.php') ?>
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
        <li><a  href="index.php">Home</a></li>
        <li><a href="profile.php">Your Profile</a></li>
        <li><a href="test.php">Start the test</a></li>
        <li class="last" class="active" ><a href="#">Login</a></li>
      </ul>
    </div>
  </div>
</div>
    <div class="clear"></div>
<div class="cont col4">
  <div id="container">
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
    <div id="content">
      <div class="wrap col2" style ="width:400px;">
        <ul>
          <li class="last">
           <img src="images/image/account.png" width="300x" alt="" />
            <h1>login</h1>
            <form method="post" action="login.php">
            <?php include('errors.php'); ?>
              <table>
                <tr>
                <td>
              email :</td><td> <input type="text" name="email" /></td></tr>
              <tr>
                  <td> password : </td><td><input type="password" name="password"  /></td></tr>
                </table>
              <input type="submit" name="login_user" value=" Connexion "  class="butto" /><br/>
              <p>create a new account? <a href="register.php" >click here</a></p>
              <!-- <p> <a href="login.php?logout"='1'" style="color: blue;">logout</a> </p> -->
            </form>
          </li>
        </ul>
        <div class="clear"></div>
      </div>
      
    </div></div>
<div class="clear"></div>

<div class="cont col5">
<div id="footer">
<img style="float:bottom;"src="images/image/logo.png" href="index.php"/>
  
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