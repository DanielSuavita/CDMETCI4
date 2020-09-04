<?php namespace App\Controllers;


use App\Controllers\MainController;
use App\Controllers\AuthController;
use App\Models\ProgramModel;
use App\Entities\ProgramEntity;
use App\Interfaces\InterfaceResource;

class ProgramController extends MainController implements InterfaceResource
{
    private $ProgramModel;
    private $ProgramEntity;
    private $AuthController;

    public function __construct(){
        helper("URL");
        $this->ProgramModel        = new ProgramModel();
        $this->ProgramEntity       = new ProgramEntity();
        $this->AuthController   = new AuthController();
    }

    public function index(){
        parent::loadViews('Program', []);
    }


    public function new(){

    }

    public function create(){
        $data = $this->request->getPost();
        $this->ProgramEntity->fill($data);
        $this->ProgramEntity->Password = $this->AuthController->Encrypt($this->ProgramEntity->Password);
        $this->ProgramModel->insert($this->ProgramEntity);
        return redirect()->to(base_url()."/Home");
    }

    public function showAll(){
        return $this->ProgramModel->findAll();
    }

    public function show($id = null){
        return $this->ProgramModel->find($id);
    }

    public function edit($id = null){

    }

    public function update($id = null){
        $data = $this->request->getPost();
        $this->ProgramEntity->fill($data);
        $this->ProgramEntity->Password = $this->AuthController->Encrypt($this->ProgramEntity->Password);
        $this->ProgramModel->save($this->ProgramEntity);
        return redirect()->to(base_url()."/Home");
    }

    public function delete($id = null){
        $this->ProgramModel->delete($id);
    }
}


?>