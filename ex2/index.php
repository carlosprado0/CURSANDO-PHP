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

        // Funções de Arrays

        $amigos = array("Alexandre", "Kauã", "Sebastião", "Pâmella");

        if(is_array($amigos)):
            echo "Ainda existe amigos na lista";
            
        else: 
            echo "Não são os amigos";
        endif;

        echo "<hr>";

        $amigos = array("top 1" => "xande", "top 2" =>"gagao", "top 3" =>"sabas", "top 4"=>"pam");

        if(in_array("gal", $amigos)):
            echo "existe na lista";
        else:
            echo "Não está na lista";
        endif;

        echo "<hr>";


        $keys = array_keys($amigos); // chama as string do arrays de cima
        print_r($keys);
        echo "<hr>";

        $values = array_values($amigos); // chama os valores dos arrays de cima
        print_r($values);
        echo "<hr>";

        $carros = array("Camaro","F40","CIVIC");  // funde as variaveis
        $motos = array("CB1000", "Z1000","KAWAZAKI NINJA");
        $veiculos = array_merge($carros, $motos);
        print_r($veiculos);

        echo "<hr>";
            
       
            echo array_pop($motos); //retira o ultimo array e ainda mostra qual foi retirado
            echo "<br>";
            print_r($motos); 
            echo "<br>";
            echo "<hr>";


            echo array_shift($carros); //retira o primeiro array e ainda mostra qual foi retirado
            echo "<br>";
            print_r($carros); 
            echo "<br>";
            echo "<hr>";


            $perifericos = array("teclado", "mouse", "cabinete"); // add 1 ou mais dados no inicio do nosso array
            print_r($perifericos);
            echo "<br>";
            echo array_unshift($perifericos, "monitor", "soundbar", "mousepad");
            print_r($perifericos);
            echo "<hr>";


            $pecas = array("parafuso", "prego", "rosca"); // add 1 ou mais dados no final do nosso array
            print_r($pecas);
            echo "<br>";
            echo array_push($pecas, "madeira", "pedra", "martelo");
            print_r($pecas);
            echo "<hr>";


            $carros = array("Camaro","F40","CIVIC");  // mescla as variaveis
            $custom = array("bebe pra poha", "raridade","obra de arte");
            $veiculos = array_combine($carros, $custom);
            print_r($veiculos);
            echo "<hr>";


            $somatoria = array(1,543,243,23425); // serve para somar o que há dentro do array
            echo array_sum( $somatoria );
            echo "<hr>";
        

            $data = "20/04/2025";  // transforma string em array
            $novaData = explode('/', $data);
            print_r($novaData);
            echo "<hr>";


            $ano = array("parafuso", "prego", "rosca");  // transforma array em string
            $novaAno = implode(',', $ano);
            print_r($novaAno);
            echo "<hr>";
    ?>
</body>
</html>