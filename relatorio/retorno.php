<?php
include_once("conexao.php");

$sqlAtendimento = "Select atendimento from avalia where atendimento = 10";
$resultAtendimento = $conn->query($sqlAtendimento);
$num_rowsAtendimento = mysqli_num_rows($resultAtendimento);

echo "Quantidade de pessoas que falaram que o ATENDIMENTO é muito satisfatório: " . $num_rowsAtendimento . "<br>";

//////////////////////////////////////////

$sqlRefeitorio = "Select refeitorio from avalia where refeitorio = 10";
$resultRefeitorio = $conn->query($sqlRefeitorio);
$num_rowsRefeitorio = mysqli_num_rows($resultRefeitorio);

echo "Quantidade de pessoas que falaram que o REFEITÓRIO é muito satisfatório: " . $num_rowsRefeitorio . "<br>";

////////////////////////////////////////


$sqlRefeicao = "Select refeicao from avalia where refeicao = 10";
$resultRefeicao = $conn->query($sqlRefeicao);
$num_rowsRefeicao = mysqli_num_rows($resultRefeicao);

echo "Quantidade de pessoas que falaram que a REFEIÇÃO é muito satisfatória: " . $num_rowsRefeicao . "<br>";


/////////////////////////////////////

$sqlLimpeza = "Select limpeza from avalia where limpeza = 10";
$resultLimpeza = $conn->query($sqlLimpeza);
$num_rowsLimpeza = mysqli_num_rows($resultLimpeza);

echo "Quantidade de pessoas que falaram que LIMPEZA é muito satisfatória : " . $num_rowsLimpeza . "<br><br>";

////////////////////////////////////////////
////////////////////////////////////////////
////////////////////////////////////////////
////////////////////////////////////////////

include_once("conexao.php");

$sqlAtendimento = "Select atendimento from avalia where atendimento = 5";
$resultAtendimento = $conn->query($sqlAtendimento);
$num_rowsAtendimento = mysqli_num_rows($resultAtendimento);

echo "Quantidade de pessoas que falaram que o ATENDIMENTO é apenas satisfatório: " . $num_rowsAtendimento . "<br>";

//////////////////////////////////////////

$sqlRefeitorio = "Select refeitorio from avalia where refeitorio = 5";
$resultRefeitorio = $conn->query($sqlRefeitorio);
$num_rowsRefeitorio = mysqli_num_rows($resultRefeitorio);

echo "Quantidade de pessoas que falaram que o REFEITÓRIO é apenas satisfatório: " . $num_rowsRefeitorio . "<br>";

////////////////////////////////////////


$sqlRefeicao = "Select refeicao from avalia where refeicao = 5";
$resultRefeicao = $conn->query($sqlRefeicao);
$num_rowsRefeicao = mysqli_num_rows($resultRefeicao);

echo "Quantidade de pessoas que falaram que a REFEIÇÃO é apenas satisfatória: " . $num_rowsRefeicao . "<br>";


/////////////////////////////////////

$sqlLimpeza = "Select limpeza from avalia where limpeza = 5";
$resultLimpeza = $conn->query($sqlLimpeza);
$num_rowsLimpeza = mysqli_num_rows($resultLimpeza);

echo "Quantidade de pessoas que falaram que LIMPEZA é apenas satisfatória : " . $num_rowsLimpeza . "<br><br>";


////////////////////////////////////////////
////////////////////////////////////////////
////////////////////////////////////////////
////////////////////////////////////////////

include_once("conexao.php");

$sqlAtendimento = "Select atendimento from avalia where atendimento = 1";
$resultAtendimento = $conn->query($sqlAtendimento);
$num_rowsAtendimento = mysqli_num_rows($resultAtendimento);

echo "Quantidade de pessoas que falaram que o ATENDIMENTO não é satisfatório: " . $num_rowsAtendimento . "<br>";

//////////////////////////////////////////

$sqlRefeitorio = "Select refeitorio from avalia where refeitorio = 1";
$resultRefeitorio = $conn->query($sqlRefeitorio);
$num_rowsRefeitorio = mysqli_num_rows($resultRefeitorio);

echo "Quantidade de pessoas que falaram que o REFEITÓRIO não satisfatório: " . $num_rowsRefeitorio . "<br>";

////////////////////////////////////////


$sqlRefeicao = "Select refeicao from avalia where refeicao = 1";
$resultRefeicao = $conn->query($sqlRefeicao);
$num_rowsRefeicao = mysqli_num_rows($resultRefeicao);

echo "Quantidade de pessoas que falaram que a REFEIÇÃO não satisfatória: " . $num_rowsRefeicao . "<br>";


/////////////////////////////////////

$sqlLimpeza = "Select limpeza from avalia where limpeza = 1";
$resultLimpeza = $conn->query($sqlLimpeza);
$num_rowsLimpeza = mysqli_num_rows($resultLimpeza);

echo "Quantidade de pessoas que falaram que LIMPEZA não satisfatória : " . $num_rowsLimpeza . "<br><br>";


/////////////////////////////////////////////////////

$sqlQuantidade = "Select matricula from avalia";
$resultQuantidade = $conn->query($sqlQuantidade);
$num_rowsQuantidade = mysqli_num_rows($resultQuantidade);

echo "Quantidade de pessoas que avaliaram: " . $num_rowsQuantidade . "<br>";

?>