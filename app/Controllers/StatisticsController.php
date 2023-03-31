<?php

namespace App\Controllers;

use App\Models\ChafusersModel;
use CodeIgniter\Controller;

class StatisticsController extends BaseController
{
    protected $chafusersModel;

    public function __construct()
    {
        $this->chafusersModel = new ChafusersModel();
    }

    public function index()
    {
        $data=[
            'title'=> 'Statistics',
            "chafusers"=> $this->chafusersModel->getChafusers(),
        ];
        
        return view('Statistics', $data);
    }
}