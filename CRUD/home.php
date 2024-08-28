<?php 
//coneção
require_once 'db_connection.php';

//sessao
session_start();

// dados
$id = $_SESSION['id_cliente'];
$sql = "SELECT * FROM clientes WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);

//verificação
if(!isset($_SESSION['logado'])):
    header('Location: index.html');
endif;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMs</title>
    <style>
         a {
            color: blue; /* Cor do texto do link */
            text-decoration: none; /* Remove o sublinhado do link */
        }

        a:hover {
            color: red; /* Cor do texto do link ao passar o mouse */
            text-decoration: underline; /* Sublinha o link ao passar o mouse */
        }
    </style>
</head>
<body>
<h1> Olá <?php echo $dados['login']; ?></h1>
<a href="logout.php"> Sair </a>

    
</body>
</html>