<?php namespace App\Models;

use CodeIgniter\Model;

class ComplexModel extends Model 
{
    
    protected $table      = 'Complex';
    protected $primaryKey = 'idComplex';
    protected $returnType     = 'array';
    protected $skipValidation     = false;
    
    protected $allowedFields = [
        'Name',
        'Address',
        'Floor',
        'idCity'
    ];

    protected $validationRules    = [];

    protected $validationMessages = [];
    
}

?>