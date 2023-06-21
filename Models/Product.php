<?php 

class Product {
	public $name;
	public $price;
    public $type;
    public $category;

    public function __construct($name,$price,$type,$category)
    {
        $this->name = $name;
        $this->name = $price;
        $this->name = $type;
        $this->name = $category;
        
    }
	
}

?>