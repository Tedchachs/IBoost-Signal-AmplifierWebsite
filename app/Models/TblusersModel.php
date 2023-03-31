<?php
namespace App\Models;
use CodeIgniter\Model;
use Config\Database;

class TblusersModel extends Model
{
    protected $table = 'tblusers';
    protected $allowedFields = [
        'firstname',
        'lastname',
        'email',
        'password'
    ];
    public function __construct()
    {
        parent::__construct();
        $db = \Config\Database::connect();
        $this->db = $db;
    }
    public function saveUser($data)
     {
        
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        $this->insert($data);
    }
}