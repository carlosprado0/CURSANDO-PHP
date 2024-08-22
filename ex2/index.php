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

            
            // condicionais if, else, elseif
            $numero = 50;

             if ($numero == 10):
             echo "é igual a 10";
             elseif($numero <= 9):
                echo "é diferente a 9";
             else:
                echo "é diferente de 10";
            endif;
            echo "<hr>";

            $media = 7;
            echo ($media >= 7) ? " approve" : "disapprove";
            echo "<hr>";


            // condicionais switch, case
            $cor = "azul";
            switch ($cor):
                case "azul":
                echo "Sua cor é azul";
                break;

                case "verde":
                echo "Sua cor é verde";
                break;

                case "amarelo":
                echo "Sua cor é amarelo";
                break;

                default:
                echo "sua cor preferida não está aqui";
            endswitch;
            echo "<br>";

            $cor = "verde";
            switch ($cor):
                case "azul":
                echo "Sua cor é azul";
                break;

                case "verde":
                echo "Sua cor é verde";
                break;

                case "amarelo":
                echo "Sua cor é amarelo";
                break;

                default:
                echo "sua cor preferida não está aqui";
            endswitch;
            echo "<br>";

            $cor = "amarelo";
            switch ($cor):
                case "azul":
                echo "Sua cor é azul";
                break;

                case "verde":
                echo "Sua cor é verde";
                break;

                case "amarelo":
                echo "Sua cor é amarelo";
                break;

                default:
                echo "sua cor preferida não está aqui";
            endswitch;
            echo "<br>";

            $cor = "ciano";
            switch ($cor):
                case "azul":
                echo "Sua cor é azul";
                break;

                case "verde":
                echo "Sua cor é verde";
                break;

                case "amarelo":
                echo "Sua cor é amarelo";
                break;

                default:
                echo "sua cor preferida não está aqui";
            endswitch;
            echo "<br>";
            echo "<hr>";


            //Operadores aritmeticos
            echo 15 + 8;
            echo "<br>";

            echo 15 - 5;
            echo "<br>";

            echo 15 / 5;
            echo "<br>";

            echo 15 * 5;
            echo "<br>";

            echo 15 % 4;
            echo "<br>";

            echo 15 ** 3;
            echo "<br>";

            echo "<hr>";


            // Operadores de incremento e decremento
            //$num = 20;
            // pré-inc
            //echo ++$num;
            //echo "<br>";

            // pos-inc
            //echo $num++;
            //echo "<br>";

            // pré-decre
            //echo --$num;
            //echo "<br>";

            // pos-decre
            //echo $num--;
            //echo "<br>";


            //Operadores de atribuição
            $ex = 10;
            $ex2 = 35;

            $ex = $ex * $ex2; // da certo com /, -, *, +, ** e %
            echo $ex;

            echo "<br>";
            echo "<hr>";

            // Operadores de Comparação
            echo "<strong>=</strong> -> operador de contribuicao";
            echo "<br>";

            echo "<strong>==</strong>  -> comparacao";
            echo "<br>";

            echo "<strong>===</strong>  -> identidade";
            echo "<br>";

            echo "<strong>!=</strong>  -> nao igual";
            echo "<br>";

            echo "<strong>!==</strong> -> nao identico";
            echo "<br>";

            echo "<strong><></strong>  -> diferente";
            echo "<br>";

            echo "<strong><=</strong>  -> igual ou menor que";
            echo "<br>";

            echo "<strong>=></strong>  -> igual ou maior que";
            echo "<br>";

            echo "<b>></b>  -> maior que";
            echo "<br>";

            echo "<strong><</strong>  -> menor que";
            echo "<br>";

            echo "<strong><=></strong>  -> se um lado for menor, ele vai mostrar -1, se igual 0, se maior +1";
            echo "<br>";
            echo "<hr>";


            // Operadores Logicos
            $nome = "Carlos Prado";
            $idade = 18;

            if(($idade == 18) and ($nome == "Carlos Prado")): // retorna verdadeiro quando ambas as expressoes estão certas. AND ou &&
                echo "É verdade";
            else:
                echo "Não é verdade";
            endif;
            echo "<br>";

            $nome = "Carlos Prado";
            $idade = 18;

            if(($idade == 18) or ($nome == "Carlos Prado")): // retorna verdadeiro quando pelo menos uma expressao esteja certa. OR ou ||
                echo "É verdade";
            else:
                echo "Não é verdade";
            endif;
            echo "<br>";

            $nome = "Carlos Prado";
            $idade = 18;

            if(($idade == 18) xor ($nome == "Carlos Prado")): // retorna verdadeiro quando apenas uma expressao esteja certa, se tiver duas certo vai dar falso
                echo "É verdade";
            else:
                echo "Não é verdade";
            endif;
            echo "<br>";

            $nome = "Carlos Prado";
            $idade = 19;

            if(!($idade == 18) and ($nome == "Carlos Prado")): // retorna verdadeiro quando a variavel é diferente da nossa expressao
                echo "É verdade";
            else:
                echo "Não é verdade";
            endif;
            echo "<br>";
            echo "<hr>";


            // While e Do While
            $contador = 1;                       // while significa, enquanto, então enquanto a condição for verdadeira o trecho de codigo sera executado
            while ($contador <= 10){
                echo "o numero é $contador <br>";
                $contador++;
            }
            echo "<hr>";

         
            $numeracao = 1;

            do {                                    // Já o Do, ele xecuta e depois faz a verifição para ver se é verdadeira ou nao
                echo "o numero é $numeracao <br>";
                $numeracao++;
            } while ($numeracao <= 10);

            echo "<hr>";
            // for e foreach
            for ($contador = 1; $contador <= 10; $contador++): //usado para o numero de repeticoes que vc precisa
                echo "9 x $contador =".($contador*9)."<br>";
            endfor;
                echo "<hr>";


            $bolachas = array("bauduco", "trakinas" , "skinni");  // foreach significa para cada, entao para cada item do array ele vai atribuir um valor usando uma variavel $
                foreach($bolachas as $rankingbolachas => $valor) {
                    echo $rankingbolachas." - ".$valor. "<br>";
                }
             echo "<hr>";


             // FUNCOES PARA STRINGS
            $nome = "carlos";                   
            $novonome = strtoupper($nome);          //deixa a variavel em maiuscula
            echo $novonome;
            echo "<br>";
            echo "<hr>";

            $nome = "PAMELLA";
            $novonome = strtolower($nome);          //deixa a variavel em minuscula
            echo $novonome;
            echo "<br>";
            echo "<hr>";


            $mensagem = "boa tarde meu consagrado";
            echo substr($mensagem, 0);
            echo "<hr>";


            $objeto = "teclado";
            $nvobjeto = str_pad($objeto,9, "*", STR_PAD_BOTH);    // ele adiciona caracteres na nossa string
            echo $nvobjeto;
            echo "<hr>";


            $palavra = str_repeat("parabens ", 3);
            echo $palavra;
            echo "<br>";
                                                                // duas maneiras de usar o repeat nas nossas strings, o debaixo eu msm testei
            $letra = "p ";
            echo $letra = str_repeat($letra, 2);
            echo "<hr>";


            $mensagem = "baitola";
            echo strlen($mensagem);                            //mostra quantos caracteres há na string
            echo "<hr>";

            $texto = "a selecao br é fraca dmsss credo ridicula";       // substitui uma palavra que voce escolher
            $novoTexto = str_replace("br", "BR", $texto);
            echo $novoTexto;
            echo "<br>";
         
            echo strpos($texto, "selecao");             // mostrar a posição da palavra que voce deseja
            echo "<hr>";


            //Funções para numeros
            $exeplo = 1000.43;                          // para fazer a formatação dos numeros e deixar padrao 
            $preco = number_format($exeplo, 2, ",", ".");
            echo "o valor do produto é R$ $preco";
            echo "<hr>";

            echo floor(4.30);  //serve para arrendondar para baixo
            echo "<br>";
            echo "<hr>";

            echo round(4.96);  //serve para arrendondar para o maais proximo
            echo "<br>";
            echo "<hr>";

            echo ceil(4.87);  //serve para arrendondar para cima
            echo "<br>";
            echo "<hr>";

            $numeroAleatorio = rand(1,1000);
            echo "Numero aleatorio é $numeroAleatorio";
            echo "<br>";

            $sorteio = rand(1,20);  // serve para fazer sorteios
            echo "O resultado do sorteio é $sorteio";
            echo "<hr>";
            
            // Criando Funções
            function exibirNome() {             // criei a função
                echo "Meu nome é Carlos Eduardo";
            }
            exibirNome();                       // depois puxei ela para aparecer na tela, 0 () é um parametro
            echo "<br>";

            //e tem essa forma
            function ExibirNom($nome) {             
            echo "Meu nome é $nome";
            }
            ExibirNom("Carlos Prado");
            echo "<br>";


            function media($nom,$n1,$n2,$n3,$n4){
                $media = ($n1 + $n2 + $n3 + $n4) / 4;
                if($media >= 7):                                // : significa oq ele vai fazer
                    echo "$nom foi aprovado na escola com a $media";
                else:
                    echo"$nom foi reprovado na escola";
                endif;
            }
            media("Otavio", 10, 5, 10, 8);
            echo "<br>";
            media("Fernanda", 10, 8, 10, 8);
            echo "<br>";
            media("Carlos", 10, 9, 10, 8);
            echo "<br>";
            media("Marcelo", 10, 10, 10, 10);
            echo "<hr>";


            //SuperGlobais
            echo "<h1>SuperGlobal GLOBALS</h1>";
            $x = 10;                        // com a globals podemos usar as variavel globais de  qualquer lugar de script
            $y = 15;

            function soma() {
                echo $GLOBALS['x'] + $GLOBALS['y'];
            }
            soma();
            echo "<br>";
            echo "<hr>";

            echo $_SERVER['PHP_SELF']."<br>";       // no site de php há mais indices do globar_$server
            echo $_SERVER['SERVER_NAME']."<br>";
            echo $_SERVER['SCRIPT_FILENAME']."<br>";
            echo $_SERVER['SERVER_PORT']."<br>";
            echo $_SERVER['REMOTE_ADDR']."<br>";
            echo "<hr>";


            setcookie("dia", "quinta", time() + 3600);       //3600 = 1h soq em segundos
            echo "<h1>SuperGlobal COOKIE</h1>";
            var_dump($_COOKIE);
            echo "<hr>";

            
            session_start();
            $_SESSION["teste"] = "CORRETO!";
            echo "<h1>SuperGlobal SESSION</h1>";
            var_dump($_SESSION);
            echo "<hr>";

            echo "<h1>SuperGlobal ENV</h1>";
            var_dump($_ENV);
            echo "<hr>";


            //superGlobal REQUEST puxa dos dois e colaca em um unico array

             
        ?>
</body>
</html>