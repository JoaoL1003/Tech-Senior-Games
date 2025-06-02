<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estile.css">
    <link id="dynamic-favicon" rel="icon" href="Imgs/LOGOBRANCA.png">

    <title>Page jogos</title>

    
    <!--FONTES-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Questrial&display=swap" rel="stylesheet">

</head>
<body>
    
<body>
    <header>

        <div class="div1-header">

            <a href="../index.php"><img src="Imgs/LOGOBRANCA.png" class="logo-main"></a>

    </div>

        <div class="div2-header">
            
        <a href="#" class="btn-abrir"  onclick="abrirMenu()"> <img src="Imgs/barra.png" class="btn-abrir-img"> </a>

         <nav id="menu">
            <a href="#"  onclick="fecharMenu()"> Fechar</a>
            <a href="../index.php"> Inicio</a>
            <a href="../page.ajuda/Index.php"> Ajuda</a>
           
         </nav>
    </div>


</header>

<div class="div-barra-pesquisa">
    <form onsubmit="return false;">
    <input type="text" id="barra-pesquisa" class="barra-pesquisa" name="pesquisa" placeholder="Digite o título do jogo" onkeyup="search()" autofocus required>
</form>
</div>

<?php
// Conectar ao banco de dados
include 'conexao.php';  // Inclua seu arquivo de conexão com o banco de dados

// Verificar a conexão
if ($conexao->connect_error) {
die("Falha na conexão: " . $conexao->connect_error);
}

// Consulta todos os jogos (sem filtro)
$sql = "SELECT titulo FROM jogos";
$result = $conexao->query($sql);

// Verifica se há resultados
$jogos = [];
if ($result && $result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
$jogos[] = $row['titulo'];  // Armazena os títulos dos jogos em um array
}
} else {
// Se não houver resultados, exibe uma mensagem de erro
$erro = "Nenhum jogo encontrado.";
}

// Fecha a conexão com o banco de dados
$conexao->close();
?>

<!-- Lista de Jogos -->
<div id="lista-jogos">
<?php
// Exibe os jogos dinamicamente
if (!empty($jogos)) {
    foreach ($jogos as $jogo) {
        echo "
        ";
    }
} else {
    echo "<p class='erro'>$erro</p>";
}
?>
</div>

<!-- Script para Filtragem Dinâmica -->
<script>
function search() {
    const input = document.getElementById('barra-pesquisa').value.toLowerCase();
    const cards = document.querySelectorAll('.card');

    cards.forEach(card => {
        const title = card.querySelector('.title-game').textContent.toLowerCase();
        card.style.display = title.includes(input) ? 'block' : 'none';
    });
}
</script>



        <br>
    <h3 class="title-catalogo" id="id-title-catalogo">Catalogo</h3>

    <br><br>    <!--<br><br>
    
    <h2 class="title-type-game"> Retrô</h2>
-->
    <section class="section-cards">

        <!--jogo 1-->
        
        <div class="card"> 

            <div class="div-card-img">
                <img src="Imgs/top.jpeg" class="img-card">
                    
                    <br>
    </div>
                
                        <h3 class="title-game">top gear</h3>

            <div class="div-card-text">
                <a href="https://www.jogos360.com.br/top_gear.html" class="link-div-card-text">Jogue agora</a>
    </div>
</div>

        <!--jogo 2-->
         
        <div class="card"> 

            <div class="div-card-img">
                <img src="Imgs/jogo2.png" class="img-card" alt="Mario">
                
                    <br>

    </div>           
                        <h3 class="title-game">Mario</h3>

            <div class="div-card-text">
                <a href="https://www.jogos360.com.br/super_mario_flash_30.html" class="link-div-card-text">Jogue agora</a>
    </div>
</div>
    
        <!--jogo 3-->

        <div class="card"> 

            <div class="div-card-img">
                <img src="Imgs/jogo3.jpg" class="img-card">
                
                    <br>
    </div>
                        <h3 class="title-game">donkey kong</h3>

            <div class="div-card-text">
                <a href="https://www.jogos360.com.br/donkey_kong_country_snes.html" class="link-div-card-text">Jogue agora</a>
    </div>
