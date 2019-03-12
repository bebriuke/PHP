<!-- jungimuisi prie serverio naudoti PDO -->
<?php
   $user = 'root';
   $pass = 'root';
   $dbh = new PDO('mysql:host=localhost;dbname=automobiliai', $user, $pass);
   $query = $dbh -> prepare('SELECT * FROM greiciai'); //selektina
   $duomenys = $query -> execute(); //pasiima
   $data = $query->fetchAll();
   echo '<pre>';
   //print_r($query->fetch()); //apdoroja ir sudeda į masyvą // skirtas gauti viena įrašui
   //fetch turi dar papildomų savybių, bet ar jos reikalingo?
   //echo '-------------';
   //print_r($data); // Visus sudeda
  // echo '</pre>';
 // echo '-------------';
 //   echo '<pre>';
 //   print_r($duomenys); //apdoroja ir sudeda į masyvą
 //   echo '</pre>';
?>
