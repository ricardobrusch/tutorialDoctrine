<?php
// adicionaCategoria.php

/*
 * Fazendo o require do arquivo Bootstrap.php, podemos utilizar tudo que lá foi definido.
 * Estou falando principalmente do EntityManager, criado sobre a variável $entityManager
 */
require_once 'bootstrap.php';

/**
 * 
 *  instanciando a entidade Categoria
 */
$categoria = new Categoria;

/**
 * 
 * utilizando a função setNome 
 * Defino o nome da categoria a ser criada no banco de dados
 */
$categoria->setNome('Nova Categoria');

/**
 * 
 * Aqui o EM entra em ação. 
 * A função persist aguarda por um objeto  para colocá-lo na fila
 * de instruções a ser executada sobre o banco de dados
 */
$entityManager->persist($categoria);

/**
 * 
 * Novamente o EM age e invoca a função flush.
 * Esta é a responsável por pegar todas as intruções previamente preparadas
 * pelo persist e executá-las no banco de dados. 
 * Só a apartir daqui o banco é alterado de alguma forma.
 */
$entityManager->flush();
