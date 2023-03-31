<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class MapController extends BaseController
{
    
    public function index()
    {
        $data = [
            'title' => 'Map',
            'page' => 'map',
        ];
        return view('map',$data);
    }
    


}