</div>

        <!--jogo 4--> 

        <div class="card"> 

            <div class="div-card-img">
                <img src="Imgs/jogo4.webp" class="img-card">

                    <br>
    </div>
                        <h3 class="title-game">Super Metroid</h3>

            <div class="div-card-text">
                <a href="https://www.nintendo.com/pt-pt/Jogos/Super-Nintendo/Super-Metroid-279613.html?srsltid=AfmBOoqYCWaJlOyycXaxXfP6zScThzRK_owwHdukHpCzVfBv144mQFDN" 
                   class="link-div-card-text">Jogue agora</a>
    </div>
</div>

</section>

        
    <section class="conteiner-vejaMais">
        

        <div class="card card-vejaMais"> 

            <div class="div-card-img">
                <img src="Imgs/jogo5.webp" class="img-card">

            <br>
    </div>
                <h3 class="title-game">Punch-out</h3>

        <div class="div-card-text">
            <a href="https://retrogames.cz/play_771-NES.php#google_vignette" class="link-div-card-text">Jogue agora</a>

    </div>
</div>

        <div class="card card-vejaMais"> 

            <div class="div-card-img">
                <img src="Imgs/jogov.jpeg" class="img-card" alt="Jogo da velha">

            <br>
    </div>
                <h3 class="title-game">Jogo da velha</h3>

        <div class="div-card-text">
            <a href="https://papergames.io/pt-br/jogo-da-velha" class="link-div-card-text">Jogue agora</a>

    </div>
</div>

        <div class="card card-vejaMais"> 

            <div class="div-card-img">
                <img src="Imgs/text.jpeg" class="img-card" alt="Text Twist">

            <br>
    </div>
                <h3 class="title-game">Text Twist</h3>

        <div class="div-card-text">
            <a href="https://www.mindgames.com/game/TextTwist+2" class="link-div-card-text">Jogue agora</a>

    </div>
</div>

        <div class="card card-vejaMais"> 

            <div class="div-card-img">
                <img src="Imgs/just.jpeg" class="img-card" alt="Just Dance">

            <br>
    </div>
                <h3 class="title-game">Just Dance</h3>

        <div class="div-card-text">
            <a href="https://justdancenow.com/" class="link-div-card-text">Jogue agora</a>

    </div>

</div>
        
            <!--teste adicionar cardes-->


        <div class="card card-vejaMais"> 

            <div class="div-card-img">
                <img src="Imgs/sudoku.jpeg" class="img-card" alt="SUDOKU">

            <br>
    </div>
                <h3 class="title-game">Sudoku</h3>

        <div class="div-card-text">
            <a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwjn9ejMvoSKAxUaYkgAHWCRArUYABAAGgJjZQ&co=1&ase=2&gclid=EAIaIQobChMI5_XozL6EigMVGmJIAB1gkQK1EAAYASAAEgLuyvD_BwE&ohost=www.google.com&cid=CAASJeRoKQca1FT0pZKm9mwSanlx8ZBapM2T7Eoju9y1OVtO727oYZ4&sig=AOD64_0wZ_TxmQzVeTPb_HYJeG7UtyTOHA&q&nis=4&adurl&ved=2ahUKEwiixuTMvoSKAxXuALkGHXraAGgQ0Qx6BAgMEAE" 
               class="link-div-card-text">Jogue agora</a>

    </div>

</div>

        <div class="card card-vejaMais"> 

            <div class="div-card-img">
                <img src="Imgs/jogo11.png" class="img-card" alt="Daily Crossword">

            <br>
    </div>
                <h3 class="title-game">Daily Crossword</h3>

        <div class="div-card-text">
            <a href="https://rachacuca.com.br/palavras/caca-palavras/" class="link-div-card-text">Jogue agora</a>

    </div>

