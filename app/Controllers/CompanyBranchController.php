<?php namespace App\Controllers;


use App\Controllers\MainController;
use App\Controllers\AuthController;
use App\Models\CompanyBranchModel;
use App\Entities\CompanyBranchEntity;
use App\Interfaces\InterfaceResource;

class CompanyBranchController extends MainController implements InterfaceResource
{
    private $CompanyBranchModel;
    private $CompanyBranchEntity;
    private $AuthController;

    public function __construct(){
        helper("URL");
        $this->CompanyBranchModel        = new CompanyBranchModel();
        $this->CompanyBranchEntity       = new CompanyBranchEntity();
        $this->AuthController   = new AuthController();
    }

    public function index(){
        parent::loadViews('CompanyBranch', []);
    }


    public function new(){

    }

    public function create(){
        $data = $this->request->getPost();
        $this->CompanyBranchEntity->fill($data);
        $this->CompanyBranchEntity->Password = $this->AuthController->Encrypt($this->CompanyBranchEntity->Password);
        $this->CompanyBranchModel->insert($this->CompanyBranchEntity);
        return redirect()->to(base_url()."/Home");
    }

    public function showAll(){
        return $this->CompanyBranchModel->findAll();
    }

    public function show($id = null){
        return $this->CompanyBranchModel->find($id);
    }

    public function edit($id = null){

    }

    public function update($id = null){
        $data = $this->request->getPost();
        $this->CompanyBranchEntity->fill($data);
        $this->CompanyBranchEntity->Password = $this->AuthController->Encrypt($this->CompanyBranchEntity->Password);
        $this->CompanyBranchModel->save($this->CompanyBranchEntity);
        return redirect()->to(base_url()."/Home");
    }

    public function delete($id = null){
        $this->CompanyBranchModel->delete($id);
    }
}


?>