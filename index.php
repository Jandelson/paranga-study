<?php
session_start();
if ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:login.php');
}

$logado = $_SESSION['login'];
?>
<!DOCTYPE html>
<html lang="PT-Br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Parangary Agenda</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- CSS PERSONALIZADO -->
    <!-- <link href="css/style.css" rel="stylesheet"> -->

</head>
<?php
include "config.php";
?>

<body>

    <div class="container">

        <!-- Main component for a primary marketing message or call to action -->
        <?php
        $page = '';
        if (empty($_REQUEST['page'])) {
        ?>
            <div class="jumbotron">
                <h2><?php echo "Bem vindo(a) " . $logado ?> - Agenda Telefônica!</h2>
                <p>Aqui você cadastra os seus contatos e pode realizar buscas a qualquer momento e em qualquer lugar!</p>
            </div>
        <?php } else {
            $pagina = $_REQUEST['page'];
            include($pagina . '.php');
        }
        ?>

    </div> <!-- /container -->

    <?php
    //mysqli_close($con);
    ?>
    <!-- Bootstrap core JavaScript
      ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="vendor/components/jquery/jquery.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>