</div>

        <div class="card card-vejaMais"> 

            <div class="div-card-img">
                <img src="Imgs/manjor.jpeg" class="img-card" alt="Mahjong Classic">

            <br>
    </div>
                <h3 class="title-game">Mahjong Classic</h3>

        <div class="div-card-text">
            <a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwj99vO9v4SKAxWrQ0gAHW-QAK4YABAAGgJjZQ&co=1&ase=2&gclid=EAIaIQobChMI_fbzvb-EigMVq0NIAB1vkACuEAAYASAAEgLmFvD_BwE&ohost=www.google.com&cid=CAASJeRoEu3BbrignK7Z2PKtQbv1I6njNu-rCi_Z7rKBZhiILbgVLIU&sig=AOD64_3BIInwYX2o3Q5Z7p-3B3JfN-xZIw&q&nis=4&adurl&ved=2ahUKEwiKte-9v4SKAxUaBLkGHcj3CRsQ0Qx6BAgMEAE"
               class="link-div-card-text">Jogue agora</a>

    </div>

</div>

        <div class="card card-vejaMais"> 

            <div class="div-card-img">
                <img src="Imgs/sokoban.jpeg" class="img-card" alt="Sokoban Online">

            <br>
    </div>
                <h3 class="title-game">Sokoban </h3>

        <div class="div-card-text">
            <a href="https://www.sokobanonline.com/play" class="link-div-card-text">Jogue agora</a>

    </div>

</div>

        <div class="card card-vejaMais"> 

            <div class="div-card-img">
                <img src="Imgs/memoria.jpeg" class="img-card" alt="Arkadium's Memory Game">

            <br>
    </div>
                <h3 class="title-game">Jogo da memória</h3>

        <div class="div-card-text">
            <a href="https://rachacuca.com.br/passatempos/jogo-da-memoria/" class="link-div-card-text">Jogue agora</a>

    </div>

</div>

        <div class="card card-vejaMais"> 

            <div class="div-card-img">
                <img src="Imgs/quebra.jpeg" class="img-card" alt="I’m a Puzzle">

            <br>
    </div>
                <h3 class="title-game">Quebra-cabeça</h3>

        <div class="div-card-text">
            <a href="https://puzzlegarage.com/?lang=pt" class="link-div-card-text">Jogue agora</a>

    </div>

</div>

        <div class="card card-vejaMais"> 

            <div class="div-card-img">
                <img src="Imgs/xadrez.jpeg" class="img-card" alt="Chess">

            <br>
    </div>
                <h3 class="title-game">Xadrez</h3>

        <div class="div-card-text">
            <a href="https://www.chess.com/pt-BR" class="link-div-card-text">Jogue agora</a>

    </div>

</div>

        <div class="card card-vejaMais"> 

            <div class="div-card-img">
                <img src="Imgs/jogo17.jpg" class="img-card" alt="Wordle">

            <br>
    </div>
                <h3 class="title-game">Wordle</h3>

        <div class="div-card-text">
            <a href="https://www.nytimes.com/games/wordle/index.html" class="link-div-card-text">Jogue agora</a>

    </div>

</div>

        <div class="card card-vejaMais"> 

            <div class="div-card-img">
                <img src="Imgs/2048.jpeg" class="img-card" alt="2048">

            <br>
    </div>
                <h3 class="title-game">2048</h3>

        <div class="div-card-text">
            <a href="https://rachacuca.com.br/raciocinio/2048/" class="link-div-card-text">Jogue agora</a>

    </div>

</div>

        <div class="card card-vejaMais"> 

            <div class="div-card-img">
                <img src="Imgs/tretis.jpeg" class="img-card" alt="Wordle" alt="tretis">

            <br>
    </div>
                <h3 class="title-game">Tetris</h3>

        <div class="div-card-text">
            <a href="https://tetris.com/play-tetris" class="link-div-card-text">Jogue agora</a>

    </div>

</div>

        <div class="card card-vejaMais"> 

            <div class="div-card-img">
                <img src="Imgs/pac-man.jpeg" class="img-card" alt="Wordle" alt="pac man">

            <br>
    </div>
                <h3 class="title-game">Pac-Man</h3>

        <div class="div-card-text">
            <a href="https://www.google.com/logos/2010/pacman10-i.html" class="link-div-card-text">Jogue agora</a>

    </div>

