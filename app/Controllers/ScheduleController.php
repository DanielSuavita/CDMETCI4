<?php namespace App\Controllers;


use App\Controllers\MainController;
use App\Controllers\AuthController;
use App\Models\ScheduleModel;
use App\Entities\ScheduleEntity;
use App\Interfaces\InterfaceResource;

class ScheduleController extends MainController implements InterfaceResource
{
    private $ScheduleModel;
    private $ScheduleEntity;
    private $AuthController;

    public function __construct(){
        helper("URL");
        $this->ScheduleModel        = new ScheduleModel();
        $this->ScheduleEntity       = new ScheduleEntity();
        $this->AuthController   = new AuthController();
    }

    public function index(){
        parent::loadViews('Schedule', []);
    }


    public function new(){

    }

    public function create(){
        $data = $this->request->getPost();
        $this->ScheduleEntity->fill($data);
        $this->ScheduleEntity->Password = $this->AuthController->Encrypt($this->ScheduleEntity->Password);
        $this->ScheduleModel->insert($this->ScheduleEntity);
        return redirect()->to(base_url()."/Home");
    }

    public function showAll(){
        return $this->ScheduleModel->findAll();
    }

    public function show($id = null){
        return $this->ScheduleModel->find($id);
    }

    public function edit($id = null){

    }

    public function update($id = null){
        $data = $this->request->getPost();
        $this->ScheduleEntity->fill($data);
        $this->ScheduleEntity->Password = $this->AuthController->Encrypt($this->ScheduleEntity->Password);
        $this->ScheduleModel->save($this->ScheduleEntity);
        return redirect()->to(base_url()."/Home");
    }

    public function delete($id = null){
        $this->ScheduleModel->delete($id);
    }
}


?>