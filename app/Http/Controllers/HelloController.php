<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HelloController extends Controller
{
    public function showHelloWorld(): View {
        $data = [
            'header' => 'OGUD NO COUNTER',
            'description' => 'KENALIN AKU LAKSAMANA CITA CITA KU JADI SULE'
        ];

        return view('hello-world', ['controller_data' => $data]);
    }
    
}
