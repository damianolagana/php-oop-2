<?php 

class Food extends Product {

	public $title;
    public $description;
    public $image;

    public function __construct($title,$description,$image)
    {
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
    }


}

?>