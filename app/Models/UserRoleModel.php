<?php namespace App\Models;

use CodeIgniter\Model;

class UserRoleModel extends Model 
{
    
    protected $table      = 'UserRole';
    protected $primaryKey = 'idUserRole';
    protected $returnType     = 'array';
    protected $skipValidation     = false;
    
    protected $allowedFields = [
        'Name'
    ];

    protected $validationRules    = [];

    protected $validationMessages = [];
    
}

?>