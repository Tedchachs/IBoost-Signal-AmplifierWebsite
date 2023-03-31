<?php
namespace App\Controllers;
use App\Models\TblusersModel;
use CodeIgniter\HTTP\Request;
use CodeIgniter\Controllers;
use CodeIgniter\HTTP\RequestInterface;

class Signup extends BaseController
{
    public function index()
    {
        helper(['form']);
        echo view('/Signup');
    }

    public function save()
    {
        $request = \Config\Services::request();
        $data = [
            'firstname' => $request->getPost('firstname'),
            'lastname' => $request->getPost('lastname'),
            'email' => $request->getPost('email'),
            'password' => password_hash($request->getPost('password'), PASSWORD_DEFAULT)
        ];

        $tblusersModel = new TblusersModel();
        $query = $tblusersModel->saveUser($data);

        if (!$query) {
            return redirect()->back()->with('Failed', 'Try Again');
        } else {
            return redirect()->to('Signup')->with('You have Successfuly', 'Registered');
        }
    }

    public function store()
    {
        $request = \Config\Services::request();
        if ($request->getMethod() == 'post') {
            helper(['form']);
            $rules = [
                'firstname'        => 'required|min_length[4]|max_length[100]',
                'lastname'         => 'required|min_length[4]|max_length[100]',
                'email'            => 'required|min_length[8]|max_length[100]|valid_email|is_unique[users.email]',
                'password'         => 'required|min_length[8]|max_length[100]',
                'confirm password' => 'matches[password]'
            ];

            if ($this->validate($rules)) {
                $this->save();
                return redirect()->to('/signin');
            } else {
                $data['validation'] = $this->validator;
                echo view('signup', $data);
            }
        }
    }
}