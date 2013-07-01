<?php
// buscaCategoriaByID.php

// você já sabe o motivo deste require
require_once 'bootstrap.php';

/**
 * 
 * Aqui não há a necessidade de instanciar a Entidade Categoria diretamente.
 * No método find, disposto pelo Entity Manager, passamos dois parâmetros:
 * O primeiro é o nome da Entidade, o segundo é o ID que buscamos.
 */
$categoria = $entityManager->find('Categoria', 2);
 
/**
 * 
 * Neste momento, já temos dentro da variável $categoria
 * toda a linha referente ao ID = 2 da tabela Categoria.
 * Utilizamos agora os gets para obter cada coluna em específico.
 * 
 * A instrução abaixo vai nos imprimir o nome da Categoria em questão.
 */
echo $categoria->getNome();
