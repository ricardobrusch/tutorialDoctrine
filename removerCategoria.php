<?php
// removerCategoria.php

// você já sabe o motivo deste require
require_once 'bootstrap.php';

/**
 * 
 * A essa altura você já sabe o que essa linha faz
 */
$excluir = $entityManager->find('Categoria', 4);

/**
 * 
 * Função nova. ao invés de persist, agora utilizamos o remove,
 * passando nela o objeto à ser excluido.
 * 
 * Abaixo, o flush para concretizar a operação
 */
$entityManager->remove($excluir);
$entityManager->flush();