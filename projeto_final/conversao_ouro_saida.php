<?php
$ouro = $_GET['ouro'];
$conversao_ouro =$_GET['conversao_ouro'];


switch ($conversao_ouro){
    case 1: 
        $valor_do_ouro = $ouro * 130; 
        echo "<h1>$ouro gramas de ouro equivale a $valor_do_ouro dólares.</h1>";
        break;
    
    case 2:
        $valor_do_ouro = $ouro * 98; 
        echo "<h1>$ouro gramas de ouro equivale a $valor_do_ouro libras.</h1>";
        break;
    
    case 3: 
        $valor_do_ouro = $ouro * 113; 
        echo "<h1>$ouro gramas de ouro equivale a $valor_do_ouro em euros.</h1>";
        break; 
    
    case 4:
        $valor_do_ouro = $ouro * 928;
        echo "<h1>$ouro gramas de ouro equivale a $valor_do_ouro em yuanes chineses.</h1>";
        break;

    case 5: 
        $valor_do_ouro = $ouro * 21.000;
        echo "<h1>$ouro gramas de ouro equivale a $valor_do_ouro em yenes japoneses.</h1>";
        break;
    
    default:
        $valor_do_ouro = $ouro * 700;
        echo "<h1>$ouro gramas de ouro equivale a $valor_do_ouro em reais brasileiro </h1>";
        break;
}
?>

<a href="conversao_opcoes.php"><h2> Voltar ao menu opção de conversões.</h2></a>
