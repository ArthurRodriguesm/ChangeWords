<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Troca Palavras</title>
</head>
<body>    
    <header>
        <h1>Troca Palavras</h1>
    </header>
    
    <main id="conteudo">
        <div class="container">
            
        <form action="texto.php" method="post">
                
            <textarea name="texto" id="texto" class="element" placeholder="Insira aqui o texto"></textarea>
        
            <input type="text" name="palavra" id="palavra" class="element words" placeholder="Palavra a ser substituída">

            <input type="text" name="nova-palavra" id="nova-palavra" class="element words" placeholder="Palavra nova">

            <button type="submit" id="btn" class="element">Trocar</button>

        </form>
    </div>

    <aside id="lateral">
        <h2>Bem-Vindo</h2>
        <p>Ao inserir a substituição de alguma palavra, por favor insira com todas as características. Exemplo: "Informação", não digite 'informacao'</p>
    </aside>
    </main>
    
    <footer>
        <p>Copyrigth &copy; Arthur Martins</p>
    </footer>

</body>
</html>