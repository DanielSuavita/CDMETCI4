<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use App\Controllers\AuthController;

/**
 * Clase SessionFilter
 * @version 1.0
 * 
 */
class SessionFilter implements FilterInterface{

    private $session;
    private $AuthController;

    public function __construct() {
        $this->session = session();
        $this->AuthController = new AuthController();
    }

    public function before(RequestInterface $request, $arguments = null){
        if (!$this->session->has('SessionData')) {
            return $this->AuthController->logout();
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null){
        
    }

}



?>