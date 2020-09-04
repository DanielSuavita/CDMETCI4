<?php namespace App\Controllers;


use App\Controllers\MainController;
use App\Controllers\AuthController;
use App\Models\ProgramTokenModel;
use App\Entities\ProgramTokenEntity;
use App\Interfaces\InterfaceResource;

class ProgramTokenController extends MainController implements InterfaceResource
{
    private $ProgramTokenModel;
    private $ProgramTokenEntity;
    private $AuthController;

    public function __construct(){
        helper("URL");
        $this->ProgramTokenModel        = new ProgramTokenModel();
        $this->ProgramTokenEntity       = new ProgramTokenEntity();
        $this->AuthController   = new AuthController();
    }

    public function index(){
        parent::loadViews('ProgramToken', []);
    }


    public function new(){

    }

    public function create(){
        $data = $this->request->getPost();
        $this->ProgramTokenEntity->fill($data);
        $this->ProgramTokenEntity->Password = $this->AuthController->Encrypt($this->ProgramTokenEntity->Password);
        $this->ProgramTokenModel->insert($this->ProgramTokenEntity);
        return redirect()->to(base_url()."/Home");
    }

    public function showAll(){
        return $this->ProgramTokenModel->findAll();
    }

    public function show($id = null){
        return $this->ProgramTokenModel->find($id);
    }

    public function edit($id = null){

    }

    public function update($id = null){
        $data = $this->request->getPost();
        $this->ProgramTokenEntity->fill($data);
        $this->ProgramTokenEntity->Password = $this->AuthController->Encrypt($this->ProgramTokenEntity->Password);
        $this->ProgramTokenModel->save($this->ProgramTokenEntity);
        return redirect()->to(base_url()."/Home");
    }

    public function delete($id = null){
        $this->ProgramTokenModel->delete($id);
    }
}


?>