<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{

    protected $table      = 'users';
    protected $primaryKey = 'idUser';
    protected $returnType     = 'array';
    protected $skipValidation     = false;
    
    protected $allowedFields = [
        'Name', 
        'Email',
        'Address',
        'Password',
        'Cellphone',
        'idUserRole',
        'idCity'
    ];

    protected $validationRules    = [
        'Name'          => 'required|min_length[3]',
        'Email'         => 'required|valid_email|is_unique[users.email]',
        'Address'       => 'required',
        'Password'      => 'required',
        'Cellphone'     => 'required',
        'idUserRole'    => 'required',
        'idCity'        => 'required'
    ];

    protected $validationMessages = [
        'Name' => [
            'required'   => 'El nombre es requerido.',
            'min_length' => 'Deben ser al menos 3 Caracteres.',
        ],
        'Email'       => [
            'required' => 'El correo es requerido.'
        ],
        'Address'       => [
            'required' => 'la dirección es requerida.'
        ],
        'Password'      => [
            'required' => 'La contraseña es requerida.'
        ],
        'Cellphone'     => [
            'required' => 'El teléfono es requerido.'
        ],
        'idUserRole'    => [
            'required' => 'Elige un rol.'
        ],
        'idCity'        => [
            'required' => 'Elige una ciudad.'
        ]
    ];
    

}


?>