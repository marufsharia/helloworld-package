<?php

namespace Marufsharia\Helloworld\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class HelloworldController extends Controller
{
    public function add($a, $b)
    {
        $data['result'] = $a + $b;
       return view('helloview::add',$data);
    }            
}
