<?php namespace App\Models;

use CodeIgniter\Model;

class CityModel extends Model 
{
    
    protected $table      = 'City';
    protected $primaryKey = 'idCity';
    protected $returnType     = 'array';
    protected $skipValidation     = false;
    
    protected $allowedFields = [
        'Name',
        'idCountry'
    ];

    protected $validationRules    = [];

    protected $validationMessages = [];
    
}

?>