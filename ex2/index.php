<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <H1>Aprendendo Arrays</H1>
    <?php 

    //ARRAYS NUMERICOS
    $carros = array(1=> "CIVIC", 2=> "COROLA", 3=> "TYPE R");
    $carros[] = "S10";
    $carros[] = "F40";

    print_r($carros);
    echo "<hr>";

        //foreach
        
        foreach($carros as $valor) {
            echo $valor. "<br>";

        }
        echo "<hr>";
        //ARRAYS ASSOCIATIVOS

        $carros = array ("CIVIC"=> " 78K", "COROLA"=> " 49K", "TYPE R"=> " 119K", "S10"=> " 110K", "F40"=> " 649K");
        
        foreach($carros as $cars => $valores) {
            echo $cars.":".$valores. "<br>";
        }
        echo "<hr>";

        //ARRAYS MULTIDIMENSIONAIS
        $bolachas = array("antigas"=> array("bauduco" => "top 1", "trakinas" => "top 2", "skinni" => "top 3"),
                          "presente" => array("negresco" => "top 1", "rancheiro" => "top 2", "passatempo" => "top 3")
                         );
        
        foreach($bolachas["antigas"] as $rankingbolachas => $valor) {
            echo $rankingbolachas.":".$valor. "<br>";
        }
         echo "<hr>";

        foreach($bolachas["presente"] as $rankingbolachas => $valor) {
            echo $rankingbolachas.":".$valor."<br>";

        }
        echo "<hr>";
    ?>
</body>
</html>
