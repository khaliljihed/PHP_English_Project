<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>ENGIST</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/style.css" type="text/css" />
<script language="javascript" src="validation1.js"> </script>

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
      <div class="homecontent">
          <form name="formulaire" method="post" action="change.php" onsubmit="return validation()">
              <?php include('errors.php'); ?>
              <?php
                $req="select * from users where email=\"".$_SESSION['email']."\"";
                $result=mysqli_query($db,$req);
                if(!$result)
                {
                  echo "Lecture impossible";
                }
               else
               {
                $ligne=mysqli_fetch_assoc($result);
                $name=$ligne['name'];
                $familyname=$ligne['familyname'];
                $sexe=$ligne['sexe'];
                $birthdate=$ligne['birthdate'];
                $country=$ligne['country'];
                $email=$ligne['email'];
                $password_1 =$ligne['password'];
                $password_2 =$ligne['password'];
             
               }
              ?>


              <table >
                <tr>
                  <td>Name</td>
                  <td><input type="text" name="name" value="<?php echo $name; ?>"></td>
                </tr>
                <tr>
                  <td>Family Name</td>
                  <td><input type="text" name="familyname" value="<?php echo $familyname; ?>"></td>
                </tr>
                <tr>
                  <td>Sexe</td>
                  <td><select name="sexe"  >
                       <option value="Male"  <?php if ($sexe=="Male") {echo "selected";} ?> >Male</option> 
                       <option value="Female" <?php if ($sexe=="Female") {echo "selected";} ?> >Female</option>
                </tr>
                  <td>Birth Date</td>
                  <td><input type="text" name="birthdate" value="<?php echo $birthdate; ?>"></td>
                </tr>
                <tr>
                  <td>country</td>
                  <td><select name="country" >
                  <!------------------------------------------------------------------------------------------------------------------->
                  <!------------------------------------------------------------------------------------------------------------------->
                <option value="Afghanistan"<?php if ($country=="Afghanistan") {echo "selected";} ?>>Afghanistan</option>
                <option value="Algeria"<?php if ($country=="Algeria") {echo "selected";} ?> >Algeria</option>
                <option value="American Samoa"<?php if ($country=="American Samoa") {echo "selected";} ?>>American Samoa</option>
                <option value="Argentina"<?php if ($country=="Argentina") {echo "selected";} ?>>Argentina</option>
                <option value="Australia"<?php if ($country=="Australia") {echo "selected";} ?>>Australia</option>
                <option value="Belgium"<?php if ($country=="Belgium") {echo "selected";} ?>>Belgium</option>
                <option value="Brazil"<?php if ($country=="Brazil") {echo "selected";} ?>>Brazil</option>
                <option value="Canada"<?php if ($country=="Canada") {echo "selected";} ?>>Canada</option>
                <option value="Chile"<?php if ($country=="Chile") {echo "selected";} ?>>Chile</option>
                <option value="China"<?php if ($country=="China") {echo "selected";} ?>>China</option>
                <option value="Colombia"<?php if ($country=="Colombia") {echo "selected";} ?>>Colombia</option>
                <option value="Cuba"<?php if ($country=="Cuba") {echo "selected";} ?>>Cuba</option>
                <option value="Czech Republic"<?php if ($country=="Czech Republic") {echo "selected";} ?>>Czech Republic</option>
                <option value="Denmark"<?php if ($country=="Denmark") {echo "selected";} ?>>Denmark</option>
                <option value="Djibouti"<?php if ($country=="Djibouti") {echo "selected";} ?>>Djibouti</option>
                <option value="Egypt"<?php if ($country=="Egypt") {echo "selected";} ?>>Egypt</option>
                <option value="Finland"<?php if ($country=="Finland") {echo "selected";} ?>>Finland</option>
                <option value="France"<?php if ($country=="France") {echo "selected";} ?>>France</option>
                <option value="Germany"<?php if ($country=="Germany") {echo "selected";} ?>>Germany</option>
                <option value="Greece"<?php if ($country=="Greece") {echo "selected";} ?>>Greece</option>
                <option value="Greenland"<?php if ($country=="Greenland") {echo "selected";} ?>>Greenland</option>
                <option value="Hungary"<?php if ($country=="Hungary") {echo "selected";} ?>>Hungary</option>
                <option value="Iceland"<?php if ($country=="Iceland") {echo "selected";} ?>>Iceland</option>
                <option value="India"<?php if ($country=="India") {echo "selected";} ?>>India</option>
                <option value="Indonesia"<?php if ($country=="Indonesia") {echo "selected";} ?>>Indonesia</option>
                <option value="Iraq"<?php if ($country=="Iraq") {echo "selected";} ?>>Iraq</option>
                <option value="Italy"<?php if ($country=="Italy") {echo "selected";} ?>>Italy</option>
                <option value="Japan"<?php if ($country=="Japan") {echo "selected";} ?>>Japan</option>
                <option value="Mexico"<?php if ($country=="Mexico") {echo "selected";} ?>>Mexico</option>
                <option value="Nigeria"<?php if ($country=="Nigeria") {echo "selected";} ?>>Nigeria</option>
                <option value="Portugal"<?php if ($country=="Portugal") {echo "selected";} ?>>Portugal</option>
                <option value="Qatar"<?php if ($country=="Qatar") {echo "selected";} ?>>Qatar</option>
                <option value="Romania"<?php if ($country=="Romania") {echo "selected";} ?>>Romania</option>
                <option value="Russian Federation"<?php if ($country=="Russian Federation") {echo "selected";} ?>>Russian Federation</option>
                <option value="Saudi Arabia"<?php if ($country=="Saudi Arabia") {echo "selected";} ?>>Saudi Arabia</option>
                <option value="South Africa"<?php if ($country=="South Africa") {echo "selected";} ?>>South Africa</option>
                <option value="Spain"<?php if ($country=="Spain") {echo "selected";} ?>>Spain</option>
                <option value="Sudan"<?php if ($country=="Sudan") {echo "selected";} ?>>Sudan</option>
                <option value="Sweden"<?php if ($country=="Sweden") {echo "selected";} ?>>Sweden</option>
                <option value="Switzerland"<?php if ($country=="Switzerland") {echo "selected";} ?>>Switzerland</option>
                <option value="Syrian Arab Republic"<?php if ($country=="Syrian Arab Republic") {echo "selected";} ?>>Syrian Arab Republic</option>
                <option value="Tunisia"><?php if ($country=="Tunisia") {echo "selected";} ?>Tunisia</option>
                <option value="Turkey"<?php if ($country=="Turkey") {echo "selected";} ?>>Turkey</option>
                <option value="Uganda"<?php if ($country=="Uganda") {echo "selected";} ?>>Uganda</option>
                <option value="Ukraine"<?php if ($country=="Ukraine") {echo "selected";} ?>>Ukraine</option>
                <option value="United Arab Emirates"<?php if ($country=="United Arab Emirates") {echo "selected";} ?>>United Arab Emirates</option>
                <option value="United Kingdom"<?php if ($country=="United Kingdom") {echo "selected";} ?>>United Kingdom</option>
                <option value="United States"<?php if ($country=="United States") {echo "selected";} ?>>United States</option>
                <option value="Uruguay"<?php if ($country=="Uruguay") {echo "selected";} ?>>Uruguay</option>
                <option value="Vanuatu"<?php if ($country=="Vanuatu") {echo "selected";} ?>>Vanuatu</option>
                <option value="Venezuela"<?php if ($country=="Venezuela") {echo "selected";} ?>>Venezuela</option>
                <option value="Viet Nam"<?php if ($country=="Viet Nam") {echo "selected";} ?>>Viet Nam</option>
                <option value="Yemen"<?php if ($country=="Yemen") {echo "selected";} ?>>Yemen</option>
                <option value="Zimbabwe"<?php if ($country=="Zimbabwe") {echo "selected";} ?>>Zimbabwe</option>
                       <!------------------------------------------------------------------------------------------------------------------->
                       <!------------------------------------------------------------------------------------------------------------------->
                </tr>
                <tr>
                  <td>Password</td>
                  <td><input type="password"  name="password_1" value="<?php echo $password_1; ?>"></td>
                </tr>
                <tr>
                  <td>Confirm Password</td>
                  <td><input type="password" name="password_2" value="<?php echo $password_2; ?>"></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
                </tr>
                <tr>
                  <td colspan=2>
                 <button type="submit" class="btn" name="change_user">Save</button></td>
                   
                </tr>
              </table>
            </form>
            

        <div class="clear"></div>
      </div>
      
    </div></div>
<div class="clear"></div>

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