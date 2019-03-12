<?php
// define variables and set to empty values
$Data_ir_laikas = $Valst_nr = $Atstumas = $Laikas = "";
$Data_ir_laikasErr = $Valst_nrErr = $AtstumasErr = $LaikasErr = "";
// $nevalyti =

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["Data_ir_laikas"])) {
      $Data_ir_laikasErr = "Data_ir_laikas privalomas laukas";
    } else {
      $Data_ir_laikas = test_input($_POST["Data_ir_laikas"]);
    }

    if (empty($_POST["Valst_nr"])) {
      $Valst_nrErr = "Valst_nr is required";
    } else {
      $Valst_nr = test_input($_POST["Valst_nr"]);
    }

    if (empty($_POST["Atstumas"])) {
      $Atstumas = "";
    } else {
      $Atstumas = test_input($_POST["Atstumas"]);
    }

    if (empty($_POST["Laikas"])) {
      $Laikas = "";
    } else {
      $Laikas = test_input($_POST["Laikas"]);
    }

    // if (empty($_POST["nevalyti"])) {
    //   $nevalytiErr = "nevalyti is required";
    // } else {
    //   $nevalyti = test_input($_POST["nevalyti"]);
    // }


//  $nevalyti = test_input($_POST["nevalyti"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
echo "<h2>Your Input:</h2>";
echo $Data_ir_laikas;
echo "<br>";
echo $Valst_nr;
echo "<br>";
echo $Atstumas;
echo "<br>";
echo $Laikas;
//echo $nevalyti;
?>
