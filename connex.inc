<?php

function connex()
{
$idCon = mysqli_connect("localhost","root","root");

// Check connection
if ($idCon)
  {
	$idBase=mysqli_select_db($idCon,"registration");
	if(!($idBase))
	{	
		die("Failed to connect to Data Base");

	}
  }
 else
 {
 die( "Failed to connect to MySQL");
 }

 return $idCon;
 }
?> 