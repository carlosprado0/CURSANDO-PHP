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

    if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT )):
        $erros[] = "idade precisa ser um inteiro";
    
    endif;
    
    if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT )):
        $erros[] = "peso precisa ser um float";
    
    endif;

    if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL )):
        $erros[] = "URL invalida";
    
    endif;

    if(!empty($erros)):
        foreach($erros as $erro):
        echo "<li> $erro </li>";
        endforeach;
    endif;
else:
    echo "Seus dados estão corretos!";
    endif;

?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        nome: <input type="text" name="nome"><br>
        url: <input type="text" name="url"><br>
        idade: <input type="text" name="idade"><br>
        peso: <input type="text" name="peso"><br>
        <button type="submit" name="enviar-formulario"> Enviar </button><br>
    </form>

</body>
</html>