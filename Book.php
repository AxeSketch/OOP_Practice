<?php

class Book
{

    public $title;
    public $isbn;
    public $author;
    public $available;

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
    }
}

$harry_potter = new Book();
$harry_potter->isbn = 942342331321;
$harry_potter->title = "Harry Potter First Volume";
$harry_potter->author = "J. K. Rowling";
$harry_potter->available = 0;

if ($harry_potter->getCopy()) {
    echo 'Here is your copy of ' . $harry_potter->title . '<br>';
} else {
    echo 'Sorry it\'s gone. ';
}



var_dump($harry_potter);

