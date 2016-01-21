 
<?php
//item.php_binary_read

/**
*
* This serves as a resource for our second Group project
*/


class Item 
{
    public $name = '';
    public $description = '';
    public $price = 0;


    public __construct($name,$description, $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }
    
    
    
    
}