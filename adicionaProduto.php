<?php
// adicionaProduto.php

// você já sabe o motivo deste require :)
require_once 'bootstrap.php';

/**
 * 
 * No primeiro momento, antes de adicionar o produto, devemos recuperar 
 * a categoria à qual este produto pertence
 */
$categoria = $entityManager->find('Categoria', 1);

// instanciamos um novo produto (mais uma vez, obrigado autoload!)
$produto = new Produto;

//setamos o nome deste produto
$produto->setNome('Placa de Som');

/**
 * 
 * Aqui acontece uma mágica. Já recuperamos o objeto da categoria que desejamos,
 * basta adicioná-lo agora ao produto, através do método setCategoria
 */
$produto->setCategoria($categoria);

// aqui já está dominado, certo?
$entityManager->persist($produto);
$entityManager->flush();
