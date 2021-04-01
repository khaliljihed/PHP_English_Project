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
    <form method="POST" action="evaluation.php">
<div class="qheader">
<h3> Read this paragraph and answer the questions above( from 1 to 7)</h3>
<p>In the 16th century, an age of great marine and terrestrial exploration, Ferdinand Magellan led the first expedition to sail around the world.
As a young Portuguese noble, he served the king of Portugal, but he became involved in the quagmire of political intrigue at court and lost the king’s favor.
After he was dismissed from service by the king of Portugal, he offered to serve the future Emperor Charles V of Spain.
A papal decree of 1493 had assigned all land in the New World west of 50 degrees W longitude to Spain and all the land east of that line to Portugal.
Magellan offered to prove that the East Indies fell under Spanish authority. On September 20, 1519, Magellan set sail from Spain with five ships.
More than a year later, one of these ships was exploring the topography of South America in search of a water route across the continent.
This ship sank, but the remaining four ships searched along the southern peninsula of South America. Finally they found the passage they sought near 50 degrees S latitude.
Magellan named this passage the Strait of All Saints, but today it is known as the Strait of Magellan.
One ship deserted while in this passage and returned to Spain, so fewer sailors were privileged to gaze at that first panorama of the Pacific Ocean.
Those who remained crossed the meridian now known as the International Date Line in the early spring of 1521 after 98 days on the Pacific Ocean.
During those long days at sea, many of Magellan’s men died of starvation and disease.
Later, Magellan became involved in an insular conflict in the Philippines and was killed in a tribal battle.
Only one ship and 17 sailors under the command of the Basque navigator Elcano survived to complete the westward journey to Spain and thus prove once and for all that the world is round, with no precipice at the edge.</p>
<br>
<div class="qheader">
1. The 16th century was an age of great ______ exploration.(2 pts) </div>
<div class="qselections">
<input type="radio" value="a" name="question0"/>a)  cosmic<br>
<input type="radio" value="b" name="question0">b)  land<br>
<input type="radio" value="c" name="question0">c)  mental<br>
<input type="radio" value="d" name="question0">d)  common man<br>
<input type="radio" value="e" name="question0">e)  None of the above<br>
</div>
<br>
<div class="qheader">
2. Magellan lost the favor of the king of Portugal when he became involved in a political ________.(2 pts)</div>
<div class="qselections">
<input type="radio" value="a" name="question1">a) entanglement<br>
<input type="radio" value="b" name="question1">b) discussion<br>
<input type="radio" value="c" name="question1">c) negotiation<br>
<input type="radio" value="d" name="question1">d) problem<br>
<input type="radio" value="e" name="question1">e) None of the above<br>
</div>
<br>
<div class="qheader">
3. The Pope divided New World lands between Spain and Portugal according to their location on one side or the other of an imaginary geographical line 50 degrees west of Greenwich that extends in a _________ direction.(2 pts)</div>
<div class="qselections">
<input type="radio" value="a" name="question2">a) north and south<br>
<input type="radio" value="b" name="question2">b) crosswise<br>
<input type="radio" value="c" name="question2">c) easterly<br>
<input type="radio" value="d" name="question2">d) south east<br>
<input type="radio" value="e" name="question2">e) None of the above<br>
</div>

<br>

<div class="qheader">
4) One of Magellan’s ships explored the _________ of South America for a passage across the continent. (2 pts)</div>
<div class="qselections">
<input type="radio" value="a" name="question3">a) coastline<br>
<input type="radio" value="b" name="question3">b) mountain range<br>
<input type="radio" value="c" name="question3">c) physical features<br>
<input type="radio" value="d" name="question3">d) islands<br>
<input type="radio" value="e" name="question3">e) None of the above<br>
</div>

<br>

<div class="qheader">
5. Four of the ships sought a passage along a southern ______. (2 pts)</div>
<div class="qselections">
<input type="radio" value="a" name="question4">a) coast<br>
<input type="radio" value="b" name="question4">b) inland<br>
<input type="radio" value="c" name="question4">c) body of land with water on three sides<br>
<input type="radio" value="d" name="question4">d) border<br>
<input type="radio" value="e" name="question4">e) None of the above<br>
</div>

<br>

<div class="qheader">
6. The passage was found near 50 degrees S of ________.(2 pts)
 </div>
<div class="qselections">
<input type="radio" value="a" name="question5">a) Greenwich<br>
<input type="radio" value="b" name="question5">b) The equator<br>
<input type="radio" value="c" name="question5">c) Spain<br>
<input type="radio" value="d" name="question5">d) Portugal<br>
<input type="radio" value="e" name="question5">e) None of the above<br>
</div>

<br>

