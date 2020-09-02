<?php namespace App\Controllers;

use CodeIgniter\Controller;

class MainController extends Controller {
    
    protected $parser;

    protected function __construct(){
        $this->parser = \Config\Services::parser();
    }

    protected function loadViews($view = 'template', $data = null){
        echo view("includes/headers/header");
        echo $this->setParse($data, $view);
        echo view("includes/footers/footer");
    }
    
    private function setParse(array $data = [], $template){
        return $this->parser->setData($data)->render($template);
    }

}

?>