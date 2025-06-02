<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estile.css">
    <link rel="icon" href="Imgs/LOGOPRETA.png">
    <script src="main4.js"></script>
    <title>Ajuda tech games</title>

    
    <!--FONTES-->

            <!--QUESTRIAL-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">

            <!--BREE SERIF-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Questrial&display=swap" rel="stylesheet">

            <!--Anton-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Bree+Serif&family=Questrial&display=swap" rel="stylesheet">


    <!--OBSERVAÇÕES-->
<!--
    FAZER LINKAGEM DAS PÁGINAS    
-->
</head>

<body>

    <header>

        <a href="../Index.php" class="logo-site">Tech Sênior Games</a>

        <a href="#" class="btn-abrir"  onclick="abrirMenu()"> <img src="Imgs/barra.png" class="btn-abrir-img"> </a>

         <nav id="menu">
            <a href="#"  onclick="fecharMenu()"> Fechar</a>
            <a href="../index.php"> inicio</a>
            <a href="../Page jogos/Index.php"> jogos</a>
            <a href="../page blog/index.html"> atividades</a>
           
         </nav>
</header>


        <br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br>

                <!--Section slogan-->

    <section class="section-slogan  fade-in">

        <h3 class="title-main-section-slogan">Criatividade, inovação e profissionalismo resume 
            <a href="/Index.html">Tech Games</a></h3>

</section>

            <br><br><br><br><br><br><br><br><br><br><br>

        <!--SECTION SOBRE NÓS-->
        <center>
    <section class="section-about fade-in"> 

        <div class="div-main-section-about">
            <img src="Imgs/LOGOBRANCA.png" class="img-logo-section-about">
                <h2 class="title-main-section-about">Tech Sênior Games</h2>

    </div>

            <br><br>

        <div class="div-text-section-about">
            <p class="text-about">Somos uma empresa sem fins lucrativos, com a finalidade de ajudar no contínuo 
                desenvolvimento dos nossos idosos. Atráves do nosso site buscamos oferecer um ambiente virtual 
                favorável a todos as pessoas que procuram por novas amizades, e por ativiades para completar o 
                seu dia. Atidades de raciocínio lógicos e jogos retrô, são apenas alguns temas de ativiades e 
                jogos que você encontra aqui
            </p>
        </div>
</section>
        </center>
            <br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br>

        
            <!--Section missão, visão e valores-->
        <section class="section-mvv fade-in">

                <!--carde 1 missão-->
        
            
            <div class="card card-01">
                <div class="div-title-card">
                    <h3 class="title-card title-card-01">missão</h3>
            </div>

                    <br><br><br>

                <div class="div-text-card">
                    <p class="text-div-card">
                        Proporcionar momentos de diversão, conexão e bem-estar para idosos por 
                        meio de jogos e atividades inovadoras, estimulando o desenvolvimento 
                        cognitivo, físico e social em um ambiente acolhedor e inclusivo.
                    </p>
            </div>
        </div>

                <!--carde 2 visão-->
        
            <div class="card card-02">
                <div class="div-title-card">
                    <h3 class="title-card title-card-02">visão</h3>
            </div>

                    <br><br><br>

                <div class="div-text-card">
                    <p class="text-div-card"> 
                        Ser referência no mercado de entretenimento para idosos, promovendo qualidade de 
                        vida e fortalecendo os laços familiares e comunitários, com soluções criativas e 
                        acessíveis que inspirem gerações.
                    </p>
            </div>
        </div>

                <!--carde 3 valores-->
        
            
            <div class="card card-03">
                <div class="div-title-card">
                    <h3 class="title-card">valores</h3>
            </div>

                    <br><br><br>

                <div class="div-text-card">
                    <p class="text-div-card">
                        <span>Inclusão:</span> Respeitar e valorizar as diferenças, criando experiências que acolham a diversidade de idosos.
                            <br><br>
                        <span>Inovação:</span> Desenvolver produtos e atividades que tragam novas perspectivas de diversão e aprendizado.
                            <br><br>                       
                        <span>Respeito:</span> Priorizar a dignidade e as necessidades individuais dos idosos.
                            <br><br>
                        <span>Conexão:</span> Estimular o fortalecimento de laços interpessoais e comunitários. 
                            <br><br>
                        <span>Bem-estar:</span> Focar na qualidade de vida, promovendo saúde, alegria e conforto.
                    </p>
            </div>
        </div>
    </section>
            

            <!--forms-->

                    <div class="div-top-section-forms">
                        <h2 class="title-forms">entre em contato abaixo</h2>
                                <br>
                            <h3 class="sub-title-forms">dúvidas, sugestões ou reclamações entre em contato abaixo</h3>
                </div>

                <br><br><br><br><br><br>
                <br><br><br><br><br><br>
                
<div class="div-main-sections-contato">

<?php
if (isset($_POST['nome']) && isset($_POST['telefone']) && isset($_POST['email']) && isset($_POST['mensagem'])) {
    // Recebe os dados do formulário
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    // Conexão com o banco de dados
    $conexao = mysqli_connect("localhost", "root", "", "biblioteca_jogos");

    // Verificar conexão
    if (!$conexao) {
        die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
    }

    // Inserir dados na tabela 'contatos'
    $sql = "INSERT INTO contatos (Nome, Telefone, Email, Mensagem) 
            VALUES ('$nome', '$telefone', '$email', '$mensagem')";

    // Verificar se a inserção foi bem-sucedida
    if (mysqli_query($conexao, $sql)) {
        echo "<script>
                alert('Cadastro realizado com sucesso!');
                window.location.href = 'Index.php';
              </script>";
    } else {
        echo "Erro ao cadastrar: " . mysqli_error($conexao);
    }

    // Fechar conexão
    mysqli_close($conexao);
} else {
    echo ".";
}
?>



<section class="fade-in section-forms">
                <form method="POST" action="Index.php">
        <div class="formulario">
            <nav>
                <h3 class="title-main-forms">Nome</h3>
                <input type="text" name="nome" placeholder="Digite seu nome aqui" class="mesage" required>

                <h3 class="title-main-forms">Telefone/WhatsApp</h3>
                <input type="number" name="telefone" placeholder="+55 99 00000000" minlength="10" maxlength="13" class="mesage" required>

                <h3 class="title-main-forms">Email</h3>
                <input type="email" name="email" placeholder="Digite seu email aqui" class="mesage" required>

                <h3 class="title-main-forms">Mensagem</h3>
                <input type="text" name="mensagem" placeholder="Digite sua mensagem aqui" class="box-mesage mesage" required maxlength="120">
                        <br><br>
                <input type="submit" title="enviar" class="button-submit">
            </nav>
        </div>
    </form>

            <div class="div-contato">
                <div class="div1-contato">

                    <h3 class="title-forma-contato" id="endereco-contato"> telefone/whatsapp</h3>
                        <br>
                            <h3 class="endereco-contato">(85) 3101-2163</h3>
            </div>

                    <br><br>

                <div class="div2-contato">

                    <h3 class="title-forma-contato" id="enderco-contanto"> endereço</h3>
                        <br>
                            <h3 class="endereco-contato"> Rua Angélica Gurgel, 362 - Messejana, Fortaleza - CE, 63475-132</h3>
            </div>
        </div>
</section>
</div>

    <footer>

            <div class="div-copy-footer">
                <h4 class="text-footer-copy">&copy copyright 2024 - grupo Tech Games. Todos os direitos reservados</h4>

        </div>
</footer>
</body>
</html>