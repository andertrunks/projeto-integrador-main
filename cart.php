<?php
// Inicia a sessão
session_start();


$products = [
    1 => ['name' => 'Camiseta Ciclista', 'price' => 78, 'image' => 'img/products/a1.webp'],
    // Adicione mais produtos conforme necessário
];

// Inicializa o carrinho se não existir
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Função para adicionar produto ao carrinho
function add_to_cart($product_id) {
    global $products;
    if (isset($products[$product_id])) {
        if (isset($_SESSION['cart'][$product_id])) {
            $_SESSION['cart'][$product_id]['quantity']++;
        } else {
            $_SESSION['cart'][$product_id] = ['product' => $products[$product_id], 'quantity' => 1];
        }
    }
}

// Função para remover produto do carrinho
function remove_from_cart($product_id) {
    if (isset($_SESSION['cart'][$product_id])) {
        unset($_SESSION['cart'][$product_id]);
    }
}

// Função para atualizar a quantidade do produto no carrinho
function update_cart($product_id, $quantity) {
    if (isset($_SESSION['cart'][$product_id]) && $quantity > 0) {
        $_SESSION['cart'][$product_id]['quantity'] = $quantity;
    }
}

// Manipula as ações do carrinho
if (isset($_GET['action']) && isset($_GET['id'])) {
    $action = $_GET['action'];
    $product_id = (int)$_GET['id'];

    if ($action == 'add') {
        add_to_cart($product_id);
    } elseif ($action == 'remove') {
        remove_from_cart($product_id);
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action'])) {
    if ($_POST['action'] == 'update' && isset($_POST['product_id']) && isset($_POST['quantity'])) {
        $product_id = (int)$_POST['product_id'];
        $quantity = (int)$_POST['quantity'];
        update_cart($product_id, $quantity);
    }
}

// Calcula o preço total do carrinho
$total_price = 0;
foreach ($_SESSION['cart'] as $item) {
    $total_price += $item['product']['price'] * $item['quantity'];
}

$cart_items = $_SESSION['cart'];
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>B2C - BIKE</title>
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <section id="header">
      <a href="#"
        ><img src="img/logo.png" width="142" class="logo" alt="logo"
      /></a>

      <div>
        <ul id="navbar">
          <li><a href="inicio.php">Home</a></li>
          <li><a href="vestuario.html">Vestuário</a></li>
          <li><a href="componente.html">Componentes</a></li>
          <li><a href="about2.html">Sobre</a></li>
          <li><a href="contact2.html">Contato</a></li>
          <li id="lg-bag">
            <a class="active" href="cart.php"
              ><i class="far fa-shopping-bag"></i
            ></a>
          </li>
          <li>
            <a href="index.html"><i class="far fa-sign-out-alt"></i></a>
          </li>
          <a href="#" id="close"><i class="far fa-times"></i></a>
        </ul>
      </div>
      <div id="mobile">
        <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
      </div>
    </section>

    <section id="page-header" class="about-header">
      <h2>#carrinho</h2>
      <p>Revise seu carrinho</p>
    </section>

    <section id="cart" class="section-p1">
      <table width="100%">
        <thead>
          <tr>
            <td class="td">Remover</td>
            <td class="td">Imagem</td>
            <td class="td">Produto</td>
            <td class="td">Preço</td>
            <td class="td">Quantidade</td>
            <td class="td">Subtotal</td>
          </tr>
        </thead>
        <tbody>
          <?php if (empty($cart_items)): ?>
            <tr>
              <td colspan="6" class="td">Seu carrinho está vazio.</td>
            </tr>
          <?php else: ?>
            <?php foreach ($cart_items as $item_id => $item): ?>
              <tr>
                <td class="td">
                  <a href="cart.php?action=remove&id=<?php echo $item_id; ?>"><i class="far fa-times-circle"></i></a>
                </td>
                <td class="td"><img src="<?php echo $item['product']['image']; ?>" alt="<?php echo htmlspecialchars($item['product']['name']); ?>" /></td>
                <td class="td"><?php echo htmlspecialchars($item['product']['name']); ?></td>
                <td class="td">R$ <?php echo number_format($item['product']['price'], 2, ',', '.'); ?></td>
                <td class="td">
                  <form action="cart.php" method="post">
                    <input type="hidden" name="action" value="update">
                    <input type="hidden" name="product_id" value="<?php echo $item_id; ?>">
                    <input type="number" name="quantity" value="<?php echo $item['quantity']; ?>" min="1">
                    <button type="submit">Atualizar</button>
                  </form>
                </td>
                <td class="td">R$ <?php echo number_format($item['product']['price'] * $item['quantity'], 2, ',', '.'); ?></td>
              </tr>
            <?php endforeach; ?>
          <?php endif; ?>
        </tbody>
      </table>
    </section>

    <section id="cart-add" class="section-p1">
      <div id="coupon">
        <h3>Aplique seu cupom</h3>
        <div>
          <input type="text" placeholder="Digite seu cupom" />
          <button class="normal">Aplicar</button>
        </div>
      </div>

      <div id="subtotal">
        <h3>Total do carrinho</h3>
        <table>
          <tr>
            <td>Subtotal do carrinho</td>
            <td>R$ <?php echo number_format($total_price, 2, ',', '.'); ?></td>
          </tr>
          <tr>
            <td>Frete</td>
            <td>Grátis</td>
          </tr>
          <tr>
            <td><strong>Total</strong></td>
            <td><strong>R$ <?php echo number_format($total_price, 2, ',', '.'); ?></strong></td>
          </tr>
        </table>
        <button class="normal">Finalizar Compra</button>
      </div>
    </section>

    <footer class="section-p1">
      <div class="col">
        <img class="logo" src="img/logo2.png" width="142" alt="" />
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
          <img src="img/pay/app.jpg" alt="" />
          <img src="img/pay/play.jpg" alt="" />
        </div>
        <p>Gateways de pagamentos seguros</p>
        <img src="img/pay/pay.png" alt="" />
      </div>

      <div class="copyright">
        <p>&copy 2024, Bike E-Commerce - Naju</p>
      </div>
    </footer>

    <script src="script.js"></script>
  </body>
</html>
