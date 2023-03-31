<?php
namespace App\Controllers;
use App\models\TblusersModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;


class Signin extends BaseController
{
    public function save()
    {
        //lets validate requests
        $validation=$this->validate
        (
            [
                'email'=>'required|valid_email|is_unique[tblusers.email]',
                'password'=>'required|min_length[8]|max_length[12]',
                'confirmpassword'=>'required|min_length[8]|max_length[12]|matches[password]',
            ]
        );
    }
	public function index()
	{
		helper(['form']);
		echo view('/signin');
	}
	public function login()
    {
        $request = \Config\Services::request();
        $session = session();
        $tblusersModel = new TblusersModel();
        $email = $request->getPost('email');
        $password = $request->getPost('password');
        
        $data = $tblusersModel->where('email', $email)->first();
        
        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id' => $data['id'],
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/profile');
            
            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('signin');
            }
        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('signin');
        }
    }
}

