<?php
$dolar = $_GET['dolar'];
$conversao_dolar =$_GET['conversao_dolar'];

 switch($conversao_dolar){
        case 1: 
            $valor_do_dolar = $dolar * 5.32;
            echo "<h1> $dolar dólares equivale a $valor_do_dolar reais.</h1>";
            break;
        
        case 2: 
            $valor_do_dolar = $dolar * 0.76;
            echo "<h1> $dolar dólares equivale a $valor_do_dolar libras inglesas.</h1>";
            break;

        case 3: 
            $valor_do_dolar =$dolar * 0.86;
            echo " <h1>$dolar dólares equivale a $valor_do_dolar euros.</h1>";
            break;

        case 4: 
            $valor_do_dolar =$dolar * 7.12;
            echo "<h1>$dolar dólares equivale a $valor_do_dolar yuanes chineses.</h1>";
            break;
        
        case 5:
            $valor_do_dolar = $dolar * 154.09;
            echo "<h1>$dolar dólares equivale a $valor_do_dolar yenes japoneses.</h1>";
            break;
        
        default: 
            $valor_do_dolar = $dolar * 0.0076; 
            echo "<h1>$dolar dólares equivale a $valor_do_dolar gramas de ouro.</h1>"; 
            break;
            
    }
?>

<a href="conversao_opcoes.php"><h2> Voltar ao menu opção de conversões.</h2></a>
