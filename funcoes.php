<?php
function buscarProduto($produtos, $id) {
    foreach ($produtos as $index => $produto) {
        if ($produto['id'] == $id) {
            return $index;
        }
    }
    return -1;
}

function adicionarAoCarrinho(&$produtos, &$carrinho, $id_produto, $quantidade) {
    $indice = buscarProduto($produtos, $id_produto);

    if ($indice == -1) {
        echo "Produto não encontrado.<br>";
        return;
    }

    if ($produtos[$indice]['estoque'] < $quantidade) {
        echo "Estoque insuficiente.<br>";
        return;
    }

    $produtos[$indice]['estoque'] -= $quantidade;

    foreach ($carrinho as &$item) {
        if ($item['id_produto'] == $id_produto) {
            $item['quantidade'] += $quantidade;
            $item['subtotal'] = $item['quantidade'] * $produtos[$indice]['preco'];
            echo "Produto adicionado ao carrinho.<br>";
            return;
        }
    }

    $carrinho[] = [
        'id_produto' => $id_produto,
        'quantidade' => $quantidade,
        'subtotal' => $quantidade * $produtos[$indice]['preco']
    ];

    echo "Produto adicionado ao carrinho.<br>";
}

function removerDoCarrinho(&$produtos, &$carrinho, $id_produto) {
    foreach ($carrinho as $i => $item) {
        if ($item['id_produto'] == $id_produto) {
            $indice = buscarProduto($produtos, $id_produto);
            $produtos[$indice]['estoque'] += $item['quantidade'];
            unset($carrinho[$i]);
            echo "Produto removido do carrinho.<br>";
            return;
        }
    }
    echo "Produto não encontrado no carrinho.<br>";
}

function listarCarrinho($carrinho, $produtos) {
    echo "<h3>Itens no Carrinho:</h3>";
    $total = 0;

    foreach ($carrinho as $item) {
        $indice = buscarProduto($produtos, $item['id_produto']);
        echo "- " . $produtos[$indice]['nome'] .
             " | Quantidade: " . $item['quantidade'] .
             " | Subtotal: R$ " . number_format($item['subtotal'], 2, ',', '.') . "<br>";
        $total += $item['subtotal'];
    }

    echo "Total: R$ " . number_format($total, 2, ',', '.') . "<br>";
    return $total;
}

function aplicarDesconto($total, $cupom) {
    if ($cupom == 'DESCONTO10') {
        $desconto = $total * 0.10;
        $totalComDesconto = $total - $desconto;
        echo "Cupom aplicado! Desconto de 10%.<br>";
        echo "Total com desconto: R$ " . number_format($totalComDesconto, 2, ',', '.') . "<br>";
    } else {
        echo "Cupom inválido.<br>";
    }
}
