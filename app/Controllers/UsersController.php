<?php namespace App\Controllers;


use App\Controllers\MainController;
use App\Controllers\AuthController;
use App\Models\UserModel;
use App\Entities\UserEntity;
use App\Interfaces\InterfaceResource;

class UsersController extends MainController implements InterfaceResource
{
    private $UserModel;
    private $UserEntity;
    private $AuthController;

    public function __construct(){
        helper("URL");
        $this->UserModel        = new UserModel();
        $this->UserEntity       = new UserEntity();
        $this->AuthController   = new AuthController();
    }

    public function index(){
        parent::loadViews('User', []);
    }


    public function new(){

    }

    public function create(){
        $data = $this->request->getPost();
        $this->UserEntity->fill($data);
        $this->UserEntity->Password = $this->AuthController->Encrypt($this->UserEntity->Password);
        $this->UserModel->insert($this->UserEntity);
        return redirect()->to(base_url()."/Home");
    }

    public function showAll(){
        return $this->UserModel->findAll();
    }

    public function show($id = null){
        return $this->UserModel->find($id);
    }

    public function edit($id = null){

    }

    public function update($id = null){
        $data = $this->request->getPost();
        $this->UserEntity->fill($data);
        $this->UserEntity->Password = $this->AuthController->Encrypt($this->UserEntity->Password);
        $this->UserModel->save($this->UserEntity);
        return redirect()->to(base_url()."/Home");
    }

    public function delete($id = null){
        $this->UserModel->delete($id);
    }
}


?>