<?php
include "../../17.class/www/site.php";

$book2 = new Book("Lord of the Rings", "Tolkein", 700);
echo "$book2->title<br>";
$book2->toString();