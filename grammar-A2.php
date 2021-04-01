
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
    <form method="POST" name="myquiz" action="evaluation-2.php">
    <h3>Answer these questions, each one admits only one response.</h3>
<div class="qheader">
1) Did you ______ anywhere interesting last weekend? </div>
<div class="qselections">
<input type="radio" value="a" name="question0">a)  go<br>
<input type="radio" value="b" name="question0">b)  going<br>
<input type="radio" value="c" name="question0">c)  was<br>
<input type="radio" value="d" name="question0">d)  went<br>
</div>

<br>

<div class="qheader">
2) I work as a teacher and my wife ______, too.</div>
<div class="qselections">
<input type="radio" value="a" name="question1">a) do<br>
<input type="radio" value="b" name="question1">b) is<br>
<input type="radio" value="c" name="question1">c) work<br>
<input type="radio" value="d" name="question1">d) does<br>
</div>

<br>

<div class="qheader">
3) I think ______ taxi driver</div>
<div class="qselections">
<input type="radio" value="a" name="question2">a) her job is<br>
<input type="radio" value="b" name="question2">b) she's a<br>
<input type="radio" value="c" name="question2">c) her job is an<br>
<input type="radio" value="d" name="question2">d) she's<br>
</div>

<br>

<div class="qheader">
4) What is your home town ______ ? </div>
<div class="qselections">
<input type="radio" value="a" name="question3">a) situated<br>
<input type="radio" value="b" name="question3">b) age<br>
<input type="radio" value="c" name="question3">c) like<br>
<input type="radio" value="d" name="question3">d) located<br>
</div>

<br>

<div class="qheader">
5) I’m afraid I ______ here for your birthday party.</div>
<div class="qselections">
<input type="radio" value="a" name="question4">a) have not to be<br>
<input type="radio" value="b" name="question4">b) am not being<br>
<input type="radio" value="c" name="question4">c) will be not<br>
<input type="radio" value="d" name="question4">d) can't be<br>
</div>

<br>

<div class="qheader">
6) How ______ are you? </div>
<div class="qselections">
<input type="radio" value="a" name="question5">a) high<br>
<input type="radio" value="b" name="question5">b) wide<br>
<input type="radio" value="c" name="question5">c) long<br>
<input type="radio" value="d" name="question5">d) heavy<br>
</div>

<br>

<div class="qheader">
7) How long ______ married?</div>
<div class="qselections">
<input type="radio" value="a" name="question6">a) have you been<br>
<input type="radio" value="b" name="question6">b) are you<br>
<input type="radio" value="c" name="question6">c) have you<br>
<input type="radio" value="d" name="question6">d) been<br>
</div>

<br>

<div class="qheader">
8) Would you like ______ help? </div>
<div class="qselections">
<input type="radio" value="a" name="question7">a) a<br>
<input type="radio" value="b" name="question7">b) some<br>
<input type="radio" value="c" name="question7">c) me<br>
<input type="radio" value="d" name="question7">d) I<br>
</div>

<br>

<div class="qheader">
9) They ______ go to the cinema</div>
<div class="qselections">
<input type="radio" value="a" name="question8">a) tomorrow<br>
<input type="radio" value="b" name="question8">b) much<br>
<input type="radio" value="c" name="question8">c) rare<br>
<input type="radio" value="d" name="question8">d) seldom<br>
</div>

<br>

<div class="qheader">
10) He hasn’t played since he ______ the accident. </div>
<div class="qselections">
<input type="radio" value="a" name="question9">a) had<br>
<input type="radio" value="b" name="question9">b) has had<br>
<input type="radio" value="c" name="question9">c) has<br>
<input type="radio" value="d" name="question9">c) had had<br>
</div>

<div class="qheader">
<br>

11) This is the best tea I’ve ______ tasted.  </div>
<div class="qselections">
<input type="radio" value="a" name="question10">a) never<br>
<input type="radio" value="b" name="question10">b) ever<br>
<input type="radio" value="c" name="question10">c) already<br>
<input type="radio" value="d" name="question10">d) still<br>
</div>

<br>

<div class="qheader">
12) I’m looking ______ the summer holidays.</div>
<div class="qselections">
<input type="radio" value="a" name="question11">a) before<br>
<input type="radio" value="b" name="question11">b) forward<br>
<input type="radio" value="c" name="question11">c) for<br>
<input type="radio" value="d" name="question11">d) forward to<br>
</div>

<br>

<div class="qheader">
13) My girlfriend ______ born on the 2nd of September 1974. </div>
<div class="qselections">
<input type="radio" value="a" name="question12">a) is<br>
<input type="radio" value="b" name="question12">b) was<br>
<input type="radio" value="c" name="question12">c) had<br>
<input type="radio" value="d" name="question12">d) has been<br>
</div>

