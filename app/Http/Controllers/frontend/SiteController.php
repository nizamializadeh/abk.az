<?php

namespace App\Http\Controllers\frontend;

use App\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;


class SiteController extends Controller
{
    public function index()
    {

    }
    public function about()
    {
        $about =About::findorfail(1);
        return view('frontend.about',compact('about'));
    }
    public function fag()
    {

    }
    public function mail(Request $request)
    {
        Mail::send(['text'=>'frontend.mail'],['name','Nizami'],function($message){
            $message->to('anizami.p102@code.edu.az','to NIzami')->subject('Test');
            $message->from('anizami.p102@code.edu.az','ef');
        });
        return back();
    }
}
