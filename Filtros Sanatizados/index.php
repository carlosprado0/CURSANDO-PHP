<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando o metodo Filtros</title>
</head>
<body>
<?php 
if(isset($_POST['enviar-formulario'])):
    $erros = array();


    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    echo $nome ."<br>";

    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    echo $idade ."<br>";
    if(!filter_var($idade, FILTER_VALIDATE_INT)):
        $erros[] = "Idade não identificada";
    endif;

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    echo $email ."<br>";
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
        $erros[] = "email não identificada";
    endif;

    $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
    echo $url ."<br>";
    if(!filter_var($url, FILTER_VALIDATE_URL)):
        $erros[] = "url não identificada";
    endif;

    if(!empty($erros)):
        foreach($erros as $erro):
        echo "<li> $erros </li>";
        endforeach;
    endif;
else:
    echo "Seus dados estão corretos!";
    endif;

?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        nome: <input type="text" name="nome"><br>
        email: <input type="text" name="email"><br>
        idade: <input type="text" name="idade"><br>
        url: <input type="text" name="url"><br>
        <button type="submit" name="enviar-formulario"> Enviar </button><br>
    </form>

</body>
</html>