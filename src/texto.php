<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change</title>
</head>
<body>
    <?php
        $texto = isset($_POST["texto"]) ? $_POST["texto"] : ["ERRO"];
        $palavra = isset($_POST["palavra"]) ? $_POST["palavra"] : ["ERRO"];
        $novaPalavra = isset($_POST["nova-palavra"]) ? $_POST   ["nova-palavra"] : ["ERRO"];

        if(empty($texto || $palavra || $novaPalavra)){
            ?>
                <script src="js/script.js"></script>
            <?php            
        }else{
                change($texto, $palavra, $novaPalavra);

                function change($t, $p, $np){
                    $troca = str_replace("$p", "$np", $t);   
                    success($troca);      
                }

                function success($result){
                ?>
                    <div id="resultado">
                        <textarea name="result" id="result" style="width: 80%; height: 20vh;">
                        <?php
                            echo "$result";
                        ?>
                        </textarea>
                    </div>
                <?php
                } 
            }   
            ?>
</body>
</html>