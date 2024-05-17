<?php

require "verifica.php";

if(isset($_SESSION['id']) && !empty($_SESSION['id'])); ?>

<?php

// definições de host, database, usuário e senha
$host = "127.0.0.1";
$db   = "projetointegrador1";
$user = "root";
$pass = "";
// conecta ao banco de dados
//$conexao = mysql_pconnect($host, $user, $senha) or trigger_error(mysql_error(),E_USER_ERROR);
// seleciona a base de dados em que vamos trabalhar
//mysql_select_db($db, $conexao);
// cria a instrução SQL que vai selecionar os dados
//$query = sprintf("SELECT nome FROM usuario");
// executa a query
//$dados = mysql_query($query, $conexao) or die(mysql_error());
// transforma os dados em um array
//$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
//$total = mysql_num_rows($dados);
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>B2C - BIKE</title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />

        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <section id="header">
            <a href="#"><img src="img/logo.png" width="142" class="logo" alt="logo"></a>

            <div>
                <ul id="navbar">
                    <li><a class="active" href="inicio.php">Home</a></li>
                    <li><a href="vestuario.html">Vestuário</a></li>
                    <li><a href="componente.html">Componentes</a></li>
                    <li><a href="about2.html">Sobre</a></li>
                    <li><a href="contact2.html">Contato</a></li>
                    <li id="lg-bag"><a href="cart.html"><i class="far fa-shopping-bag"></i></a></li>
                    <li><a href="index.html"><i class="far fa-sign-out-alt"></i></a></li>
                    <a href="#" id="close"><i class="far fa-times"></i></a>
                </ul>
            </div>
            <div id="mobile">
                <a href="cart.html"><i class="far fa-shopping-bag"></i></a>
                <i id="bar" class="fas fa-outdent"></i>
            </div>
        </section>

        <section id="hero">
            <h4>Ofertas da semana</h4>
            <h2>10% Off em pagamentos por pix</h2>
            <h1>Em todos os produtos</h1>
            <p>Economize mais com cupons em até 70% de desconto!</p>
            <button>Compre Agora</button>
        </section>

        <section id="feature" class="section-p1">
            <div class="fe-box">
                <img src="img/features/f1.png" alt="">
                <h6>Frete Grátis na Região</h6>
            </div>
            <div class="fe-box">
                <img src="img/features/f2.png" alt="">
                <h6>Pedido Online</h6>
            </div>
            <div class="fe-box">
                <img src="img/features/f3.png" alt="">
                <h6>Economize</h6>
            </div>
            <div class="fe-box">
                <img src="img/features/f4.png" alt="">
                <h6>Promoções</h6>
            </div>
            <div class="fe-box">
                <img src="img/features/f5.png" alt="">
                <h6>Venda Feliz</h6>
            </div>
            <div class="fe-box">
                <img src="img/features/f6.png" alt="">
                <h6>Suporte 24h</h6>
            </div>
        </section>

        <section id="product1" class="section-p1">
            <h2>Produtos em Destaque</h2>
            <p>Coleção de Verão Novo Design</p>
            <div class="pro-container">
                <div class="pro">
                    <img src="img/products/img3.jpg" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Camiseta Ciclista</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/img3.jpg" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Camiseta Ciclista</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/img3.jpg" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Camiseta Ciclista</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/img3.jpg" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Camiseta Ciclista</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/img3.jpg" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Camiseta Ciclista</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/img3.jpg" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Camiseta Ciclista</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/img3.jpg" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Camiseta Ciclista</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/img3.jpg" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Camiseta Ciclista</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
            </div>
        </section>

        <section id="banner" class="section-m1">
            <h4>DESCONTO</h4>
            <h2>Até <span>70% Off</span> - Na Sua Terceira Compra</h2>
            <button class="normal">Ver Mais</button>
        </section>

        <section id="product1" class="section-p1">
            <h2>Novidades</h2>
            <p>Venha Aproveitar As Novidades Da Loja</p>
            <div class="pro-container">
                <div class="pro">
                    <img src="img/products/img3.jpg" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Camiseta Ciclista</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/img3.jpg" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Camiseta Ciclista</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/img3.jpg" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Camiseta Ciclista</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/img3.jpg" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Camiseta Ciclista</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/img3.jpg" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Camiseta Ciclista</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/img3.jpg" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Camiseta Ciclista</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/img3.jpg" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Camiseta Ciclista</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/img3.jpg" alt="">
                    <div class="des">
                        <span>adidas</span>
                        <h5>Camiseta Ciclista</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>
            </div>
        </section>

        <section id="sm-banner" class="section-p1">
            <div class="banner-box">
                <h4>Ofertas Malucas</h4>
                <h2>Por pouco tempo </h2>
                <span>Os melhores componentes para sua bicicleta você encontra aqui!</span>
                <button class="white">Confira</button>
            </div>
            <div class="banner-box banner-box2">
                <h4>Primavera/Verão</h4>
                <h2>Próxima estação</h2>
                <span>Roupas confortáveis para a época!</span>
                <button class="white">Confira</button>
            </div>
        </section>

        <section id="newsletter" class="section-p1 section-m1">
            <div class="newstext">
                <h4>Faça seu login para receber novidades</h4>
                <p>Receba notificações por e-mail sobre novos proedutos e <span>ofertas especiais.</span></p>
            </div>
            <div class="form">
                <input type="text" placeholder="Seu email">
                <button class="normal">Sign Up</button>
            </div>
        </section>

        <footer class="section-p1">
            <div class="col">
                <img class="logo" src="img/logo2.png" width="142" alt="">
                <h4>Contato</h4>
                <p><strong>Endereço:</strong> Araraquara, SP</p>
                <p><strong>Telefone:</strong>+55169999-9999 | +55169999-9999</p>
                <p><strong>Horário:</strong>10:00 - 18:00, Seg - Sab</p>
                <div class="follow">
                    <h4>Nos siga</h4>
                    <div class="icon">
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                    </div>
                </div>
            </div>

            <div class="col">
                <h4>Sobre</h4>
                <a href="#">Sobre Nós</a>
                <a href="#">Informação de entrega</a>
                <a href="#">Política de Privacidade</a>
                <a href="#">Termos & Condições</a>
                <a href="#">Entre em contato</a>
            </div>

            <div class="col">
                <h4>Minha conta</h4>
                <a href="#">Sign In</a>
                <a href="#">Carrinho</a>
                <a href="#">Minha Lista de Desejos</a>
                <a href="#">Acompanhar o meu pedido</a>
                <a href="#">Ajuda</a>
            </div>

            <div class="col install">
                <h4>Instalar aplicativo</h4>
                <p>App Store ou Google Play</p>
                <div class="row">
                    <img src="img/pay/app.jpg" alt="">
                    <img src="img/pay/play.jpg" alt="">
                </div>
                <p>Gateways de pagamentos seguros</p>
                <img src="img/pay/pay.png" alt="">
            </div>

            <div class="copyright">
                <p>&copy 2024, Bike E-Commerce - Naju</p>
            </div>
        </footer>

        <script src="script.js"></script>
    </body>

</html>