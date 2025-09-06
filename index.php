<?php
include 'produtos.php';
include 'carrinho.php';
include 'funcoes.php';

adicionarAoCarrinho($produtos, $carrinho, 1, 2);

adicionarAoCarrinho($produtos, $carrinho, 3, 10);

adicionarAoCarrinho($produtos, $carrinho, 2, 1);
removerDoCarrinho($produtos, $carrinho, 2);

$total = listarCarrinho($carrinho, $produtos);
aplicarDesconto($total, 'DESCONTO10');

?>
