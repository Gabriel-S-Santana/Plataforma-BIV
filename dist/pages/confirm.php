<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../index.css">
    <link rel="stylesheet" href="../styles/confirm.css">
    <link rel="stylesheet" href="../styles/nav-bar.css">
    <title>Confirmação</title>
    <link rel="icon" href="../assets/logo-via.png" type="image/x-icon">
</head>
<body>

    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script> 
    
    <header>
        <div class="menu-button" id="menu-button">
            <div class="linha"></div>
            <div class="linha"></div>
            <div class="linha"></div>
        </div>
        <div class="seta-esquerda" id="seta-esquerda">
            <img src="../assets/divisa-esquerda.png">
        </div>
        <ul class="list-menu">
            <li class="item navigate-home">Início</li>
            <li class="item" id="navigate-acoes">Ações</li>
            <li class="item" id="navigate-historico">Histórico</li>
            <li class="item" >Créditos</li>
        </ul>
        <div class="navigate-home container-logo">
            <h1>Via de Acesso</h1>
            <img src="../assets/logo-via.png">
        </div>
    </header>
    <main>
        <section class="wrapper">
            <div class="container-confirm">
                <h1 id="titulo">
                
                </h1>
                <div class="text-container">
                    <p id="acao"></p>
                    <p id="nome"></p>
                    <p id="valor"></p>
                    <label for="input">Quantas ações você quer?</label>
                    <input type="number">
                    <p id="total"></p>
                </div>
                <!-- sE SOBRAR TEMPO, USAR VALIDAÇÃO -->
                <button class="" id="confirm"></button>
            </div>
        </section>
    </main>
    <script src="../scripts/navBar.js"></script>
    <script src="../scripts/load.js"></script>
    <script src="../scripts/navbarPages.js"></script>
</body>
</html>