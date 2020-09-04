<?php namespace App\Controllers;

use CodeIgniter\Controller;

class RoutesController extends Controller {
    
    protected $parser;

    protected function __construct(){
        $this->parser = \Config\Services::parser(); 
    }

    protected function loadViews($group = 'Home',$view = 'template', $data = null){
        echo $this->setParse($data, $group."/header");
        echo $this->setParse($data, $group.$view);
        echo $this->setParse($data, $group."/footer");
    }
    
    private function setParse(array $data = [], $template){
        return $this->parser->setData($data)->render($template);
    }

}

?>