<?php namespace App\Models;

use CodeIgniter\Model;

class CountryModel extends Model 
{
    
    protected $table      = 'Country';
    protected $primaryKey = 'idCountry';
    protected $returnType     = 'array';
    protected $skipValidation     = false;
    
    protected $allowedFields = [
        'Name'
    ];

    protected $validationRules    = [];

    protected $validationMessages = [];
    
}

?>