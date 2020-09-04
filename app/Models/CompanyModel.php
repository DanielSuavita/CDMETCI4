<?php namespace App\Models;

use CodeIgniter\Model;

class CompanyModel extends Model 
{
    
    protected $table      = 'Company';
    protected $primaryKey = 'idCompany';
    protected $returnType     = 'array';
    protected $skipValidation     = false;
    
    protected $allowedFields = [
        'Name',
        'idCity'
    ];

    protected $validationRules    = [];

    protected $validationMessages = [];
    
}

?>