<br>

<div class="qheader">
14) This coffee tastes ______ . </div>
<div class="qselections">
<input type="radio" value="a" name="question13">a) badly<br>
<input type="radio" value="b" name="question13">b) lovely<br>
<input type="radio" value="c" name="question13">c) well<br>
<input type="radio" value="d" name="question13">d) normally<br>
</div>

<br>

<div class="qheader">
15) In life ______ can make a mistake; we’re all human. </div>
<div class="qselections">
<input type="radio" value="a" name="question14">a) anyone<br>
<input type="radio" value="b" name="question14">b) some people<br>
<input type="radio" value="c" name="question14">c) not anybody<br>
<input type="radio" value="d" name="question14">d) someone<br>
</div>

<br>

<div class="qheader">
16) She knows that she ______ to pay now. </div>
<div class="qselections">
<input type="radio" value="a" name="question15">a) had better<br>
<input type="radio" value="b" name="question15">b) needn't<br>
<input type="radio" value="c" name="question15">c) should<br>
<input type="radio" value="d" name="question15">d) ought<br>
</div>

<br>

<div class="qheader">
17) If he ______ about it, I’m sure he’d help. </div>
<div class="qselections">
<input type="radio" value="a" name="question16">a) had know<br>
<input type="radio" value="b" name="question16">b) knew<br>
<input type="radio" value="c" name="question16">c) has known<br>
<input type="radio" value="d" name="question16">d) knows<br>
</div>

<br>

<div class="qheader">
18) I'll return the newspaper when I ______ through it.</div>
<div class="qselections">
<input type="radio" value="a" name="question17">a) will have looked<br>
<input type="radio" value="b" name="question17">b) looked<br>
<input type="radio" value="c" name="question17">c) have looked<br>
<input type="radio" value="d" name="question17">d) look<br>
</div>

<br>

<div class="qheader">
19) They said they ______ come, but they didn’t. </div>
<div class="qselections">
<input type="radio" value="a" name="question18">a) can<br>
<input type="radio" value="b" name="question18">b) will<br>
<input type="radio" value="c" name="question18">c) may<br>
<input type="radio" value="d" name="question18">d) might<br>
</div>

<br>

<div class="qheader">
20) They were ______ hard questions that I had no chance. </div>
<div class="qselections">
<input type="radio" value="a" name="question19">a) so<br>
<input type="radio" value="b" name="question19">b) some<br>
<input type="radio" value="c" name="question19">c) such<br>
<input type="radio" value="d" name="question19">d) quite<br>
</div>

<br>

<div class="qheader">
21) I don't have a cent to give you. I ...... bought a new computer. </div>
<div class="qselections">
<input type="radio" value="a" name="question20">a) just buy<br>
<input type="radio" value="b" name="question20">b) had just bought<br>
<input type="radio" value="c" name="question20">c) 've just<br>
<input type="radio" value="d" name="question20">d) soon will<br>
</div>

<br>

<div class="qheader">
22) Mum gave ______ her job when I was born. </div>
<div class="qselections">
<input type="radio" value="a" name="question21">a) in<br>
<input type="radio" value="b" name="question21">b) up<br>
<input type="radio" value="c" name="question21">c) off<br>
<input type="radio" value="d" name="question21">d) away<br>
</div>

<br>

<div class="qheader">
23)  It's all right, we ______ hurry. We have plenty of time. </div>
<div class="qselections">
<input type="radio" value="a" name="question22">a) mustn't<br>
<input type="radio" value="b" name="question22">b) shouldn't<br>
<input type="radio" value="c" name="question22">c) can't<br>
<input type="radio" value="d" name="question22">d) needn't<br>
</div>

<br>

<div class="qheader">
24) You have a terrible fever! ______ call a doctor? </div>
<div class="qselections">
<input type="radio" value="a" name="question23">a) Shall I<br>
<input type="radio" value="b" name="question23">b) Do I<br>
<input type="radio" value="c" name="question23">c) Must I<br>
<input type="radio" value="d" name="question23">d) Will I<br>
</div>

<br>

<div class="qheader">
25) Joanna looks ______ in her new dress. </div>
<div class="qselections">
<input type="radio" value="a" name="question24">a) nice<br>
<input type="radio" value="b" name="question24">b) nicely<br>
<input type="radio" value="c" name="question24">c) like nice<br>
<input type="radio" value="d" name="question24">d) such nice<br>
</div>
<br>
<div align="center">
<input type="submit" value="Grade Me!" name="B1" class="butto"> <input type="button" value="Reset" class="butto" name="B2" onClick="document.myquiz.reset()"></div>
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