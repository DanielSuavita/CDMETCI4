<?php namespace App\Controllers;

/**
 * clase AuthController
 *  @version 1.0
 *  @var $UserModel
 *  @var $UserEntity
 */

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Entities\UserEntity;

class AuthController extends Controller 
{
    private $UserModel;
    private $UserEntity;

    /**
     * @method __construct
     * @version 1.0
     */
    public function __construct() {
        helper("URL");
        $this->UserModel    = new UserModel();
        $this->UserEntity   = new UserEntity();
    }

    /**
     * @method login
     * @version 1.0
     */
    public function login(){
        $data = $this->request->getPost();
        $this->UserEntity->fill($data);

        if ($this->validateUser($this->UserEntity->Email,$this->UserEntity->Password)) {
            $this->setSessionData();
            return redirect()->to(base_url()."/Dashboard");
        }else{
            return $this->logout();
        }
    }

    /**
     * @method logout
     * @version 1.0
     */
    public function logout(){
        $session = session();
        $session->remove('SessionData');
        $session->destroy();

        return redirect()->to(base_url()."/Home");
    }

    /**
     * @method setSessionData
     * @version 1.0
     */
    private function setSessionData(){
        $session = session();
        $sessiondata = [
            'State'             => '1',
            'ConnectionDate'    => Date('Y-m-d'),
        ];
        $routing = $this->SelectUserRole($this->UserEntity->Email,$this->UserEntity->Password);
        $session->set('SessionData', $sessiondata);
        $session->set('Routing',     $routing);
    }

    /**
     * @method validateUser
     * @version 1.0
     */
    private function validateUser($User,$Password){
        $stmt1 = "CALL LOGINUSERSELECT ('".$User."','".$Password."',@User); ";
        $stmt2 = "SELECT @User AS idUserRole";

        $this->UserModel->transStart();
        $this->UserModel->query($stmt1);
        $query = $this->UserModel->query($stmt2)->getRow();
        $this->UserModel->transComplete();

        return $query->idUserRole != '';
    }

    /**
     * @method SelectUserRole
     * @version 1.0
     */
    private function SelectUserRole($User,$Password){

        $stmt1 = "CALL LOGINUSERSELECT ('".$User."','".$Password."',@User); ";
        $stmt2 = "SELECT @User AS idUserRole";

        $this->UserModel->transStart();
        $this->UserModel->query($stmt1);
        $query = $this->UserModel->query($stmt2);
        $this->UserModel->transComplete();

        $this->UserEntity = $query->getRow();
        switch ($this->UserEntity->idUserRole) {

            case '1': return "Aprendiz/Dashboard";    break;
            case '2': return "Directive/Dashboard";   break;
            case '3': return "Coordinator/Dashboard"; break;
            case '4': return "Leader/Dashboard";      break;
            case '5': return "Leader/Dashboard";      break;
            case '6': return "Subdirector/Dashboard"; break;
            case '7': return "Admin/Dashboard";       break;
            
            default:
                return $this->logout();
                break;
        }
    }



}


?>