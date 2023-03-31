<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;


class Logout extends BaseController
{
    public function index()
    {
        $request = \Config\Services::request();
        $session = session();
       // Unset user data from the session
        session()->remove('uid');
        session()->destroy();

        // Redirect the user to the Signin page
        return redirect()->to('signin');
    }
}