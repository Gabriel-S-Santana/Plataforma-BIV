<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../index.css">
    <link rel="stylesheet" href="../styles/acoes.css">
    <link rel="stylesheet" href="../styles/nav-bar.css">
    <title>Ações</title>
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
        <ul class="list-menu">
            <li class="item navigate-home">Início</li>
            <li class="item" id="navigate-acoes">Ações</li>
            <li class="item" id="navigate-historico">Histórico</li>
            <li class="item">Créditos</li>
        </ul>
        <div class="navigate-home container-logo">
            <h1>Via de Acesso</h1>
            <img src="../assets/logo-via.png">
        </div>
    </header>
    <section class="valor-container">
        <div class="text-container">
            <div class="title">MERCADO ABERTO</div>
            <div class="sub-title">SEJA BEM-VINDO</div>
        </div>
        <div class="card-container">
            <div class="card-valor" id="disponivel">
                <h3 class="text">Valor Disponível</h3>
                <h1 class="valor">R$ 49.500,00</h1>
            </div>
            <div class="card-valor" id="investido">
                <h3 class="text">Valor em Ações</h3>
                <h1 class="valor">R$ 00,00</h1>
            </div>
        </div>
    </section>
    <main>
        <div class="warn warn-green">
            <p>O mercado está aberto!</p>
            <p>Você possui R$49.846, esse valor é zerado ao fim do pregão</p>
        </div>
        <div class="warn warn-blue">
            <p>Compre suas ações com consciência!</p>
            <p>É possivel vender suas ações depois, mas talvez não pelo mesmo que comprou.</p>
        </div>
        <div class="switch-container">
            <input type="checkbox" id="switch" class="switch-input">
            <label for="switch" class="switch-label">
                <span id="switch-text">COMPRAR</span>
            </label>
        </div>
        <section class="section-comprar section-organizer wrapper">
            <div class="container-acoes">
                <h1>Compra de ações</h1>
                <div class="cards-container">
                    <div class="card-responsive">
                        <div class="card-upper-section">
                            <p>NDEP</p>
                            <button class="button-primary" id="comprar" data-valor="38,32" data-codigo="NDEP"
                                data-nome="Nome da empresa">
                                COMPRAR
                            </button>
                        </div>
                        <div class="card-img-container container-1">
                            <!-- <img src="../assets/apple-seeklogo.svg" alt="Logo da empresa"> -->
                        </div>
                        <div class="card-down-section">
                            <h6>R$ 38,32</h6>
                            <p>Nome da empresa</p>
                        </div>
                    </div>
                    <div class="card-responsive">
                        <div class="card-upper-section">
                            <p>NDEP</p>
                            <button class="button-primary" id="comprar" data-valor="38,32" data-codigo="NDEP"
                                data-nome="Nome da empresa">
                                COMPRAR
                            </button>
                        </div>
                        <div class="card-img-container container-2">
                            <!-- <img src="../assets/coca-cola-seeklogo.svg" alt="Logo da empresa"> -->
                        </div>
                        <div class="card-down-section">
                            <h6>R$ 38,32</h6>
                            <p>Nome da empresa</p>
                        </div>
                    </div>
                    <div class="card-responsive">
                        <div class="card-upper-section">
                            <p>NDEP</p>
                            <button class="button-primary" id="comprar" data-valor="38,32" data-codigo="NDEP"
                                data-nome="Nome da empresa">
                                COMPRAR
                            </button>
                        </div>
                        <div class="card-img-container container-3">
                            <!-- <img src="../assets/lego-super-mario-seeklogo.svg" alt="Logo da empresa"> -->
                        </div>
                        <div class="card-down-section">
                            <h6>R$ 38,32</h6>
                            <p>Nome da empresa</p>
                        </div>
                    </div>
                    <div class="card-responsive">
                        <div class="card-upper-section">
                            <p>NDEP</p>
                            <button class="button-primary" id="comprar" data-valor="38,32" data-codigo="NDEP"
                                data-nome="Nome da empresa">
                                COMPRAR
                            </button>
                        </div>
                        <div class="card-img-container container-4">
                        </div>
                        <div class="card-down-section">
                            <h6>R$ 38,32</h6>
                            <p>Nome da empresa</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-vender section-organizer wrapper hidden">
            <div class="container-acoes">
                <h1>Venda de ações</h1>
                <div class="cards-container">

                    <div class="card-responsive">
                        <div class="card-upper-section">
                            <p>NDEP</p>
                            <button class="button-secondary" id="vender" data-valor="38,32" data-codigo="NDEP"
                                data-nome="Nome da empresa">
                                VENDER
                            </button>
                        </div>
                        <div class="card-img-container container-1">
                            <!-- <img src="../assets/apple-seeklogo.svg" alt="Logo da empresa"> -->
                        </div>
                        <div class="card-down-section">
                            <h6>R$ 38,32</h6>
                            <p>Possui: 6.</p>
                            <p>Nome da empresa</p>
                        </div>
                    </div>
                    <div class="card-responsive">
                        <div class="card-upper-section">
                            <p>NDEP</p>
                            <button class="button-secondary" id="vender" data-valor="38,32" data-codigo="NDEP"
                                data-nome="Nome da empresa">
                                VENDER
                            </button>
                        </div>
                        <div class="card-img-container container-2">
                            <!-- <img src="../assets/coca-cola-seeklogo.svg" alt="Logo da empresa"> -->
                        </div>
                        <div class="card-down-section">
                            <h6>R$ 38,32</h6>
                            <p>Possui: 6.</p>
                            <p>Nome da empresa</p>
                        </div>
                    </div>
                    <div class="card-responsive">
                        <div class="card-upper-section">
                            <p>NDEP</p>
                            <button class="button-secondary" id="vender" data-valor="38,32" data-codigo="NDEP"
                                data-nome="Nome da empresa">
                                VENDER
                            </button>
                        </div>
                        <div class="card-img-container container-3">
                            <!-- <img src="../assets/lego-super-mario-seeklogo.svg" alt="Logo da empresa"> -->
                        </div>
                        <div class="card-down-section">
                            <h6>R$ 38,32</h6>
                            <p>Possui: 6.</p>
                            <p>Nome da empresa</p>
                        </div>
                    </div>
                    <div class="card-responsive">
                        <div class="card-upper-section">
                            <p>NDEP</p>
                            <button class="button-secondary" id="vender" data-valor="38,32" data-codigo="NDEP"
                                data-nome="Nome da empresa">
                                VENDER
                            </button>
                        </div>
                        <div class="card-img-container container-4">
                        </div>
                        <div class="card-down-section">
                            <h6>R$ 38,32</h6>
                            <p>Possui: 6.</p>
                            <p>Nome da empresa</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p> &copy; Via de Acesso. Todos os direitos reservados.</p>
    </footer>

    <script src="../scripts/navBar.js"></script>
    <script src="../scripts/navbarPages.js"></script>
    <script src="../scripts/buy-sell.js"></script>
</body>

</html>