<?php namespace App\Routes;

/**
 * Clase DashboardController
 * @version 1.0
 */

 use App\Controllers\RoutesController;

class CoordinatorRoutes extends RoutesController{

    // private $session;
    // private $AuthController;

    public function __construct() {
        parent::__construct();
        $this->session = session();
    }

    public function index(){
        parent::loadViews($this->session->Routing,'/Dashboard',[]);
    }

    public function AprendizEdit(){
        parent::loadViews($this->session->Routing,'/AprendizEdit',[]);
    }

    public function ProductiveStage(){
        parent::loadViews($this->session->Routing,'/ProductiveStage',[]);
    }

    public function QA(){
        parent::loadViews($this->session->Routing,'/QA',[]);
    }

    public function ActivationToken(){
        parent::loadViews('Home','/ActivationToken',[]);
    }

}


?>