<!DOCTYPE html>
<html>
<head>
    <title>Questionario de Satisfação</title>
    <script type="text/javascript">

        window.onload = initPage;

        function initPage(){
            document.getElementById('limpeza').style.display ="none";
            document.getElementById('refeicao').style.display ="none";
            document.getElementById('refeitorio').style.display ="none";
            document.getElementById('enviar').style.display ="none";
        }

        function next(id, id2, id3){
            document.getElementById(id).style.display = "none";
            document.getElementById(id2).style.display = "inline";
            document.getElementById(id3).style.display = "inline";
        }

        function enviar(id){
            document.getElementById(id).style.display = "inline";
        }

    </script>
<link rel="stylesheet" type="text/css" href="css/style2.css" media="screen" />
</head>
    <body>
        <div id="Cabecalho" class="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            Laticínio Belo Vale LTDA <br/>
            Rua Manoel Celestino de Paula, 101 <br/>
            Várzea da Cruz - Sousa/PB - CEP: 58806-658 <br/>
            Fones: Portaria (83) 3522-222 - Facilities (83) 9633-2410
        </div>
        <div class="modal">
        <form method="POST" action="processa.php">
            <label>Digite sua matricula</label>
            <input type="number" name="matricula" placeholder="Digite sua matricula" required="true">
            <label>Como Você avalia...</label>
        </div>
        <div class="#" id="atendimento">
            <label>O nosso atendimento? </label>
            <label>
            <input type="radio" name="atendimento" onclick="next('atendimento', 'refeitorio', '' )" value=10> <img src="images/bom.jpg">
            </label>
            <div class="campos">Muito Satisfeito</div>
            <label>
            <input type="radio" name="atendimento" onclick="next('atendimento', 'refeitorio', '')" value=5> <img src="images/regular.jpg">
            </label>
            <div class="campos">Satisfeito</div>
            <label>
            <input type="radio" name="atendimento" onclick="next('atendimento', 'refeitorio', '')" value=1> <img src="images/ruim.jpg">
            </label>
            <div class="campos">Insatisfeito</div>
        </div>
        <div class="teste" id="refeitorio">
            <label>A nova instação do Refeitório?  </label>
            <label>
            <input type="radio" name="refeitorio" onclick="next('refeitorio', 'refeicao', '')" value=10> <img src="images/bom.jpg">
            </label>
            <div class="campos">Muito Satisfeito</div>
            <label>
            <input type="radio" name="refeitorio" onclick="next('refeitorio', 'refeicao', '')" value=5> <img src="images/regular.jpg">
            </label>
            <div class="campos">Satisfeito</div>
            <label>
            <input type="radio" name="refeitorio" onclick="next('refeitorio', 'refeicao', '')" value=1> <img src="images/ruim.jpg">
            </label>
            <div class="campos">Insatisfeito</div>
        </div>
        <div class="teste" id="refeicao">
            <label>As Refeições?</label>
            <label>
            <input type="radio" name="refeicao" onclick="next('refeicao', 'limpeza', 'enviar')" value=10> <img src="images/bom.jpg">
            </label>
            <div class="campos">Muito Satisfeito</div>
            <label>
            <input type="radio" name="refeicao" onclick="next('refeicao', 'limpeza', 'enviar')" value=5> <img src="images/regular.jpg">
            </label>
            <div class="campos">Satisfeito</div>
            <label>
            <input type="radio" name="refeicao" onclick="next('refeicao', 'limpeza', 'enviar')" value=1> <img src="images/ruim.jpg">
            </label>
            <div class="campos">Insatisfeito</div>
        </div>
        <div class="teste" id="limpeza">
            <label>A limpeza?</label>
            <label>
            <input type="radio" name="limpeza" value=10> <img src="images/bom.jpg">
            </label>
            <div class="campos">Muito Satisfeito</div>
            <label>
            <input type="radio" name="limpeza" value=5> <img src="images/regular.jpg">
            </label>
            <div class="campos">Satisfeito</div>
            <label>
            <input type="radio" name="limpeza" value=1> <img src="images/ruim.jpg">
            </label>
            <div class="campos">Insatisfeito</div>
        </div>
        <div class="enviar" id="enviar">
            <input type="submit" value="Enviar!">
        </div>
        </form>
    </body>
</html>