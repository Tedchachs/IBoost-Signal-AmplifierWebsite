<?php
namespace App\Models;

use CodeIgniter\Model;

class SigninModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'tblusers';

    public function add($email, $password)
    {
        $data = [
            'Email' => $email,
            'Password' => $password,
        ];

        $query = $this->where($data);
        $login = $this->get();

        if (!empty($login)) {
            return $login->getRow();
        }

        return null;
    }
}
