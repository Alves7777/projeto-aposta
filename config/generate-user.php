<?php

use App\Adapter\CustomConnection;
use App\Entity\User;
use App\Security\UserPassword;

include dirname(__DIR__) . '/config/database.php';
include dirname(__DIR__) . '/vendor/autoload.php';

$entityManager = CustomConnection::getEntityManager();

$user = new User(
    'Administrador Padrão',
    'admin@adm.com.br',
    UserPassword::encrypt('12345678')
);
$user->setImage('https://avatars.githubusercontent.com/u/70847565?v=4');
$user->setCpf('12345678978');
$user->setAdmin(true);

$entityManager->persist($user);
$entityManager->flush();

echo PHP_EOL . "=======================================" . PHP_EOL;
echo PHP_EOL . "=== USUÁRIO PADRÃO CRIADO! ============" . PHP_EOL;
echo PHP_EOL . "==== Usuário/Email: {$user->getEmail()}" . PHP_EOL;
echo PHP_EOL . "==== Usuário/Senha: 12345678 =" . PHP_EOL;
echo PHP_EOL . "========================================" . PHP_EOL;
echo PHP_EOL . "==IMPORTANTE: Altere a senha depois do primeiro login!" . PHP_EOL;
echo PHP_EOL . "=========================================" . PHP_EOL;


