<?php namespace App\Controllers;

/**
 * Clase DashboardController
 * @version 1.0
 */

 use App\Controllers\MainController;
 use App\Controllers\AuthController;

class DashboardController extends MainController{

    private $session;
    private $AuthController;

    public function __construct() {
        parent::__construct();
        $this->session = session();
        $this->AuthController = new AuthController();
    }

    public function index(){
        if ($this->session->has('SessionData')) {
            parent::loadViews($this->session->Routing,[]);
        }else{
            return $this->AuthController->logout();
        }
    }

}


?>