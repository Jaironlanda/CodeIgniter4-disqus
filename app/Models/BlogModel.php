<?php namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table      = 'blog';
    protected $primaryKey = 'blog_id';

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['title','content'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}
