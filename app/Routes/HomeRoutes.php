<?php namespace App\Routes;

use App\Controllers\RoutesController;
use App\Controllers\UserRolesController;
use App\Controllers\CountryController;
use App\Controllers\CityController;

class HomeRoutes extends RoutesController {

    private $UserRolesController;
    private $CountryController;
    private $CityController;

    public function __construct() {
        parent::__construct();
        $this->UserRolesController  = new UserRolesController();
        $this->CountryController    = new CountryController();
        $this->CityController       = new CityController();
    }

    public function index(){
        $data["UserRoles"] = $this->UserRolesController->showAll();
        parent::loadViews('Home','/home', $data);
    }

    public function SignUp(){
        $data["UserRoles"] = $this->UserRolesController->showAll();
        $data["Countries"] = $this->CountryController->showAll();
        $data["Cities"]    = $this->CityController->showAll();
        parent::loadViews('Home','/SignUp', $data);
    }

    public function ProductiveStage(){
        parent::loadViews('Home','/ProductiveStage', []);
    }

    public function CenterPrograms(){
        parent::loadViews('Home','/CenterPrograms', []);
    }

    public function QA(){
        parent::loadViews('Home','/QA', []);
    }
}


?>