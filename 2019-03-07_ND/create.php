<?php // require_once 'functions/form_validation.php';?>


<form action="PHP/form_validation.php" method="post">
  Data ir laikas:<br>
  <input type="text" name="Data_ir_laikas" placeholder="Pvz.: 2000-01-01 01:12">
  <span class="error">* <?php echo $Data_ir_laikasErr;?></span>
  <br>
  Valst nr.:<br>
  <input type="text" name="Valst_nr" placeholder="Pvz.: LRS 123">
  <span class="error">* <?php echo $Valst_nr;?></span>
  <br>
  Atstumas(m):<br>
  <input type="text" name="Atstumas" placeholder="Pvz.: 1220">
  <br>
  Laikas(s):<br>
  <input type="text" name="Laikas" placeholder="Pvz.: 320">
  <span class="error"><?php echo $LaikasErr;?></span>
  <br>
  <input type="checkbox" name="nevalyti" > Nevalyti<br>
  <br>
  <input type="submit" value="Perkelti į lentelę">
</form>
