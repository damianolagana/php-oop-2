
<?php 

class Category {
	public $name;
	public $description;
	public $icon;

    
	public function __construct($name, $icon= "fa-solid fa-dog")
    {
        $this->name = $name;
        $this->icon = $icon;

        
    }
	
}

?>


