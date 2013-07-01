<?php
// apresentaProduto.php

// você já sabe o motivo deste require
require_once 'bootstrap.php';

/**
 * 
 * Função igual à vista anteriormente, só mudamos o nome da Entidade
 */
$produto = $entityManager->find('Produto', 3);

// Ok, você já sabe o que isto faz
$nome = $produto->getNome();

/**
 * 
 * Isto é novo! Acessando a função getCategoria() dentro da entidade Produto
 * uma vez que esta faz referência à entidade Categoria, posso então acessar
 * TODO E QUALQUER método da entidade Categoria. 
 * 
 * Lembre-se. O getNome da linha 14 faz referência à entidade Produto,
 * já o getNome da linha abaixo faz referência à classe Categoria
 */
$categoria = $produto->getCategoria()->getNome();

//para encerrar, apresento os dois dados capturados.

echo $nome . "<br />";
echo $categoria;