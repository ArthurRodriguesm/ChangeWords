<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/result.css">
    <title>Troca Palavra</title>
</head>
<body>
    <?php
        $texto = isset($_POST["texto"]) ? $_POST["texto"] : ["ERRO"];
        $palavra = isset($_POST["palavra"]) ? $_POST["palavra"] : ["ERRO"];
        $novaPalavra = isset($_POST["nova-palavra"]) ? $_POST["nova-palavra"] : ["ERRO"];
    
        if(empty($texto || $palavra || $novaPalavra)){
            ?>
            <script src="js/script.js"></script>
            <?php
        }

        change($texto,$palavra,$novaPalavra);

        function change($t, $p, $np){
            $troca = str_replace("$p", "$np", $t);   
            success($troca);      
        }

        function success($result){
        ?>
            <div id="resultado">
            <textarea name="result" id="result">
            <?php
                $texto = "$result";
                echo "$texto ";
            ?>
            </textarea>
            </div>
<?php
        }
?>
    <div id="botoes">
        <button class="btn" onClick="copiarTexto()">Copiar Texto</button>

        <button class="btn" onclick="back()">Voltar</button>
    </div>

    <script>
        function copiarTexto() {
            var textoCopiado = document.getElementById("result");
            textoCopiado.select();
            document.execCommand("Copy");
            alert("Texto Copiado: " + textoCopiado.value);
        }

        function back(){
            window.history.back(-1);
        }
    </script>

</body>
</html>