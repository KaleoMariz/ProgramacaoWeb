<html>
<head>
    <title> Convertendo o dólar</title>

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
    <img src="conversao_do_dolar.jpg" width="500">


<section id="formulario" style="text-align: center">

<form action="conversao_dolar_saida.php" method="get">

<h2> Conversão do dólar (U$) para outras moedas</h2>

<label> Quanto de dólar você deseja converter em outra moeda?.</label>
<input type="text" name="dolar" placeholder="Digite a quantia em dolar"required> <br>

<label> Escolha a moeda para converter o dólar: </label>
<select name="conversao_dolar">
    <option value="1"> Real brasileiro (R$)</option>
    <option value="2"> Libra inglesa (£)</option>
    <option value="3"> Euro (€) </option>
    <option value="4"> Yuan chinês (¥)</option>
    <option value="5"> Yene japonês (¥)</option>
    <option value="6"> Ouro </option>
</select>
<br>

<input type="submit" value ="Clique aqui para fazer o cálculo de conversão">

</form>
</section>







</body>
</html>