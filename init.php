<?php

use Bookstore\Domain\Book;
use Bookstore\Domain\Customer;


require_once __DIR__ . '/Domain/Book.php';
require_once __DIR__ . '/Domain/Customer.php';

function autoloader($classname)
{
    $lastSlash = strpos($classname, '\\') + 1;
    $classname = substr($classname, $lastSlash);
    $directory = str_replace('\\', '/', $classname);
    $filename = __DIR__ . '/' . $directory . '.php';
    require_once $filename;
}

spl_autoload_register('autoloader');

function checkIfValid(Customer $customer, $books)
{ 
    return $customer->getAmountToBorrow()>=count($books);
}


$harry_potter = new Book(942342331321, "Harry Potter First Volume", "J. K. Rowling", 10);

$first_customer = new Customer(1, "Alex", "Tom", "alextom@email.com");
$second_customer = new Customer(null, "Howard", "John", "howard@john.com");
//$third=new Customer(5,"Rock","Nills","rcok@nill.com");

//var_dump($harry_potter);
//var_dump($first_customer->getFirstName());
//var_dump($first_customer->getFullName());
//var_dump($first_customer->getEmail());
//var_dump($first_customer->setEmail('alex@tom.com'));
//var_dump($first_customer->getEmail());
//echo $harry_potter;

//var_dump($second_customer);

//var_dump($first_customer::getLastId());

/*echo $first_customer::getLastId();

echo Customer::getLastId();*/

var_dump(checkIfValid($first_customer,$harry_potter));
