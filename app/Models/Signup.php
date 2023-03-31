<?php
namespace App\Models;

class BaseModel
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }
}

class TblusersModel extends BaseModel
{
    protected $DBGroup = 'default';
    protected $table = 'tblusers';
    protected $allowedFields = ['firstname', 'lastname', 'email', 'password'];

    public function index(
        $fname,
        $lname,
        $emailid,
        $password)
    {
        $data = [
            'FirstName' => $fname,
            'LastName' => $lname,
            'Email' => $emailid,
            'Password' => $password
        ];

        $query = $this->db->table('tblusers')->insert($data);

        if ($query) {
            session()->setFlashdata('success', 'Registration successful, Now you can login.');
            return redirect()->to('/signin');
        } else {
            session()->setFlashdata('error', 'Something went wrong. Please try again.');
            return redirect()->to('/signup');
        }
    }
}