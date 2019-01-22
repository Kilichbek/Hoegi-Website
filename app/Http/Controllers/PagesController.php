<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        $title = 'Hoegi Dawah Center';

        return view('front-end.index')->with('title',$title);
    }

    public function contact(){

        $title = 'About Us';

        return view('front-end.contact')->with('title',$title);
    }

    public function services(){

        $data = array(
            'title' => 'Services',
            'services' => ['Shahada', 'Medical Treatement', 'Legal Services']
        );

        return view('front-end.services')->with('data',$data);
    }
}
