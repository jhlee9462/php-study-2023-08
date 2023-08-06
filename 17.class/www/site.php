<?php

class Book
{
    var $title;
    var $author;
    var $pages;

    function __construct($title, $author, $pages)
    {
        $this->title = $title;
        $this->author = $author;
        $this->pages = $pages;
    }

    function toString()
    {
        echo "Title is $this->title <br>Author is $this->author<br>Number of pages is $this->pages";
    }
}

$book1 = new Book("Harry Potter", "JK Rowling", 400);

echo "$book1->title <br>";