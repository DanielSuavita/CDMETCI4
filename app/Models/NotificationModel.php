<?php namespace App\Models;

use CodeIgniter\Model;

class NotificationModel extends Model 
{
    
    protected $table      = 'NotificationLabel';
    protected $primaryKey = 'idNotificationLabel';
    protected $returnType     = 'array';
    protected $skipValidation     = false;
    
    protected $allowedFields = [
        'IDReceptor',
        'IDEmitter',
        'DateTimeNotification',
        'Message',
        'idUsers',
        'idNotificationReason'
    ];

    protected $validationRules    = [];

    protected $validationMessages = [];
    
}

?>