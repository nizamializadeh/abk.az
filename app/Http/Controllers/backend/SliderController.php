<?php

namespace App\Http\Controllers\backend;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = $this->getSettingsForTable();
        $sliders=Slider::all();
        return view('backend.slider.index',compact('settings','sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setting = $this->getSettingsForForm();
        return view('backend.slider.create',compact('setting'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Slider $slider)
    {
        $files = $request->file('image');

        if ($request->hasFile('image')){
            foreach ($files as $file) {
                $name = rand(). "." . $file->getClientOriginalExtension();
                $file->move(public_path('photo'), $name);
                $slider = new Slider();
                $slider->image = $name;
                $slider->save();
            }
        }
        $request->session()->flash(str_slug('slider','-'),'Slider Deleted');

        return redirect('admin/slider');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Slider $slider)
    {
        $slider->delete();
        (file_exists(public_path('photo/'.$slider->image)) ? unlink(public_path('photo/'.$slider->image)) : null);
        $request->session()->flash(str_slug('slider','-'),'Slider Deleted');
        return back();
    }

    private function getSettingsForTable()
    {
        return  [
            'title' => 'Sliders',
            'table' => 'slider',
            'createButton' => [
                'text' => "Create slider",
                'url' => route('slider.create')
            ],
            'columns' => [
                [
                    'label' => 'ID',
                ],
                [
                    'label' => 'image',
                ]
            ],
        ];
    }

    private  function  getSettingsForForm()
    {
        return [
            'title' => 'Create slider',
            'flashSessionKey' => 'slider',
            'flashSessionValue' => 'Slider created',
            'backButton' => [
                'text' => "Back",
                'url' => route('slider.index')
            ]
        ];
    }

}
