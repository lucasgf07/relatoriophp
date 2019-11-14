<!DOCTYPE html>
<html>
<head>
    <title>Questionario de Satisfação</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="css/styl.css" media="screen" />
    
    <script type="text/javascript">

        window.onload = initPage;

        function initPage(){
            document.getElementById('limpeza').style.display ="none";
            document.getElementById('refeicao').style.display ="none";
            document.getElementById('refeitorio').style.display ="none";
            document.getElementById('enviar').style.display ="none";
            document.getElementById('geral').style.display="none";
        }

        function next(id, id2){
            document.getElementById(id).style.display = "none";
            document.getElementById(id2).style.display = "inline";
        }

        function habilitar(id, id2){
            var x =  document.getElementById('inMatricula').value;
            if(x == null || x == 0){
                alert("Insira sua matricula!");
            }else{
                document.getElementById(id).style.display = "none";
                document.getElementById(id2).style.display = "inline";
            }
        }

        function btMatricula(valor){
            document.getElementById('inMatricula').value += valor;
        }
        function erase(){
            document.getElementById('inMatricula').value  -= 'inMatricula';
        }

        function enviar(id){
            document.getElementById(id).style.display = "inline";
        }

    </script>
</head>
    <body>
    <center>
        <form method="POST" action="processa.php">

            <div class="box-container-matricula">
                <div name="teclado" class="teclado" id="teclado">
                    <h2 class="title">Digite sua matricula:</h2>
                    <input class="input" name="matricula" type="number" id="inMatricula" placeholder="Insira sua matricula..." maxlength="9999" required="true"/>
                    <table>
                        <tr>
                            <td>
                                <input onclick="btMatricula(7)" class="btTeclado" type="button" name="bt7" value="7">
                            </td>
                            <td>    
                                <input onclick="btMatricula(8)" class="btTeclado" type="button" name="bt8" value="8">
                            </td>
                            <td>
                                <input onclick="btMatricula(9)" class="btTeclado" type="button" name="bt9" value="9"> 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input onclick="btMatricula(4)" class="btTeclado" type="button" name="bt4" value="4">
                            </td>
                            <td>
                                <input onclick="btMatricula(5)" class="btTeclado" type="button" name="bt5" value="5">
                            </td>
                            <td>
                                <input onclick="btMatricula(6)" class="btTeclado" type="button" name="bt6" value="6">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input onclick="btMatricula(1)" class="btTeclado" type="button" name="bt1" value="1">
                            </td>
                            <td>
                                <input onclick="btMatricula(2)" class="btTeclado" type="button" name="bt2" value="2">
                            </td>
                            <td>
                                <input onclick="btMatricula(3)" class="btTeclado" type="button" name="bt3" value="3">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="button" name="apagar" onclick="erase()" value="Limpar" class="btTeclado"><br>
                            </td>
                            <td><input onclick="btMatricula(0)" class="btTeclado" type="button" name="bt0" value="0"></td>
                            <td>
                                <input type="button" name="matricula" class="btTeclado" value="Próximo" onclick="habilitar('teclado', 'geral')">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="geral" id="geral">
                <label>Como você avalia...</label><br>
                <div id="atendimento">
                    <label class="title">O nosso atendimento? </label><br>
                    <div class="box-container-responses">
                        <label>
                            <input type="radio" name="atendimento" onclick="next('atendimento', 'refeitorio')" value=10> <img src="images/bom.jpg">
                        </label>
                        <div class="campos">Muito Satisfeito</div><br>
                        <label>
                            <input type="radio" name="atendimento" onclick="next('atendimento', 'refeitorio')" value=5> <img src="images/regular.jpg">
                        </label>
                        <div class="campos">Satisfeito</div><br>
                        <label>
                            <input type="radio" name="atendimento" onclick="next('atendimento', 'refeitorio')" value=1> <img src="images/ruim.jpg">
                        </label>
                        <div class="campos">Insatisfeito</div>
                    </div>
                </div>
                <div class="teste" id="refeitorio">
                    <label class="title">A nova instalação do refeitório?</label><br>
                    <div class="box-container-responses">
                        <label>
                        <input type="radio" name="refeitorio" onclick="next('refeitorio', 'refeicao')" value=10> <img src="images/bom.jpg">
                        </label>
                        <div class="campos">Muito Satisfeito</div><br>
                        <label>
                        <input type="radio" name="refeitorio" onclick="next('refeitorio', 'refeicao')" value=5> <img src="images/regular.jpg">
                        </label>
                        <div class="campos">Satisfeito</div><br>
                        <label>
                        <input type="radio" name="refeitorio" onclick="next('refeitorio', 'refeicao')" value=1> <img src="images/ruim.jpg">
                        </label>
                        <div class="campos">Insatisfeito</div>
                    </div>
                </div>
                <div class="teste" id="refeicao">
                    <label class="title">As refeições?</label><br>
                    <div class="box-container-responses">
                        <label>
                        <input type="radio" name="refeicao" onclick="next('refeicao', 'limpeza')" value=10> <img src="images/bom.jpg">
                        </label>
                        <div class="campos">Muito Satisfeito</div><br>
                        <label>
                        <input type="radio" name="refeicao" onclick="next('refeicao', 'limpeza')" value=5> <img src="images/regular.jpg">
                        </label>
                        <div class="campos">Satisfeito</div><br>
                        <label>
                        <input type="radio" name="refeicao" onclick="next('refeicao', 'limpeza')" value=1> <img src="images/ruim.jpg">
                        </label>
                        <div class="campos">Insatisfeito</div>
                    </div>
                </div>
                <div class="teste" id="limpeza">
                    <label class="title">A limpeza do refeitório?</label><br>
                    <div class="box-container-responses">
                        <label>
                        <input type="radio" name="limpeza"onclick="next('refeicao', 'enviar', '')"  value=10> <img src="images/bom.jpg">
                        </label>
                        <div class="campos">Muito Satisfeito</div><br>
                        <label>
                        <input type="radio" name="limpeza" onclick="next('refeicao', 'enviar', '')" value=5> <img src="images/regular.jpg">
                        </label>
                        <div class="campos">Satisfeito</div><br>
                        <label>
                        <input type="radio" name="limpeza" onclick="next('refeicao', 'enviar', '')" value=1> <img src="images/ruim.jpg">
                        </label>
                        <div class="campos">Insatisfeito</div>
                    </div>
                </div>

                <div class="enviar" id="enviar">
                    <!-- <input class="enviar" type="submit" value="Enviar!"> -->
                    <input class="button is-success is-large" type="submit" value="Enviar!">
                </div>
            </div>
        </form>
        <footer class="footer">
            Laticínio Belo Vale LTDA <br>
            Rua Manoel Celestino de Paula, 101 <br>
            Várzea da Cruz - Sousa/PB - CEP: 58806-658 <br>
            Fones: Portaria (83) 3522-222 - Facilities (83) 9633-2410
        </footer>
    </center>
    </body>
</html>