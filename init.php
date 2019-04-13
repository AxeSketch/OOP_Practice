<?php

require_once __DIR__ . '/Book.php';
require_once __DIR__ . '/Customer.php';

$harry_potter = new Book(942342331321,"Harry Potter First Volume","J. K. Rowling",10);

$first_customer=new Customer(1,"Alex","Tom","alextom@email.com");


//var_dump($harry_potter);
//var_dump($first_customer->getFirstName());
//var_dump($first_customer->getFullName());
var_dump($first_customer->getEmail());
var_dump($first_customer->setEmail('alex@tom.com'));
var_dump($first_customer->getEmail());
//echo $harry_potter;

