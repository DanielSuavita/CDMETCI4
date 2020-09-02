<?php namespace App\Controllers;

/**
 * Clase CityController
 * @version 1.0
 */

use App\Interfaces\InterfaceResource;
use App\Models\CityModel;
USE App\Entities\CityEntity;

class CityController extends MainController implements InterfaceResource
{

    private $CityModel;
    private $CityEntity;

    public function __construct() {
        $this->CityModel    = new CityModel();
        $this->CityEntity   = new CityEntity();
    }

    public function index(){
        
    }

    public function new(){
        
    }

    public function create(){
        $data = $this->request->getPost();
        $this->CityEntity->fill($data);
        $this->CityModel->insert($this->CityEntity);
        return redirect()->to(base_url()."/Home");
    }

    public function showAll(){
        return $this->CityModel->findAll();
    }

    public function show($id = null){
        return $this->CityModel->query("CALL  COUNTRYCITYSELECT (".$id.")");
    }

    public function edit($id = null){
        
    }

    public function update($id = null){
        $data = $this->request->getPost();
        $this->CityEntity->fill($data);
        $this->CityModel->save($this->CityEntity);
        return redirect()->to(base_url()."/Home");
    }

    public function delete($id = null){
        $this->CityModel->delete($id);
    }
}


?>