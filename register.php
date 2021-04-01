<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<title>ENGIST</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/style.css" type="text/css" />
<script language="javascript" src="validation.js"> </script>

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
        <li class="last" class="active" ><a href="login.php">Login</a></li>
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
          <form name="formulaire" method="post" action="register.php" onsubmit="return validation()">
              <?php include('errors.php'); ?>
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
                  <td><select name="sexe" >
                       <option value="Male" selected>Male</option> 
                       <option value="Female">Female</option>
                </tr>
                  <td>Birth Date</td>
                  <td><input type="text" name="birthdate" value="<?php echo $birthdate; ?>" placeholder="jj/mm/aaaa or jj-mm-aaaa"></td>
                </tr>
                <tr>
                  <td>country</td>
                  <td><select name="country" >
                <option value="Afghanistan">Afghanistan</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Argentina">Argentina</option>
                <option value="Australia">Australia</option>
                <option value="Belgium">Belgium</option>
                <option value="Brazil">Brazil</option>
                <option value="Canada">Canada</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Colombia">Colombia</option>
                <option value="Cuba">Cuba</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Egypt">Egypt</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="Germany">Germany</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iraq">Iraq</option>
                <option value="Italy">Italy</option>
                <option value="Japan">Japan</option>
                <option value="Mexico">Mexico</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Portugal">Portugal</option>
                <option value="Qatar">Qatar</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="South Africa">South Africa</option>
                <option value="Spain">Spain</option>
                <option value="Sudan">Sudan</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Yemen">Yemen</option>
                <option value="Zimbabwe">Zimbabwe</option>
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
                  <td><input type="text" name="email" placeholder="example@engist.com" value="<?php echo $email; ?>"></td>
                </tr>
                <tr>
                  <td colspan=2>
                  <input type="checkbox" name="terms" id="terms"> I accept <a href="conditions.pdf" download>
                   Terms and Conditions</a> <input type="submit" class="butto" name="reg_user" value=" Register "/></td>
                   
                </tr>
              </table>
            </form>
            <p align="center">
                Already a member? <a href="login.php">Sign in</a>
            </p>
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