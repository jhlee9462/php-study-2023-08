<?php
function sayHi($name)
{
    echo "Hello $name";
}

function cube($number)
{
    return pow($number, 3);
}

sayHi("Jinho");
echo cube(2);