</div>

        <div class="card card-vejaMais"> 

            <div class="div-card-img">
                <img src="Imgs/coke.jpeg" class="img-card" alt="Wordle" alt="Cookie Clicker">

            <br>
    </div>
                <h3 class="title-game">Cookie Clicker </h3>

        <div class="div-card-text">
            <a href="https://orteil.dashnet.org/cookieclicker/" class="link-div-card-text">Jogue agora</a>

    </div>

</div>

        <div class="card card-vejaMais"> 

            <div class="div-card-img">
                <img src="Imgs/damas.jpeg" class="img-card" alt="Wordle" alt="Damas Online">

            <br>
    </div>
                <h3 class="title-game">Damas </h3>

        <div class="div-card-text">
            <a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwiR8NXcjoWKAxVKVEgAHbk5B-gYABAAGgJjZQ&co=1&ase=2&gclid=EAIaIQobChMIkfDV3I6FigMVSlRIAB25OQfoEAAYASAAEgIKV_D_BwE&ohost=www.google.com&cid=CAASJuRoQcLxCSGQzlHywwH9UZaTJttyQHmEsK8CI6g2cvU8NoklkSpX&sig=AOD64_3o4VFN_hcMr1wDteQgn5Sx__UUIw&q&nis=4&adurl&ved=2ahUKEwiBqdHcjoWKAxXFD7kGHQOvE1kQ0Qx6BAgMEAM" 
               class="link-div-card-text">Jogue agora</a>

    </div>

</div>

        <div class="card card-vejaMais"> 

            <div class="div-card-img">
                <img src="Imgs/forca.jpeg" class="img-card" alt="Wordle" alt="Forca">

            <br>
    </div>
                <h3 class="title-game">Forca </h3>

        <div class="div-card-text">
            <a href="https://rachacuca.com.br/palavras/jogo-da-forca/" class="link-div-card-text">Jogue agora</a>

    </div>

</div>

        <div class="card card-vejaMais"> 

            <div class="div-card-img">
                <img src="Imgs/bee.jpeg" class="img-card" alt="Wordle" alt="Spelling Bee">

            <br>
    </div>
                <h3 class="title-game"> Spelling Bee </h3>

        <div class="div-card-text">
            <a href="https://www.nytimes.com/puzzles/spelling-bee" class="link-div-card-text">Jogue agora</a>

    </div>

</div>

        <div class="card card-vejaMais"> 

            <div class="div-card-img">
                <img src="Imgs/picto.jpeg" class="img-card" alt="Wordle" alt="Pictoword">

            <br>
    </div>
                <h3 class="title-game"> Pictoword </h3>

        <div class="div-card-text">
            <a href="https://www.googleadservices.com/pagead/aclk?sa=L&ai=DChcSEwiR8NXcjoWKAxVKVEgAHbk5B-gYABAAGgJjZQ&co=1&ase=2&gclid=EAIaIQobChMIkfDV3I6FigMVSlRIAB25OQfoEAAYASAAEgIKV_D_BwE&ohost=www.google.com&cid=CAASJuRoQcLxCSGQzlHywwH9UZaTJttyQHmEsK8CI6g2cvU8NoklkSpX&sig=AOD64_3o4VFN_hcMr1wDteQgn5Sx__UUIw&q&nis=4&adurl&ved=2ahUKEwiBqdHcjoWKAxXFD7kGHQOvE1kQ0Qx6BAgMEAM" 
               class="link-div-card-text">Jogue agora</a>

    </div>

</div>
      
</section>

    <div class="div-link-vejaMais">

        <a href="#" class="link-vejaMais-catalogo">Veja mais</a>
    </div>

        <br><br><br>

<footer>
            <div class="div-copy-footer">
                <h4 class="text-footer-copy">&copy copyright 2024 - grupo Tech Games. Todos os direitos reservados</h4>

        </div>

</footer>
    <script src="main.js"></script>
</body>
</html>