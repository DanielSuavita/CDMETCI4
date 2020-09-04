<?php namespace App\Controllers;


use App\Controllers\MainController;
use App\Controllers\AuthController;
use App\Models\CenterModel;
use App\Entities\CenterEntity;
use App\Interfaces\InterfaceResource;

class CenterController extends MainController implements InterfaceResource
{
    private $CenterModel;
    private $CenterEntity;
    private $AuthController;

    public function __construct(){
        helper("URL");
        $this->CenterModel        = new CenterModel();
        $this->CenterEntity       = new CenterEntity();
        $this->AuthController   = new AuthController();
    }

    public function index(){
        parent::loadViews('Center', []);
    }


    public function new(){

    }

    public function create(){
        $data = $this->request->getPost();
        $this->CenterEntity->fill($data);
        $this->CenterEntity->Password = $this->AuthController->Encrypt($this->CenterEntity->Password);
        $this->CenterModel->insert($this->CenterEntity);
        return redirect()->to(base_url()."/Home");
    }

    public function showAll(){
        return $this->CenterModel->findAll();
    }

    public function show($id = null){
        return $this->CenterModel->find($id);
    }

    public function edit($id = null){

    }

    public function update($id = null){
        $data = $this->request->getPost();
        $this->CenterEntity->fill($data);
        $this->CenterEntity->Password = $this->AuthController->Encrypt($this->CenterEntity->Password);
        $this->CenterModel->save($this->CenterEntity);
        return redirect()->to(base_url()."/Home");
    }

    public function delete($id = null){
        $this->CenterModel->delete($id);
    }
}


?>