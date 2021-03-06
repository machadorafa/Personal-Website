<div id="portfolio">
        <div class="parallax">
            <h1 class="text-center h1">PORTFOLIO</h1>
        </div>
    </div>

    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?php echo $root ?>"><img src="../assets/img/rm-white.png" height="30" alt="Rafael Machado logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav roboto">
                    <a class="nav-item nav-link" href="<?php echo $root ?>#home">Home</a>
                    <a class="nav-item nav-link" href="#contact">Contato</a>
                </div>
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="?lang=en">en</a>
                    <a id="scroll" class="nav-item nav-link" href="#port-list"><i class="fas fa-angle-down"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container bloco" id="port-list">
        <ul class="list-unstyled">
            <li class="media">
                <a href="http://paulamachado.info/"><img class="mr-3 port-img borda" src="../assets/img/pcom.png" alt="Pcom landing page"></a>
                <div class="media-body">
                    <h5 class="mt-0 mb-1 roboto-bold">Paula Machado Comunicação</h5>
                    <p class="roboto">Página profissional desenvolvida com WordPress.<br>Bem posicionada no Google com trabalho de SEO.</p>
                </div>
            </li>
            <br>
            <li class="media my-4">
                <div class="media-body direita">
                    <h5 class="mt-0 mb-1 roboto-bold">G2Ma - Arquitetura e Construções</h5>
                    <p class="roboto">Página de escritório de arquitetura desenvolvida com WordPress.</p>
                </div>
                <a href="http://g2ma.com.br/"><img class="mr-3 port-img borda" src="../assets/img/g2ma.png" alt="G2Ma landing page"></a>
            </li>
        </ul>
    </div>

    <div class="container bloco" id="port-list-mob">
        <ul class="list-unstyled">
            <li>
                <a href="https://paulamachado.info/"><img class="mr-3 port-img borda" src="../assets/img/pcom.png" alt="Pcom landing page"></a>
                <br>
                <div>
                    <h5 class="mt-0 mb-1 roboto-bold">Paula Machado Comunicação</h5>
                    <p class="roboto">Página profissional desenvolvida com WordPress.<br>Bem posicionada no Google com trabalho de SEO.</p>
                </div>
            </li>
            <br>
            <li>
                <a href="http://g2ma.com.br/"><img class="mr-3 port-img borda" src="../assets/img/g2ma.png" alt="G2Ma landing page"></a>
                <br>
                <div>
                    <h5 class="mt-0 mb-1 roboto-bold">G2Ma - Arquitetura e Construções</h5>
                    <p class="roboto">Página de escritório de arquitetura desenvolvida com WordPress.</p>
                </div>
            </li>
        </ul>
    </div>

    <?php require_once "../contato.html"; ?>

    <div class="container bloco text-center roboto-thin">
        <small>Rafael Machado - © Portfolium</small>
    </div>

    <script type="text/javascript">
        <?php require_once "../assets/js/smooth-scroll.js"; ?>
    </script>