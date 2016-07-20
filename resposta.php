<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">
<head>
	<title>Perguntas e respostas</title>
	<link rel="stylesheet" type="text/css" href="css/indexcss.css">
</head>
<body>
  <header>
   <h1>Quiz Perguntas e Respostas</h1>
  </header>
<section>
<h2>Quiz de Conhecimentos Gerais.</h2>
<?php 
$pergunta1 = isset($_GET['resposta3']);
$pergunta2 = isset($_GET["resposta5"]);
$pergunta3 = isset($_GET["resposta8"]);
$pergunta4 = isset($_GET["resposta11"]);
$pergunta5 = isset($_GET["resposta13"]);
$pontuacao = 0;

if ($pergunta1 == 'resposta3') {
	$mensagemr1 = "Resposta correta";
    $pontuacao = $pontuacao+20 ;
}
else {
	$mensagemr1 = "Resposta Errada";
}

echo "1-$mensagemr1<br>";

if ($pergunta2 == 'resposta5') {
	$mensagemr2 = "Resposta correta";
    $pontuacao = $pontuacao+20 ;
}
else {
	$mensagemr2 = "Resposta Errada";
}

echo "2-$mensagemr2<br>";

if ($pergunta3 == 'resposta8') {
	$mensagemr3 = "Resposta correta";
    $pontuacao = $pontuacao+20 ;
}
else {
	$mensagemr3 = "Resposta Errada";
}

echo "3-$mensagemr3<br>";

if ($pergunta4 == 'resposta11') {
	$mensagemr4 = "Resposta correta";
    $pontuacao = $pontuacao+20 ;
}
else {
	$mensagemr4 = "Resposta Errada";
}

echo "4-$mensagemr4<br>";

if ($pergunta5 == 'resposta13') {
	$mensagemr5 = "Resposta correta";
    $pontuacao = $pontuacao+20 ;
}
else {
	$mensagemr5 = "Resposta Errada";
}

echo "5-$mensagemr5<br>";
echo "<h2>Pontuação : $pontuacao</h2>"	
?>
</section>

<!--COMENTARIO-RESPOSTAS
1 - Coeficiente
2 - 7
3 - Tipógrafo
4 - Tundra
5 - 6
-->
</body>
</html>