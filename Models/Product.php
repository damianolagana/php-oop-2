<?php 

class Product {
	public $name;
	public $price;
    public $type;
    public $category;

    public function __construct($name,$price,$type, Category $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
        $this->category = $category;
        
    }
	
}

?>