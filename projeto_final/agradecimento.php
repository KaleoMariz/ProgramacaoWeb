<html>
<head>
    <title> Obrigado!</title>

</head>
<body>
<section style="text-align: center">
<h1>Agradecemos a sua sugestão!</h1>

<?php

$servidor = "localhost";
$usuario = "root";       
$senha = "";             
$banco = "sugestoes";        
$tabela = "sugestoes_dos_usuarios"; 


$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);


if (mysqli_connect_errno()) {

    die("❌ ERRO de Conexão: " . mysqli_connect_error());
}


if (isset($_POST['sugestao']) && !empty($_POST['sugestao'])) {
    

    $sugestao_do_usuario = $_POST['sugestao'];
    

    $sugestao_segura = mysqli_real_escape_string($conexao, $sugestao_do_usuario);
    
  
    $sql = "INSERT INTO $tabela (sugestao_texto) VALUES ('$sugestao_segura')";

  
    if (mysqli_query($conexao, $sql)) {
        echo "<h1>🥳 SUCESSO!</h1>";
        echo "<p>Sua sugestão foi enviada com sucesso para o banco de dados.</p>";
        echo "<p>Obrigado por nos ajudar!</p>";
    } else {
        echo "<h1>🔴 ERRO ao Inserir!</h1>";
        echo "<p>Não foi possível salvar a sugestão. Detalhe: " . mysqli_error($conexao) . "</p>";
    }

} else {
    
    echo "<h1>Atenção:</h1>";
    echo "<p>Nenhuma sugestão válida foi recebida. Por favor, preencha o formulário.</p>";
}

mysqli_close($conexao);
?>


<a href="conversao_opcoes.php">Voltar para o menu de opções</a>
</section>


<body>
</html>
