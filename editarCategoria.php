<?php
// editarCategoria.php

// você já sabe o motivo deste require
require_once 'bootstrap.php';

/**
 * 
 * Começamos buscando em nosso banco de dados o registro que queremos alterar
 */
$update = $entityManager->find('Categoria', 3);

/**
 * 
 * Após isto, definimos os novos valores para as colunas. Neste caso, apenas o nome.
 */
$update->setNome('Categoria Alterada');

/**
 * 
 * O processo abaixo já é conhecido por você.
 * Não se lembra? Veja o arquivo adicionaCategoria.php
 */
$entityManager->persist($update);
$entityManager->flush();
