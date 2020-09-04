<?php namespace App\Controllers;

/**
 * clase AuthController
 *  @version 1.1
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
    private $Session;

    /**
     * @method __construct
     * @version 1.0
     */
    public function __construct() {
        helper("URL");
        $this->UserModel    = new UserModel();
        $this->UserEntity   = new UserEntity();
        $this->Session = session();
    }

    /**
     * @method Encrypt
     * @version 1.0
     */

    public function Encrypt($Text = ''){
        return password_hash($Text, PASSWORD_DEFAULT);
    }

    /**
     * @method login
     * @version 1.1
     */
    public function login(){
        $data = $this->request->getPost();
        $this->UserEntity->fill($data);
        if ($this->validateUser($this->UserEntity->Email,$this->UserEntity->Password)) {
            $this->setSessionData($this->UserEntity->Email,$this->UserEntity->Password);
            return redirect()->to(base_url().'/'.$this->Session->Routing);
        }else{
            return $this->logout();
        }
    }

    /**
     * @method logout
     * @version 1.0
     */
    public function logout(){
        $this->Session->remove('SessionData');
        $this->Session->destroy();

        return redirect()->to(base_url()."/Home");
    }

    /**
     * @method setSessionData
     * @version 1.0
     */
    private function setSessionData($User,$Password){
        $sessiondata = [
            'State'             => '1',
            'ConnectionDate'    => Date('Y-m-d'),
        ];
        $routing = $this->SelectUserRole($User,$Password);
        $this->Session->set('SessionData', $sessiondata);
        $this->Session->set('Routing',     $routing);
    }

    /**
     * @method validateUser
     * @version 1.2
     */
    private function validateUser($User, $Password){

        $stmt1 = "CALL VALIDATEPASSWORDSELECT('$User');";
        $query = $this->UserModel->query($stmt1);
        $row = $query->getRow()->Password;

        if (password_verify($Password, $row)) {
            return $query->getRow();
        }else{
            return null;
        }
    }

    /**
     * @method SelectUserRole
     * @version 1.1
     */
    private function SelectUserRole($User,$Password){

        $this->UserEntity = $this->validateUser($User,$Password);
        if (isset($this->UserEntity->idUserRole)) {

            switch ($this->UserEntity->idUserRole) {
    
                case '1': return "Aprendiz";    break;
                case '2': return "Directive";   break;
                case '3': return "Coordinator"; break;
                case '4': return "Leader";      break;
                case '5': return "Leader";      break;
                case '6': return "Subdirector"; break;
                case '7': return "Admin";       break;
                
                default:
                    return $this->logout();
                break;
            }
        }else{
            return $this->logout();
        }
    }

}


?>