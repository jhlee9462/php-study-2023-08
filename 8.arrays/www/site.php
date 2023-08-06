<?php
$friends = array("Kevin", 1, false, "Karen", "Oscar", "Jim");
$friends[3] = "Dwight";
echo $friends[3];
echo count($friends);
$friends[100] = "hi";
echo $friends[100];
echo count($friends);