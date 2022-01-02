<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Gustavo Mocelin | Desenvolvedor Front end</title>
</head>

<body id="home">
    <header>
        <div class="cabecalho">
        <div class="icon-menu"></div>
            <div class="linha"></div>
            <div class="margin-auto">
                <p class="logo">Gustavo Mocelin</p>
                <div class="direita">
                    <div class="cima-contato">
                        <p class="email">gustavo.mocelin2@gmail.com.br</p>
                        <a href="" class="face"></a>
                        <a href="" class="linke"></a>
                    </div>
                    <div class="nav">
                        <a href="#home">HOME</a>
                        <a href="#port">PORTFÓLIO</a>
                        <a href="#contato">CONTATO</a>
                    </div>
                </div>
            </div>
        <div>
        <div class="menu-respon">
                <div class="engloba-menu-responsivo">
                    <p class="logo">Gustavo Mocelin</p>
                    <a href="#home">HOME</a>
                    <a href="#port">PORTFÓLIO</a>
                    <a href="#contato">CONTATO</a>    
                </div>
                <div class="fundo-menu"></div>
        </div>
    </header>
    <main>    
    <div class="fundo-secao1">
        <div class="engloba-secao1">
            <div class="margin-auto">
                <div class="foto"><p>Desenvolvedor Web Front end</p></div>  
                <p class="fora">Desenvolvedor Web Front end</p>          
            <div class="skills">
                <div class="sites">
                      <div class="img-sites"></div>
                      <p>Desenvolvimento de sites responsivos<br> com boas práticas de programação</p>
                </div>
                <div class="desen">
                      <div class="img-desen"></div>
                      <p>Seguindo padrões de SEO para <br>seu site ficar em primeiro no Google</p>
                </div>
                <div class="pro">
                      <div class="img-pro"></div>
                      <p>Desenvolvendo sites usando:<Br>HTML,CSS, PHP, Javascript e Mysql</p>
                </div>
            </div>
            </div> 
        </div>
    </div>
        <div class="engloba-secao2">
            <p class="portfolio" id="port">PORTFÓLIO</p>
                <div class="site">
                    <p>Primeiro site</p>
                    <a href="" class="site1"></a>
                </div>        
                <div class="site">
                    <p>Segundo site</p>
                    <a href="" class="site1"></a>
                </div>
                <div class="site">
                    <p>Terceiro site</p>
                    <a href="" class="site1"></a>
                </div>
                <div class="site">
                    <p>Quarto site</p>
                    <a href="" class="site1"></a>
                </div>
                <div class="site">
                    <p>Quinto site</p>
                    <a href="" class="site1"></a>
                </div>
                <div class="site">
                    <p>Sexto site</p>
                    <a href="" class="site1"></a>
                </div>
                <div class="site">
                    <p>Sétimo site</p>
                    <a href="" class="site1"></a>
                </div>
                <div class="site">
                    <p>Oitavo site</p>
                    <a href="" class="site1"></a>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="fundo-footer">
            <div class="margin-auto">
                <p class="titulo" id="contato">CONTATO</p>
                <div class="engloba-email">
                <a href="" class="email">gustavo.mocelin2@gmail.com.br</a>
                </div>
                <div class="contato">
                <div class="engloba-redes">
                    <a href="" class="linke"></a>
                    <a href="" class="face"></a>
                </div>
                </div>
                <p class="copy">© 2021 | Todos os Direitos Reservados | Desenvolvido por <a href="#home">Gustavo Mocelin</a></p>
            </div>
        </div>
    </footer>
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script>
    $(window).ready(function() {

        $(".icon-menu").click(function() {
            $('body').addClass('overflow-body');
            $(".engloba-menu-responsivo").animate({
                left: "0",
            }, 300, function() {
            });
            $(".fundo-menu").animate({
                left: "0",
            }, 300, function() {
            });
        });

        $(".categoria-menu-open").click(function() {
            $(".menu-categorias").animate({
                left: "0",
            }, 300, function() {
            });
        });
        
        $(".voltar-menu-1").click(function() {
            $(".menu-categorias").animate({
                left: "0",
            }, 300, function() {
            });
        });

        $(".fundo-menu").click(function() {
            $('body').removeClass('overflow-body');
            $(".engloba-menu-responsivo").animate({
                left: "-80%",
            }, 300, function() {
            });

            $(".menu-categorias").animate({
            left: "-80%",
            }, 300, function() {
            });

            $(".fundo-menu").animate({
                left: "-100%",
            }, 300, function() {
            }); 
        });
    }); 
</script>
</html>