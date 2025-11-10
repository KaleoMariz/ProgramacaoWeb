<html>
    <head>
        <title> Conversão de Moeda</title>
        <meta charset="UTF-8">
        <style>
    header {
        text-align: center;
        width: 100%; 
    }

    img {
        margin: 20px 0;
    }
   </style>    

    </head>
<body>
<header>
   
<img src="conversao_do_real.jpg" width="500px">

</header>   

<section id="formulario" style="text-align: center">

    <h2> Conversão do real (R$) para outras moedas</h2>

<form action="conversao_saida_real.php" method="get">
<label> Quanto de real você deseja converter em outra moeda?.</label>
<input type="text" name="real" placeholder="Digite a quantia em real"required> <br>

<label>Escolha a moeda para converter o real:</label>
<select name="conversao_real">
    <option value="1"> Dólar americano(U$)</option>
    <option value="2"> Libra inglesa (£)</option>
    <option value="3"> Euro (€) </option>
    <option value="4"> Yuan chinês (¥)</option>
    <option value="5"> Yene japonês (¥)</option>
    <option value="6"> Ouro </option>
</select>
<br>

<input type="submit" value ="Clique aqui para fazer o cálculo de conversão">
</form>
</body>
</html>
