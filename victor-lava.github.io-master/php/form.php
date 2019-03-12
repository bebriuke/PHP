<?php require_once "php/formos_validumas.php"; ?>

<form  method="POST" action="">

    <input type="text" name="name" placeholder="<?php echo $Full_name;?>", value="<?php if($Full_name != "Full name") echo $Full_name; ?>" >
    <span class="error"><?php if (isset($nameError)) echo $nameError ?></span><br>
    <input type="text" name="email" placeholder=<?php echo $E_mail ?> <?php if($E_mail != "E-mail") echo "value=".$E_mail; ?>>
    <span class="error"><?php if (isset($emailError)) echo $emailError ?></span><br>
    <textarea name="message" placeholder=<?php echo $Mmessage; ?>><?php if($Mmessage != "Message") echo "$Mmessage"; ?></textarea>
    <span class="error"><?php if (isset($messageError)) echo $messageError ?></span><br>
    <button type="submit">Send</button>
    <span class="error"><?php echo $issiusta ?></span><br>
</form>
