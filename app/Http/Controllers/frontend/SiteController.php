<?php

namespace App\Http\Controllers\frontend;

use App\About;
use App\Callme;
use App\Slider;
use App\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;


class SiteController extends Controller
{
    public function index()
    {
        $testimonials =Testimonial::all();
        $sliders=Slider::all();
        $number=About::first();
        return view('frontend.index',compact('sliders','testimonials','number'));
    }
    public function about()
    {
        $about =About::findorfail(1);
        $number=About::first();
        return view('frontend.about',compact('about','number'));
    }
    public function fag()
    {
        $number=About::first();
        return view('frontend.fag',compact('number'));
    }
//    public function call(Request $request,Callme $callme)
//    {
//        $callme->name=$request->name;
//        $callme->phone=$request->phone;
//        $callme->save();
//
//        return back();
//    }

    public function mail(Request $request)
    {

        $data = array('name'=>"$request->name", "surname" => $request->surname,"email" => $request->email, "phone" => $request->phone, "age" => $request->age,"city" => $request->city);
        if ($data!=null){
        Mail::send('frontend.mail', $data, function($message) {
            $message->to('anizami.p102@code.edu.az', '')
                ->subject('register ');
            $message->from('anizami.p102@code.edu.az','abk.aza');
        });
        }
        return back();
    }
    public function call(Request $request)
    {
        $data = array('name'=>"$request->name",  "phone" => $request->phone);
        if ($data!=null)
        {
            Mail::send('frontend.callme', $data, function($message) {
                $message->to('anizami.p102@code.edu.az', '')
                    ->subject('callme ');
                $message->from('anizami.p102@code.edu.az','abk.aza');
            });
        }
        return back();
    }
}
