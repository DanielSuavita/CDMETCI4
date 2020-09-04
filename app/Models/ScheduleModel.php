<?php namespace App\Models;

use CodeIgniter\Model;

class ScheduleModel extends Model 
{
    
    protected $table      = 'Schedule';
    protected $primaryKey = 'idSchedule';
    protected $returnType     = 'array';
    protected $skipValidation     = false;
    
    protected $allowedFields = [
        'idUsers'
    ];

    protected $validationRules    = [];

    protected $validationMessages = [];
    
}

?>