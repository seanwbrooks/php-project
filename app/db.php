<?php

$user = 'root';
$password = 'root';
$db = 'blackjack';
$host = 'localhost';
$port = 8889;

$link = mysqli_init();
$success = mysqli_real_connect($link, $host, $user, $password, $db, $port);

$sql = "INSERT INTO blackjack.cards (suites, ranks) VALUES ()";