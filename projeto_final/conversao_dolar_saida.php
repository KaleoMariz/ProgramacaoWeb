<?php
$dolar = $_GET['dolar'];
$conversao_dolar =$_GET['conversao_dolar'];

 switch($conversao_dolar){
        case 1: 
            $valor_do_dolar = $dolar * 5.32;
            echo " $dolar dólares equivale a $valor_do_dolar reais.";
            break;
        
        case 2: 
            $valor_do_dolar = $dolar * 0.76;
            echo " $dolar dólares equivale a $valor_do_dolar libras inglesas.";
            break;

        case 3: 
            $valor_do_dolar =$dolar * 0.86;
            echo "$dolar dólares equivale a $valor_do_dolar euros.";
            break;

        case 4: 
            $valor_do_dolar =$dolar * 7.12;
            echo "$dolar dólares equivale a $valor_do_dolar yuanes chineses.";
            break;
        
        case 5:
            $valor_do_dolar = $dolar * 154.09;
            echo "$dolar dólares equivale a $valor_do_dolar yenes japoneses.";
            break;
        
        default: 
            $valor_do_dolar = $dolar * 0.0076; 
            echo "$dolar dólares equivale a $valor_do_dolar gramas de ouro."; 
            break;
            
    }
?>

<a href="conversao_opcoes.php"><h2> Voltar ao menu opção de conversões.</h2></a>