<?php
$ouro = $_GET['ouro'];
$conversao_ouro =$_GET['conversao_ouro'];


switch ($conversao_ouro){
    case 1: 
        $valor_do_ouro = $ouro * 130; 
        echo "$ouro gramas de ouro equivale a $valor_do_ouro dólares.";
        break;
    
    case 2:
        $valor_do_ouro = $ouro * 98; 
        echo "$ouro gramas de ouro equivale a $valor_do_ouro libras.";
        break;
    
    case 3: 
        $valor_do_ouro = $ouro * 113; 
        echo "$ouro gramas de ouro equivale a $valor_do_ouro em euros.";
        break; 
    
    case 4:
        $valor_do_ouro = $ouro * 928;
        echo "$ouro gramas de ouro equivale a $valor_do_ouro em yuanes chineses.";
        break;

    case 5: 
        $valor_do_ouro = $ouro * 21.000;
        echo "$ouro gramas de ouro equivale a $valor_do_ouro em yenes japoneses.";
        break;
    
    default:
        $valor_do_ouro = $ouro * 700;
        echo "$ouro gramas de ouro equivale a $valor_do_ouro em reais brasileiro";
        break;
}
?>

<a href="conversao_opcoes.php"><h2> Voltar ao menu opção de conversões.</h2></a>