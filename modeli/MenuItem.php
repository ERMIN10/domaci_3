<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "./domaci_3/interfejsi/Renderable.php";



class MenuItem implements Renderable
{
    private $label;
private $pageName;
private $params; 

  public function __construct($label, $pageName, $params)
    {
       $this->label = $label;
       $this->pageName = $pagenName;
       $this->params = $params;

    }

    public function render(): string
    {
        $href = $this->generateHref($this->pageName, $this->params);
       $html = "<a href='" . $href . "' > " . $this->label ."</a>";
       return $html;

    }

    function generateHref($pageName, $params) {
        return 'href = " ' . $pageName . '/?' . generateUrlQuery($params) . ' "';
    }
  
}



?>