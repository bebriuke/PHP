<!DOCTYPE html>
<html>
<head>
  <title>Page Title</title>
  <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
 <?php require_once "php/get_data.php"; ?>
 <?php require_once "php/functions.php"; ?>
  <h1>Prisijungimas pri MySQL serverio</h1>

  <p><?php//=$duomenys?></p>

  <table style="width:100%">
  <tr>
    <th> </th>
    <th>Data ir laikas</th>
    <th>Valst nr.</th>
    <th>Atstumas(m)</th>
    <th>Laikas (sek.)</th>
    <th>Greitis (km/h)</th>
    <th> </th>
    <th> </th>
  </tr>
  <?php foreach($data as $automobilis): ?>
  <tr>
    <td><?php echo $automobilis[id]; ?> automobilis</td>
    <td><?php echo $automobilis[data]; ?></td>
    <td><?php echo $automobilis[numeriai]; ?></td>
    <td><?php echo $automobilis[atstumas]; ?></td>
    <td><?php echo $automobilis[laikas]; ?></td>
    <td><?php echo gretis($automobilis[atstumas], $automobilis[laikas]); ?></td>
    <td> <a href='#'> Taisyti </a> </td>
    <td> <a href='#'> Trinti </a> </td>
  </tr>
<?php endforeach; ?>
</table>

<a href="create.php" ><button type="submit" value="Submit">Sukurk naują įrašą</button></a>

</body>
</html>
