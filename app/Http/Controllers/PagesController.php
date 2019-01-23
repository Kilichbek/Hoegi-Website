<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;

class PagesController extends Controller
{
    public function index(){

        $title = 'Hoegi Dawah Center';

        return view('front-end.index')->with('title',$title);
    }

    public function getContact(){

        $title = 'About Us';

        return view('front-end.contact')->with('title',$title);
    }

    public function postContact(Request $request){

        $this->validate($request,[
            'email' => 'required|email',
            'message' => 'min:10',
            'subject' => 'min:5'
            ]);

        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'body_message' => $request->message
        );

        Mail::send('contact',$data,function ($message) use ($data){
            $message->from($data['email']);
            $message->to('afafc3a369-c7c7b6@inbox.mailtrap.io');
            $message->subject($data['subject']);
        });

        Session::flash('success','Your Email was Sent!');

        return redirect('/');
    }

    public function services(){

        $data = array(
            'title' => 'Services',
            'services' => ['Shahada', 'Medical Treatement', 'Legal Services']
        );

        return view('front-end.services')->with('data',$data);
    }
}
