<?php 
  session_start(); 

  if (!isset($_SESSION['email'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email']);
  	header("location: index.php");
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
          <li><a class="active" href="profile.php">Your Profile</a></li>
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
</div>
<div class="cont col2">
</div>
<div class="cont col4">
  <div id="container">
    <div id="content">
      <h1>welcome <?php 
      include("connex.inc");
      //echo $_SESSION['name'] 
       $idCon=connex();
				$req="select name from users where email=\"".$_SESSION['email']."\"";
        $result=mysqli_query($idCon,$req);
        $ligne=mysqli_fetch_assoc($result);
        echo $ligne['name'];
        
      ?>, so happy you're here!</h1> 
      
      <!-- form profile picture -->
      <!-- <div class="imgr">
      <img class="imgr" src="images/image/image1.png" alt="" width="125" height="125" />

      <form action="profile.php" method="post" enctype="multipart/form-data">
      <input type="file" name="pic" accept="image/gif" size="50" />
      <button type="submit" class="btn" name="pic_user">change profil picture</button>
      </form>
      </div> -->
    <?php include("pic.php"); ?>

     <div class="imgr" id="content_image">
     <div id='img_div'>
     <img  src=<?php 
        if(isset($row['pic']))
        {
        echo "\"profil_pictures/".$row['pic']."\"" ;
        }
        else 
        {
          echo "\"images/image/image1.png\"";
        }
        ?> alt="" width="125" height="125" />
      </div>
   
      <form method="POST" action="profile.php" enctype="multipart/form-data">
  	    <input type="hidden" name="size" value="1000000">
  	    <div>
  	      <input type="file" name="image" class="custom-file-input" accept="image/*" >
  	    </div>
  	    <div>
  		   <button type="submit" name="upload" class="butto">Post</button>
  	    </div>
      </form>
    </div>
      
      <fieldset>
        <legend><b>Infos</b></legend>
      <!-- $niveau=(isset($_SESSION['membre_niveau']))?(int) $_SESSION['membre_niveau']:1;
      $id=(isset($_SESSION['membre_id']))?(int) $_SESSION['membre_id']:0;
      $nom=(isset($_SESSION['membre_nom']))?$_SESSION['membre_nom']:'';
      $prenom=(isset($_SESSION['membre_prenom']))?$_SESSION['membre_prenom']:'';
      $mdp=(isset($_SESSION['membre_mdp']))?$_SESSION['membre_mdp']:'';
      $email=(isset($_SESSION['membre_email']))?$_SESSION['membre_email']:'';
      $niveau=(isset($_SESSION['membre_niveau']))?$_SESSION['membre_niveau']:'';
      $derc=(isset($_SESSION['derc']))?$_SESSION['derc']:'';
      $derg=(isset($_SESSION['derg']))?$_SESSION['derg']:'';
      $derd=(isset($_SESSION['derd']))?$_SESSION['derd']:'';
      $derl=(isset($_SESSION['derl']))?$_SESSION['derl']:'';-->

        </fieldset>
        </form> 
        <!-- notification message -->
       
       <?php
		    if (isset($_SESSION['success']))
		    {
        echo "<div class=\"error success\" ><h3>".$_SESSION['success']."</h3></div>"; 
        unset($_SESSION['success']); 
		    } 	
        ?>
        <!--old=>new-->
        
        
        
        <table summary="Summary Here" cellpadding="0" cellspacing="0">

        <?php
				$idCon=connex();
				$req="select * from users where email=\"".$_SESSION['email']."\"";
				$result=mysqli_query($idCon,$req);
				if(!$result)
				{
					echo "Lecture impossible";
				}
				else
				{
        $ligne=mysqli_fetch_assoc($result);
        }
        ?>
        <tr class="light"><td>name :</td><td>  <?php echo $ligne['name'] ?>  </td></tr>
        <tr class="dark"><td>family name :</td><td> <?php echo $ligne['familyname'] ?> </td></tr>
        <tr class="light"><td>birth date :</td><td> <?php echo $ligne['birthdate'] ?></td></tr>
        <tr class="dark"><td>country :</td><td> <?php echo $ligne['country'] ?></td></tr>
        <tr class="light"><td>email :</td><td> <?php echo $ligne['email'] ?></td></tr>
        <tr class="dark"><td>gender :</td><td> <?php echo $ligne['sexe'] ?></td></tr>
        <tr class="light"><td>level :</td><td> <?php echo $ligne['level'] ?> </td></tr>
        <tr class="dark"><td>last comprehension mark :</td><td> <?php echo $ligne['derc'] ?> </td></tr>
        <tr class="light"><td>last grammar mark :</td><td> <?php echo $ligne['derg'] ?> </td></tr>
        <tr class="dark"><td>last listening mark :</td><td> <?php echo $ligne['derl'] ?> </td></tr>
        <tr class="light"><td>last dictation mark :</td><td> <?php echo $ligne['derd'] ?> </td></tr>
        
        </table>
        <!-- <input type="reset" value="reset" /> -->
				<form action="change.php">
         <button type="submit" class="butto"> Modify your profile </button>
        </form>
  
      <!--<input type="submit" value="change" />
      <input type="reset" value="reset" /> -->
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