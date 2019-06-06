<!DOCTYPE html>
<html lang="en">
  <?
    include("utils/connect.php");
    define(SITE, "http://localhost/cadastro/");
  ?>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Notícias Online</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="css/landing-page.css" rel="stylesheet">
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="utils/jquery.mask.js"></script>
  </head>
  <body>
    <? 
      include("modulos/header.php");
      switch ($_GET['a']) {
        case 'cadastro':
          include("modulos/cadastro.php");
          break;
        case 'cadastra':
          include("modulos/cadastra.php");
          break;
        case 'consulta':
          include("modulos/consulta.php");
          break;
        case 'atualiza':
          include("modulos/atualiza.php");
          break;
        case 'atualizar':
          include("modulos/atualizar.php");
          break;
        case 'update':
          include("modulos/update.php");
          break;
        case 'consultar':
          include("modulos/consultar.php");
          break;
        default:
          include("modulos/corpo.php");
          break;
      }
      include("modulos/footer.php");
    ?>
  </body>
</html>
