<?php namespace App\Models;

use CodeIgniter\Model;

class CenterModel extends Model 
{
    
    protected $table      = 'Center';
    protected $primaryKey = 'idCenter';
    protected $returnType     = 'array';
    protected $skipValidation     = false;
    
    protected $allowedFields = [
        'Name',
        'idComplex'
    ];

    protected $validationRules    = [];

    protected $validationMessages = [];
    
}

?>