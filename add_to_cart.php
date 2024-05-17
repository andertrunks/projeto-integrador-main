<?php

session_start();

// Verifique se os dados do produto foram enviados
if (isset($_POST['product_id']) && isset($_POST['quantity'])) {
    $product_id = (int) $_POST['product_id'];
    $quantity = (int) $_POST['quantity'];

    // Conecte-se ao banco de dados (substitua as credenciais de acordo com sua configuração)
    $db = new mysqli('localhost', 'usuario', 'senha', 'banco_de_dados');

    // Verifique se há erro de conexão
    if ($db->connect_error) {
        die('Falha na conexão com o banco de dados: ' . $db->connect_error);
    }

    // Verifique se o produto existe no banco de dados
    $sql = "SELECT * FROM produtos WHERE id = $product_id";
    $result = $db->query($sql);

    if ($result->num_rows == 0) {
        die('Produto não encontrado.');
    }

    $product = $result->fetch_assoc();

    // Verifique se o carrinho já existe na sessão
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $cart = &$_SESSION['cart'];

    // Adicione o produto ao carrinho ou atualize a quantidade
    if (array_key_exists($product_id, $cart)) {
        $cart[$product_id]['quantity'] += $quantity;
    } else {
        $cart[$product_id] = [
            'id' => $product_id,
            'name' => $product['nome'],
            'price' => $product['preco'],
            'quantity' => $quantity
        ];
    }

    // Redirecione para a página do produto ou do carrinho
    header('Location: product.php?id=' . $product_id);
    exit;
} else {
    die('Dados do produto não enviados.');
}

?>