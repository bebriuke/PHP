<?php

  $Full_name = "Full name";
  $E_mail = "E-mail";
  $Mmessage = "Message";

  $nameError = null;
  $emailError = null;
  $messageError = null;

  $kiekis = 0;
  $issiusta = "";


  function validate($str) {
		return trim(htmlspecialchars($str));
	}


  $regex = '/^(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){255,})(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){65,}@)(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22))(?:\.(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-[a-z0-9]+)*\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-[a-z0-9]+)*)|(?:\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\]))$/iD';



if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $name = $_POST['name'];
    $Full_name = $name;
    if(empty($name)){
      $nameError = 'Enter name';
      $kiekis++;
    }
    elseif (!preg_match('/^[\p{L} ]+$/u', $name)) {   //'/^[\p{L} ]+$/u',  '/^[a-zA-Z\s]+$/'
        $nameError = 'Name can only contain letters, numbers and white spaces';
        $kiekis++;
    }
    elseif (strlen($name) < 3){
        $nameError = 'Name can be more than 3 letters';
        $kiekis++;
    }

    $email = $_POST['email'];
    $E_mail = $email;
    if (!preg_match($regex, $email)){ //(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    	  $emailError = 'Invalid Email';
        $kiekis++;
    }
    else if(strlen($email)==0){
      $emailError = 'Enter email';
      $kiekis++;
    }

    $message = $_POST['message'];
    $Mmessage = $message;
    if(empty($message)){
      $messageError = 'Still empty';
      $kiekis++;
    }
    elseif(strlen($message) < 5){
      $messageError = 'Too less letters';
      $kiekis++;
    }
    elseif(strlen($message) > 500){
      $messageError = 'Too more letters';
      $kiekis++;
    }


    if($kiekis == 0) {
      $issiusta = "Duomenys sėkmingai išsiųsti";
      $Full_name = "Full name";
      $E_mail = "E-mail";
      $Mmessage = "Message";
    }
}






?>
