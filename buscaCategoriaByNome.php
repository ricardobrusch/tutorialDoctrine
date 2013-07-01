<?php
// buscaCategoriaByNome.php

// você já sabe o motivo deste require
require_once 'bootstrap.php';

 /**
  * 
  * Agora vamos buscar uma categoria por nome, mas de um jeito um pouco diferente
  * Pegamos toda a Entidade Categoria e após isso buscamos apenas UM registro.
  * Para retornar todos os registros encontrados com os parâmetros passados,
  * altere a função findOneBy por findBy (esta última retorna um Array de Objetos)
  * 
  * Dentro do array, você pode passar quantos parâmetros for necessário para sua pesquisa.
  */
$categoria = $entityManager->getRepository('Categoria')->findOneBy(array('nome' => 'Hardware'));
 
 /**
  * 
  * Aqui vamos simplesmente imprimir na tela o ID da categoria encontrada.
  */
 echo $categoria->getId();