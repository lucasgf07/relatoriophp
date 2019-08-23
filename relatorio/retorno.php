<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style3.css" media="screen" />
</head>
<body>
<?php include "conexao.php"?>
<table>
    <tr>
        <td class="outros"> 
           Total: <?php $sql = "Select * from avalia "; $result = $conn->query($sql); $num_rows = mysqli_num_rows($result);  
        echo $num_rows;
        ?> pessoas avaliaram!</td>
        <td class="mSatisfatorio">Muito Satisfeito</td>
        <td class="Satisfatorio">Satisfeito</td>
        <td class="Insatisfeito">Insatisfeito</td>
    </tr>
    <tr>
        <td class="outros">Atendimento:</td>
        <td class="mSatisfatorio">
        <?php $sql = "Select atendimento from avalia where atendimento = 10"; $result = $conn->query($sql); $num_rows = mysqli_num_rows($result);  
        echo $num_rows;
        ?>
        </td>
        <td class="Satisfatorio">
        <?php $sql = "Select atendimento from avalia where atendimento = 5"; $result = $conn->query($sql); $num_rows = mysqli_num_rows($result);  
        echo $num_rows;
        ?>
        </td>
        <td class="Insatisfeito">
        <?php $sql = "Select atendimento from avalia where atendimento = 1"; $result = $conn->query($sql); $num_rows = mysqli_num_rows($result);  
        echo $num_rows;
        ?>
        </td>
    </tr>
    <tr>
        <td class="outros">Refeitorio:</td>
        <td class="mSatisfatorio">
        <?php $sql = "Select refeitorio from avalia where refeitorio = 10"; $result = $conn->query($sql); $num_rows = mysqli_num_rows($result);  
        echo $num_rows;
        ?>
        </td>
        <td class="Satisfatorio">
        <?php $sql = "Select refeitorio from avalia where refeitorio = 5"; $result = $conn->query($sql); $num_rows = mysqli_num_rows($result);  
        echo $num_rows;
        ?>
        </td>
        <td class="Insatisfeito">
        <?php $sql = "Select refeitorio from avalia where refeitorio = 1"; $result = $conn->query($sql); $num_rows = mysqli_num_rows($result);  
        echo $num_rows;
        ?>
        </td>
    </tr>
    <tr>
        <td class="outros">Refeição:</td>
        <td class="mSatisfatorio">
        <?php $sql = "Select refeicao from avalia where refeicao = 10"; $result = $conn->query($sql); $num_rows = mysqli_num_rows($result);  
        echo $num_rows;
        ?>
        </td>
        <td class="Satisfatorio">
        <?php $sql = "Select refeicao from avalia where refeicao = 5"; $result = $conn->query($sql); $num_rows = mysqli_num_rows($result);  
        echo $num_rows;
        ?>
        </td>
        <td class="Insatisfeito">
        <?php $sql = "Select refeicao from avalia where refeicao = 1"; $result = $conn->query($sql); $num_rows = mysqli_num_rows($result);  
        echo $num_rows;
        ?>
        </td>
        <tr>
        <td class="outros">Limpeza:</td>
        <td class="mSatisfatorio">
        <?php $sql = "Select limpeza from avalia where limpeza = 10"; $result = $conn->query($sql); $num_rows = mysqli_num_rows($result);  
        echo $num_rows;
        ?>
        </td>
        <td class="Satisfatorio">
        <?php $sql = "Select limpeza from avalia where limpeza = 5"; $result = $conn->query($sql); $num_rows = mysqli_num_rows($result);  
        echo $num_rows;
        ?>
        </td>
        <td class="Insatisfeito">
        <?php $sql = "Select limpeza from avalia where limpeza = 1"; $result = $conn->query($sql); $num_rows = mysqli_num_rows($result);  
        echo $num_rows;
        ?>
        </td>
    </tr><hr>
    <div>

    </div>
    </body>
</html>