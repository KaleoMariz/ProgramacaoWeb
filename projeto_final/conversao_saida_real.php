<?php

    $real= $_GET['real'];
    $conversao_real =$_GET['conversao_real'];
    
    switch ($conversao_real){
        case 1:    
            $valor_do_real = $real * 0.19;
            echo "<h1> $real reais equivale a $valor_do_real dólares </h1>";
            break;

        case 2:
            $valor_do_real =$real * 0.14;
            echo "<h1> $real reais equivale a $valor_do_real libras </h1>";
            break;
            
        case 3:
            $valor_do_real = $real * 0.16;
            echo "<h1> $real reais equivale a $valor_do_real euros </h1>";
            break;

        case 4: 
            $valor_do_real = $real * 1.34; 
            echo "<h1> $real reais equivale a $valor_do_real yuanes </h1>";
            break;

        case 5:
            $valor_do_real = $real * 28.98;
            echo "<h1>$real reais equivale a $valor_do_real yenes </h1>";
            break;
        
        default:
            $valor_do_real = $real * 0.00143;
            echo "<h1>$real reais equivalem a $valor_do_real gramas de ouro </h1>";
            break;
    }

?>
<a href="conversao_opcoes.php"><h2> Voltar ao menu opção de conversões.</h2></a>
