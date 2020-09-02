<?php namespace App\Controllers;

/**
 * Clase CountryController
 * @version 1.0
 */

use App\Interfaces\InterfaceResource;
use App\Models\CountryModel;
use App\Entities\CountryEntity;

class CountryController extends MainController implements InterfaceResource
{

    private $CountryModel;
    private $CountryEntity;

    public function __construct() {
        $this->CountryModel = new CountryModel();
        $this->CountryEntity = new CountryEntity();
    }

    public function index(){
        
    }

    public function new(){
        
    }

    public function create(){
        $data = $this->request->getPost();
        $this->CountryEntity->fill($data);
        $this->CountryModel->insert($this->CountryEntity);
        return redirect()->to(base_url()."/Home");
    }

    public function showAll(){
        return $this->CountryModel->findAll();
    }

    public function show($id = null){
        
    }

    public function edit($id = null){
        
    }

    public function update($id = null){
        $data = $this->request->getPost();
        $this->CountryEntity->fill($data);
        $this->CountryModel->save($this->CountryEntity);
        return redirect()->to(base_url()."/Home");
    }

    public function delete($id = null){
        $this->CountryModel->delete($id);
    }
}


?>