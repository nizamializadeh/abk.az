<?php

namespace App\Http\Controllers\backend;

use App\About;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = $this->getSettingsForTable();
        $abouts=About::all();
        return view('backend.about.index',compact('settings','abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        $settings = $this->getSettingsForForm();
        $settings['title'] = 'Edit about';
        return view('backend.about.edit',compact('about','settings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,About $about)
    {
        $file = $request->file('image');
        if ($request->hasFile('image')){
            $name = rand(). "." . $file->getClientOriginalExtension();
            $file->move(public_path('photo'), $name);
            $about->image = $name;
            $about->header = $request->header;
            $about->content = $request->contents;
            $about->number = $request->number;
            $about->update();
            $request->session()->flash(str_slug('Create testimonail','-'),'Testimonail created');
                    return back();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function getSettingsForTable()
    {
        return  [
            'title' => 'Abouts',
            'table' => 'about',
            'createButton' => [
                'text' => "Edit about",
                'url' => route('about.create')
            ],
            'columns' => [
                [
                    'label' => 'ID',
                ],
                [
                    'label' => 'photo',
                ]
                ,
                [
                    'label' => 'header',
                ]
                ,
                [
                    'label' => 'content',
                ]
                ,
                [
                    'label' => 'number',
                ]

            ],
        ];
    }

    private  function  getSettingsForForm()
    {
        return [
            'title' => 'Edit about',
            'flashSessionKey' => 'about',
            'flashSessionValue' => 'About edit',
            'backButton' => [
                'text' => "Back",
                'url' => route('about.index')
            ]
        ];
    }

}
