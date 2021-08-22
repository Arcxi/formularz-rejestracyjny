<!doctype html>
<html>
     <head>
          <meta charset="UTF-8" />
          <title>Sklep muzyczny</title>
		  <link rel="stylesheet" href="muzyka.css" />
     </head>
     <body>
	 <div id="baner">
	
	 
	<h1>   SKLEP MUZYCZNY </h1>

	 
	 
	 
	
	 </div>
	 <div id="lewy">


<h2> NASZA OFERTA </h2>
	
	<Ol>
<li> Instrumenty muzyczne </li>
<li>  Sprzęt audio </li> 

<li> Płyty CD  </li>

	
	</Ol>

	 </div>
	 
	 <div id="prawy">
<?php


 $imie= $_POST['imie'];
	 $nazwisko= $_POST['nazwisko'];
	 $adres= $_POST['adres'];
	 $tel= $_POST['telefon'];
	 $log= $_POST['login'];
	$haslo= $_POST['haslo'];
echo "konto "  . $imie." ". $nazwisko. " zostało zarejestrowane w sklepie muzycznym" ;
  $db= new mysqli( "localhost", "root", "", "sql");
	 if( mysqli_connect_errno())
	 {echo 'blad';}
	 else
	 {
	 
	 $zapytanie= "INSERT INTO uzytkownicy(imie,nazwisko,adres,telefon) values ('$imie','$nazwisko','$adres','$tel')";
	 $wynik=$db -> query($zapytanie);
	  $db -> close();
	 }
	  $db= new mysqli( "localhost", "root", "", "sql");
	 if( mysqli_connect_errno())
	 {echo 'blad';}
	 else
	 {
	 
	 $zapytanie= "INSERT INTO konta(login,haslo) values ('$log','$haslo')";
	 $wynik=$db -> query($zapytanie);
	  $db -> close();
	 }
	 ?>



	 </div>

     </body>
</html>
