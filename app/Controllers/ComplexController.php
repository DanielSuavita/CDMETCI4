<?php namespace App\Controllers;


use App\Controllers\MainController;
use App\Controllers\AuthController;
use App\Models\ComplexModel;
use App\Entities\ComplexEntity;
use App\Interfaces\InterfaceResource;

class ComplexController extends MainController implements InterfaceResource
{
    private $ComplexModel;
    private $ComplexEntity;
    private $AuthController;

    public function __construct(){
        helper("URL");
        $this->ComplexModel        = new ComplexModel();
        $this->ComplexEntity       = new ComplexEntity();
        $this->AuthController   = new AuthController();
    }

    public function index(){
        parent::loadViews('Complex', []);
    }


    public function new(){

    }

    public function create(){
        $data = $this->request->getPost();
        $this->ComplexEntity->fill($data);
        $this->ComplexEntity->Password = $this->AuthController->Encrypt($this->ComplexEntity->Password);
        $this->ComplexModel->insert($this->ComplexEntity);
        return redirect()->to(base_url()."/Home");
    }

    public function showAll(){
        return $this->ComplexModel->findAll();
    }

    public function show($id = null){
        return $this->ComplexModel->find($id);
    }

    public function edit($id = null){

    }

    public function update($id = null){
        $data = $this->request->getPost();
        $this->ComplexEntity->fill($data);
        $this->ComplexEntity->Password = $this->AuthController->Encrypt($this->ComplexEntity->Password);
        $this->ComplexModel->save($this->ComplexEntity);
        return redirect()->to(base_url()."/Home");
    }

    public function delete($id = null){
        $this->ComplexModel->delete($id);
    }
}


?>