<?php namespace App\Controllers;

/**
 * Class UserRolesController
 * 
 */

 use App\Controllers\MainController;
 use App\Models\UserRoleModel;

class UserRolesController extends MainController
{
    public $UserRoleModel;

    public function __construct() {
        $this->UserRoleModel = new UserRoleModel();
    }
    
    public function index(){

    }

    public function new(){

    }

    public function create(){

    }

    public function showAll(){
        return $this->UserRoleModel->findAll();
    }

    public function show($id = null){
        
    }

    public function edit($id = null){

    }

    public function update($id = null){

    }

    public function delete($id = null){

    }

}

?>

