<?php 

class Food extends Product {

	private $title;
    private $description;
    private $image;

    public function __construct($title,$description,$image)
    {
        $this->name = $title;
        $this->name = $description;
        $this->name = $image;
    }


}

?>