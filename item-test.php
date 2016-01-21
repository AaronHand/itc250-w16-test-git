 
<?php
//item-test.php

/**
*
* This serves as a resource for our second Group project
*/

include 'item.php';


$myItem = new Item("Burrito", "Includes awesome sauce!", 7.95);

echo "<pre>";
var_dump($myItem);
echo "</pre>";