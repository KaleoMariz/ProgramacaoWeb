<html>
<head>
    <title> convertendo o ouro </title>

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
  <img src="barra_de_ouro.webp" width="500px">
</header>

<section id="formulario" style="text-align: center">
<form action="conversao_ouro_saida.php" method="get">
<h2> Conversão do ouro para outras moedas do mundo.</h2>

<label> Quanto de ouro você deseja converter em alguma moeda? Digite o peso do ouro em gramas.</label>
<input type="text" name="ouro" placeholder="Digite a quantia em gramas"required> <br>

<label> Escolha a moeda para converter o ouro: </label>
<select name="conversao_ouro">
    <option value="1"> Dólar americano (U$)</option>
    <option value="2"> Libra inglesa (£)</option>
    <option value="3"> Euro (€) </option>
    <option value="4"> Yuan chinês (¥)</option>
    <option value="5"> Yene japonês (¥)</option>
    <option value="6"> Real Brasileiro (R$) </option>  </option>
</select>
<br>

<input type="submit" value ="Clique aqui para fazer o cálculo de conversão">

</form>
</section>





</body>
</html>