<?php namespace App\Models;

use CodeIgniter\Model;

class ProgramModel extends Model 
{
    
    protected $table      = 'Program';
    protected $primaryKey = 'idProgram';
    protected $returnType     = 'array';
    protected $skipValidation     = false;
    
    protected $allowedFields = [
        'Name',
        'Description',
        'idCenter'
    ];

    protected $validationRules    = [];

    protected $validationMessages = [];
    
}

?>