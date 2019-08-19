<?php

include_once("conexao.php");
$matricula = $_POST["matricula"];
$opt1 = $_POST["atendimento"];
$opt2 = $_POST["refeitorio"];
$opt3 = $_POST["refeicao"];
$opt4 = $_POST["limpeza"];


//echo $matricula, $opt1, $opt2, $opt3, $opt4;

$sql = "Select matricula from avalia where matricula = '$matricula'";
$result = $conn->query($sql);

if(!isset($matricula) or !isset($opt1) or 
    !isset($opt2) or !isset($opt3) or !isset($opt4)){
    echo "<script type=\"text/javascript\">alert('Algum campo em branco!');</script>";
}else if($result->num_rows > 0){
    echo  "<script>alert('Essa pessoa já avaliou!');</script>";
    echo "<script>window.location.href = \"index.php\"</script>";
}else{
    $result_insert = "INSERT INTO avalia VALUES ('$matricula',$opt1,$opt2,$opt3,$opt4)";
    if($conn->query($result_insert) === TRUE){
    	echo "<script>alert('Obrigado pelo seu tempo!');</script>";
        echo "<script>window.location.href = \"index.php\"</script>";
    }else{
    	echo "Não inseriu!";
    }
}
?>