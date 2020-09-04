<?php namespace App\Controllers;


use App\Controllers\MainController;
use App\Controllers\AuthController;
use App\Models\NotificationModel;
use App\Entities\NotificationEntity;
use App\Interfaces\InterfaceResource;

class NotificationController extends MainController implements InterfaceResource
{
    private $NotificationModel;
    private $NotificationEntity;
    private $AuthController;

    public function __construct(){
        helper("URL");
        $this->NotificationModel        = new NotificationModel();
        $this->NotificationEntity       = new NotificationEntity();
        $this->AuthController   = new AuthController();
    }

    public function index(){
        parent::loadViews('Notification', []);
    }


    public function new(){

    }

    public function create(){
        $data = $this->request->getPost();
        $this->NotificationEntity->fill($data);
        $this->NotificationEntity->Password = $this->AuthController->Encrypt($this->NotificationEntity->Password);
        $this->NotificationModel->insert($this->NotificationEntity);
        return redirect()->to(base_url()."/Home");
    }

    public function showAll(){
        return $this->NotificationModel->findAll();
    }

    public function show($id = null){
        return $this->NotificationModel->find($id);
    }

    public function edit($id = null){

    }

    public function update($id = null){
        $data = $this->request->getPost();
        $this->NotificationEntity->fill($data);
        $this->NotificationEntity->Password = $this->AuthController->Encrypt($this->NotificationEntity->Password);
        $this->NotificationModel->save($this->NotificationEntity);
        return redirect()->to(base_url()."/Home");
    }

    public function delete($id = null){
        $this->NotificationModel->delete($id);
    }
}


?>