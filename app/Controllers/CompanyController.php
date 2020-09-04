<?php namespace App\Controllers;


use App\Controllers\MainController;
use App\Controllers\AuthController;
use App\Models\CompanyModel;
use App\Entities\CompanyEntity;
use App\Interfaces\InterfaceResource;

class CompanyController extends MainController implements InterfaceResource
{
    private $CompanyModel;
    private $CompanyEntity;
    private $AuthController;

    public function __construct(){
        helper("URL");
        $this->CompanyModel        = new CompanyModel();
        $this->CompanyEntity       = new CompanyEntity();
        $this->AuthController   = new AuthController();
    }

    public function index(){
        parent::loadViews('Company', []);
    }


    public function new(){

    }

    public function create(){
        $data = $this->request->getPost();
        $this->CompanyEntity->fill($data);
        $this->CompanyEntity->Password = $this->AuthController->Encrypt($this->CompanyEntity->Password);
        $this->CompanyModel->insert($this->CompanyEntity);
        return redirect()->to(base_url()."/Home");
    }

    public function showAll(){
        return $this->CompanyModel->findAll();
    }

    public function show($id = null){
        return $this->CompanyModel->find($id);
    }

    public function edit($id = null){

    }

    public function update($id = null){
        $data = $this->request->getPost();
        $this->CompanyEntity->fill($data);
        $this->CompanyEntity->Password = $this->AuthController->Encrypt($this->CompanyEntity->Password);
        $this->CompanyModel->save($this->CompanyEntity);
        return redirect()->to(base_url()."/Home");
    }

    public function delete($id = null){
        $this->CompanyModel->delete($id);
    }
}


?>