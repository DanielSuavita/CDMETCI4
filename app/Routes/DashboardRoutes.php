<?php namespace App\Routes;

/**
 * Clase DashboardController
 * @version 1.0
 */

 use App\Controllers\RoutesController;

class DashboardRoutes extends RoutesController{

    // private $session;
    // private $AuthController;

    public function __construct() {
        parent::__construct();
        $this->session = session();
    }

    public function index(){
        parent::loadViews($this->session->Routing,'/Dashboard',[]);
    }

    public function Dashboard(){
        parent::loadViews($this->session->Routing,'/Dashboard',[]);
    }

    public function ActivationToken(){
        parent::loadViews('Home','/ActivationToken',[]);
    }

}


?>