<?php namespace App\Models;

use CodeIgniter\Model;

class FileModel extends Model{

    protected $table            = 'Posts';
    protected $TableId          = 'IDPosts';
    protected $ReturnType       = 'array';
    protected $UseSoftDeletes   = true;
    protected $allowedFields    = [];

}


?>