<?php namespace App\Models;

use CodeIgniter\Model;

class CompanyBranchModel extends Model 
{
    
    protected $table      = 'CompanyBranch';
    protected $primaryKey = 'idCompanyBranch';
    protected $returnType     = 'array';
    protected $skipValidation     = false;
    
    protected $allowedFields = [
        'Address',
        'idCompany'
    ];

    protected $validationRules    = [];

    protected $validationMessages = [];
    
}

?>