<div class="qheader">
7. In the spring of 1521, the ships crossed the _______ now called the International Date Line.(2 pts)</div>
<div class="qselections">
<input type="radio" value="a" name="question6">a) imaginary circle passing through the poles<br>
<input type="radio" value="b" name="question6">b) imaginary line parallel to the equator<br>
<input type="radio" value="c" name="question6">c) area<br>
<input type="radio" value="d" name="question6">d) land mass<br>
<input type="radio" value="e" name="question6">e) None of the above<br>
</div>
<br/>
<h3> Read this paragraph and answer the questions above( from 8 to 13)</h3>

<p>Marie Curie was one of the most accomplished scientists in history. 
Together with her husband, Pierre, she discovered radium, an element widely used for treating cancer, 
and studied uranium and other radioactive substances.
Pierre and Marie’s amicable collaboration later helped to unlock the secrets of the atom.
Marie was born in 1867 in Warsaw, Poland, where her father was a professor of physics.
At an early age, she displayed a brilliant mind and a blithe personality.
Her great exuberance for learning prompted her to continue with her studies after high school.
She became disgruntled, however, when she learned that the university in Warsaw was closed to women.
Determined to receive a higher education, she defiantly left Poland and in 1891 entered the Sorbonne,
a French university, where she earned her master’s degree and doctorate in physics.
Marie was fortunate to have studied at the Sorbonne with some of the greatest scientists of her day,
one of whom was Pierre Curie. Marie and Pierre were married in 1895 and spent many productive years working together in the physics laboratory. A short time after they discovered radium, Pierre was killed by a horse-drawn wagon in 1906. Marie was stunned by this horrible misfortune and endured heartbreaking anguish. Despondently she recalled their close relationship and the joy that they had shared in scientific research.
The fact that she had two young daughters to raise by herself greatly increased her distress.
Curie’s feeling of desolation finally began to fade when she was asked to succeed her husband as a physics professor at the Sorbonne.
She was the first woman to be given a professorship at the world-famous university.
In 1911 she received the Nobel Prize in chemistry for isolating radium.
Although Marie Curie eventually suffered a fatal illness from her long exposure to radium,
she never became disillusioned about her work. Regardless of the consequences, 
she had dedicated herself to science and to revealing the mysteries of the physical world.</p>
<div class="qheader">
8. Mary Curie worked with her _______ Pierre. (2 pts) </div>
<div class="qselections">
<input type="radio" value="a" name="question7">a) mother<br>
<input type="radio" value="b" name="question7">b) brother<br>
<input type="radio" value="c" name="question7">c) husband<br>
<input type="radio" value="d" name="question7">d) father<br>
<input type="radio" value="e" name="question7">e) None of the above<br>
9. Marie Curie discovered _______ . (2 pts)</div>
<div class="qselections">
<input type="radio" value="a" name="question8">a) Uranium<br>
<input type="radio" value="b" name="question8">b) radium<br>
<input type="radio" value="c" name="question8">c) silver<br>
<input type="radio" value="d" name="question8">d) gold<br>
<input type="radio" value="e" name="question8">e) mercure<br>
10.Marie Curie was born in _______ in Warsaw. (2 pts)</div>
<div class="qselections>
<input type="radio" value="a" name="question9">a) 1867 <br>
<input type="radio" value="b" name="question9">b) 1876<br>
<input type="radio" value="c" name="question9">c) 1915<br>
<input type="radio" value="d" name="question9">d) 2019<br>
<input type="radio" value="e" name="question9">e) None of the above<br></div>
11. Where did Marie Curie recieved her master's degree and doctorate. (2 pts)</div>
<div class="qselections">
<input type="radio" value="a" name="question10">a) Sorbonne University<br>
<input type="radio" value="b" name="question10">b) New Castle university<br>
<input type="radio" value="c" name="question10">c) ENSI<br>
<input type="radio" value="d" name="question10">d) Tazmania University<br>
<input type="radio" value="e" name="question10">e) None of the above<br></div>
12. when did marie married pierre? (2 pts)
<div class="qselections">
<input type="radio" value="a" name="question11">a) 1895<br>
<input type="radio" value="b" name="question11">b) 1894<br>
<input type="radio" value="c" name="question11">c) 1893<br>
<input type="radio" value="d" name="question11">d) 1892<br>
<input type="radio" value="e" name="question11">e) 1900<br></div>
13. when did Marie recieved her Nobel Prize.(1 pts)
<div class="qselections">
<input type="radio" value="a" name="question12">a) 1900es<br>
<input type="radio" value="b" name="question12">b) 1905<br>
<input type="radio" value="c" name="question12">c) 1911<br>
<input type="radio" value="d" name="question12">d) 2001<br>
<input type="radio" value="e" name="question12">e) None of the above<br></div> <br>
<div align="center">
<input type="submit" value="Grade Me!" class="butto" name="B1"> <input type="button" value="Reset" class ="butto" name="B2" onClick="document.myquiz.reset()"></div>
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