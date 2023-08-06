<?php
$grades = array("Jim" => "A+", "Pam" => "B-", "Oscar" => "C+");
echo $grades["Jim"];
$grades["Jim"] = "F";
echo $grades["Jim"];
echo count($grades);