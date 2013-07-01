<?php
// bootstrap.php
//vamos configurar a chamada ao Entity Manager, o mais importante do Doctrine

// o Autoload é responsável por carregar as classes sem necessidade de incluí-las previamente
require_once "vendor/autoload.php";


// o Doctrine utiliza namespaces em sua estrutura, por isto estes uses 
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

//onde irão ficar as entidades do projeto? Defina o caminho aqui
$entidades = array("src/");
$isDevMode = true;

// configurações de conexão. Coloque aqui os seus dados
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '12345',
    'dbname'   => 'doctrinedb',
);

//setando as configurações definidas anteriormente
$config = Setup::createAnnotationMetadataConfiguration($entidades, $isDevMode);

//criando o Entity Manager com base nas configurações de dev e banco de dados
$entityManager = EntityManager::create($dbParams, $config);
