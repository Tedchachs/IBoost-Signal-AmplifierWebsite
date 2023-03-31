<?php

namespace App\Controllers;

use App\Models\ChafusersModel;
use CodeIgniter\Controller;

class MapController extends Controller
{
    
    public function index()
    {
        $map = new ChafusersModel();
        $data['chafusers'] = $map->findall();
        return view('map', $data);
    }


}
