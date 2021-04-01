function validation()
{

//Fonction name and family name
if(document.formulaire.name.value == "")
{
    alert("Enter your name , please !");
    return false;
}
if(document.formulaire.familyname.value == "")
{
    alert("Enter your family name , please !");
    return false;
}
//Fonction Birth date
birthdate=document.formulaire.birthdate.value;
if(birthdate == "")
    {
        alert("Enter your birth date , please !");
        return false;
 }

var dateformat = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
// Match the date format through regular expression
if(birthdate.match(dateformat))
{
//birthdate.focus();
//Test which seperator is used '/' or '-'
var opera1 = birthdate.split('/');
var opera2 = birthdate.split('-');
lopera1 = opera1.length;
lopera2 = opera2.length;
// Extract the string into month, date and year
if (lopera1>1)
{
  var pdate = birthdate.split('/');
}
else if (lopera2>1)
{
  var pdate = birthdate.split('-');
}
var dd = parseInt(pdate[0]);
var mm  = parseInt(pdate[1]);
var yy = parseInt(pdate[2]);
// Create list of days of a month [assume there is no leap year by default]
var ListofDays = [31,28,31,30,31,30,31,31,30,31,30,31];
if (mm==1 || mm>2)
{
  if (dd>ListofDays[mm-1])
  {
    alert('Invalid date format!');
    return false;
  }
}
if (mm==2)
{
  var lyear = false;
  if ( (!(yy % 4) && yy % 100) || !(yy % 400)) 
  {
  lyear = true;
  }
  if ((lyear==false) && (dd>=29))
  {
    alert('Invalid date format!');
    return false;
  }
  if ((lyear==true) && (dd>29))
  {
    alert('Invalid date format!');
    return false;
  }
}
}
else
{
alert("Invalid date format!");
//birthdate.focus();
return false;
}
// Fonction password:
password_1 = document.formulaire.password_1.value;
    password_2 = document.formulaire.password_2.value;

if ((password_1=='')||(password_2==''))
{
  alert("Enter your password , please !");
  return false;
}
    if(password_1 != password_2)
    {
  alert("The two passwords you just entered are different!");
        return false;
}




//Fonction email:
if(document.formulaire.email.value == "")
    {
        alert("Enter your email , please !");
        return false;
    }
    adresse = document.formulaire.email.value;
    taille = document.formulaire.email.value.length;

    validelog = false;
    validedom = false;
    valideext = false;


    arob = adresse.lastIndexOf("@");
    login = adresse.substring(0,arob);

    pointfinal = adresse.lastIndexOf(".");
    extension = adresse.substring(pointfinal,taille);

    domaine = adresse.substring(arob+1,pointfinal);

     /* un login doit avoir toujours plus de 2 caractères, on fait le test */
    if ( login.length > 2 ) 
    {
        validelog = true;
     }
    else 
    {
        validelog = false;
    }
     /* un domaine a toujours plus de 1 caractère, on fait le test */
    if ( domaine.length > 1 ) 
    {
        validedom = true;
     }
    else 
    {
         
         validelog = false;
    }

      /* une extension a toujours 2 ou 3 caractères, on fait le test */
     if ( pointfinal > -1 && (extension.length == 3 || extension.length == 4) ) 
    {
         valideext = true;
     }
    else 
    {
        valideext = false;
     }

     /* les trois variables doivent etre vraies pour valider l'adresse mail saisie*/
     if (!( validelog == true && validedom == true && valideext == true ))
    {
        alert('this is not a valid email address !');
         return false;
 }





    return true;
}
