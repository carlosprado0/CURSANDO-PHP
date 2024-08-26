<?php 
//coneção
require_once 'db_connection.php';

//sessao
session_start();

//botão enviar
    if (isset($_POST['btn-entrar'])):
        $erros = array();
        $login = mysqli_escape_string($connect, $_POST['login']);
        $telefone = mysqli_escape_string($connect, $_POST['telefone']);

    if (empty($login) or empty($senha)):
        $erros[] = "<li> O campo login/telefone precisa ser preenchido </li>";
    else:

    endif;
    
    endif;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <h1> Clientes </h1>
    <?php 
    if(!empty($erros)):
        foreach($erros as $erro):
            echo $erro;
        endforeach;
    endif;
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        
    Nome Completo: <input type="text" name="login"><br>
    Num/Tel: <input type="password" name="telefone"><br>
    Email: <input type="text" name="email"><br>
    <button type="submitd" name="btn-entrar"> Entrar </button>

    </form>
</body>
</html>