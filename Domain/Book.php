<?php

namespace Bookstore\Domainss;


class Book
{

    public $title;
    public $isbn;
    public $author;
    public $available;

    public function __construct(int $isbn, String $title, String $author, int $available = 0)
    {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->available = $available;
    }

    public function __toString()
    {
        $result = $this->title . ' by ' . $this->author;

        if (!$this->available) {
            $result .= 'Not Available';
        }

        return $result;
    }


    public function getPrintableTitle()
    {
        $result = $this->title . ' by ' . $this->author;

        if (!$this->available) {
            $result .= 'Not Available';
        }

        return $result;
    }
    public function getCopy()
    {
        if ($this->available < 1) {
            return false;
        } else {
            $this->available--;
            return true;
        }
    }x
}

$harry_potter = new Book(942342331321, "Harry Potter First Volume", "J. K. Rowling", 10);

/*$harry_potter->isbn = 942342331321;
$harry_potter->title = "Harry Potter First Volume";
$harry_potter->author = "J. K. Rowling";
$harry_potter->available = 10;*/

/*if ($harry_potter->getCopy()) {
    echo 'Here is your copy of ' . $harry_potter->title . '<br>';
} else {
    echo 'Sorry it\'s gone. ';
}*/

echo $harry_potter;
