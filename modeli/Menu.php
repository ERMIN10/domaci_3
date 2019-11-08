<?php
require_once "./MenuItem.php";
class Menu implements Renderable{
    private $items;

    public function __construct() 
    {
        $page1 = new MenuItem("Page1" );
        $page2 = new MenuItem("Page2" );
        $homepage = new MenuItem("Homepage");
        $this->items = [$page1, $page2, $homepage];
        
    }

    public function render():string

    {
        $list = "<ul>";
        
        return $list;
    }
}



?>