<?php

require_once('clases/Cliente.php');

print_r('<pre>');

$objCliente = new Cliente();
$objCliente->setName('Gonzalo');
$objCliente->setLastName('García');

var_dump($objCliente->getFullName());

