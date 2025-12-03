<?php

require 'Classes/Client.php';
require 'Classes/Pub.php';

$tables = [
    new Table(1, 3),
    new Table(2, 7),
    new Table(3, 10),
    new Table(4, 4),
];

$pub = new Pub($tables);
$client1 = new Client('Pepe', 5);
$client2 = new Client('Mirall', 10);
$client3 = new Client('Oriol', 9);

echo $client1->reserve($pub) . PHP_EOL;
echo $client2->reserve($pub) . PHP_EOL;
echo $client3->reserve($pub) . PHP_EOL;
