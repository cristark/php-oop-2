<?php

require_once 'ExtraInfo.php';

// Istanza primo utente senza classe estesa
$user1 = new User(1, 'cris', 'ciao', 'Cristiano', 'Tarconi');

try {

    $user1->setEta(31);

} catch (Exception $e) {
    echo 'Attenzione: ' . $e->getMessage();
}

$user1->getEta();

var_dump($user1);

// Istanza secondo utente utilizzando classe estesa
$user2 = new ExtraInfo(2, 'jack', 'prova', 'Giacomo', 'Biffi');
$user2->setRole(58);
$user2->getRole();

try {

    $user2->setEta(25);

} catch (Exception $e) {
    echo 'Attenzione: ' . $e->getMessage();
}

$user1->getEta();

var_dump($user2);

// Istanza terzo utente utilizzando classe estesa
$user3 = new ExtraInfo(3, 'dave', 'boh', 'Davide', 'Corsini');
$user3->setRole(394);
$user3->getRole();

var_dump($user3);