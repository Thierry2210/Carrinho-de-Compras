🛒 Projeto Carrinho de Compras em PHP

Desenvolvedores  
- Artur Camilo Taroco - RA: 2009597  
- Matheus Thierry Santos da Silva - RA: 1999010  

Este é um projeto básico de simulação de um carrinho de compras desenvolvido em PHP puro, sem banco de dados, sem frameworks e sem formulários. Ele é ideal para iniciantes que estão aprendendo manipulação de arrays, funções e lógica básica em PHP.

📁 Estrutura de Arquivos
projeto-carrinho/
│
├── index.php         → Arquivo principal que executa os testes
├── produtos.php      → Lista de produtos disponíveis (com estoque)
├── carrinho.php      → Representa o carrinho (array vazio inicial)
└── funcoes.php       → Contém todas as funções do sistema

✅ Funcionalidades

Adicionar item ao carrinho

Valida se o produto existe

Verifica o estoque

Atualiza o carrinho e o estoque

Remover item do carrinho

Devolve o estoque

Remove o item do carrinho

Listar itens do carrinho

Exibe nome, quantidade e subtotal de cada item

Mostra o total geral

Aplicar cupom de desconto

Cupom fixo: DESCONTO10 (10% de desconto)

🧪 Casos de Uso Simulados

Estes testes são executados diretamente no index.php:

✅ Adição válida ao carrinho
Produto ID 1 (Camiseta), quantidade 2

❌ Adição acima do estoque disponível
Produto ID 3 (Tênis), quantidade 10 → retorna "Estoque insuficiente"

🔄 Remoção de item do carrinho
Produto ID 2 (Calça Jeans), após ser adicionado

🎁 Aplicação de cupom de desconto
Cupom: DESCONTO10

🚀 Como Executar

Instale e abra o XAMPP

Copie a pasta projeto-carrinho para dentro de htdocs

Acesse no navegador:

http://localhost/projeto-carrinho/index.php

📌 Requisitos

PHP 7 ou superior

XAMPP (ou outro servidor local)

Navegador
