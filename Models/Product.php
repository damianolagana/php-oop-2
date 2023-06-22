<?php 

class Product {
	public $name;
	public $price;
    public $available;
    public $quantity;
    public $image;
    public $category;



    public function __construct($name,$price,$available, $quantity,$image,Category $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->available = $available;
        $this->quantity = $quantity;
        $this->image = $image;
        $this->category = $category;
        
        
    }
	
}

?>