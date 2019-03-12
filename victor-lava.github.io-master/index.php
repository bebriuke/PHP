<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Homework</title>
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700|Sintony" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <script type="text/javascript" src="js/script.js"></script>
    </head>
    <body>
      <?php require_once "php/header.php"; ?>
      <main class="content">
        <?php require_once "php/intro_flex.php"; ?>
        <?php require_once "php/team.php"; ?>
        <?php require_once "php/carousel.php"; ?>
        <?php require_once "php/contact.php"; ?>
      </main>
      <?php require_once "php/footer.php"; ?>
      <script type="text/javascript">
          document.querySelector('.text').addEventListener('click', function() {
              alert('paklikino');
          })

      </script>
    </body>
</html>
