<?php 
//coneção
require_once 'db_connection.php';

//sessao
session_start();

// Botão enviar
if (isset($_POST['btn-entrar'])):
    $erros = array();
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);
    $email = mysqli_escape_string($connect, $_POST['email']);

    // Verificação de campos vazios
    if (empty($login) or empty($senha) or empty($email)):
        $erros[] = "<li>Todos os campos (login, senha e email) precisam ser preenchidos</li>";
    else:
        // Validação de email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)):
            $erros[] = "<li>O email inserido não é válido</li>";
        else:
            // Verifica se o login existe no banco de dados
            $sql = "SELECT * FROM clientes WHERE login = '$login'";
            $resultado = mysqli_query($connect, $sql);

            if (mysqli_num_rows($resultado) > 0):
                $dados = mysqli_fetch_array($resultado);

                // Verificar se a senha fornecida corresponde ao hash no banco de dados (com md5)
                if(md5($senha) == $dados['senha']):
                    // Senha correta, loga o usuário
                    $_SESSION['logado'] = true;
                    $_SESSION['id_cliente'] = $dados['id'];
                    header('Location: home.php');
                    exit(); // É sempre bom usar exit() depois do redirecionamento
                else:
                    $erros[] = "<li>A senha não corresponde ao login fornecido</li>";
                endif;
            else:
                $erros[] = "<li>Usuário inexistente</li>";
            endif;
        endif;
    endif;
endif;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <style>
        ul { color: red; }
        form { margin: 20px 0; }
        button { background-color: #4CAF50; color: white; border: none; padding: 10px 20px; }
        input { margin-bottom: 10px; }
    </style>
</head>
<body>
    <h1> Clientes </h1>
    <hr>

    <?php                             //para identificar os erros quando vazio
    if(!empty($erros)):
        foreach($erros as $erro):
            echo $erro;
        endforeach;
    endif;
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <br>
    Nome Completo: <input type="text" name="login"><br>
    Senha: <input type="password" name="senha"><br>
    Email: <input type="text" name="email"><br>
    <button type="submit" name="btn-entrar"> Entrar </button>

    </form>
</body>
</html>