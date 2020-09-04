<?php namespace App\Models;

use CodeIgniter\Model;

class ProgramTokenModel extends Model 
{
    
    protected $table      = 'ProgramToken';
    protected $primaryKey = 'idProgramToken';
    protected $returnType     = 'array';
    protected $skipValidation     = false;
    
    protected $allowedFields = [
        'Token',
        'idProgram'
    ];

    protected $validationRules    = [];

    protected $validationMessages = [];
    
}

?>