<?php

namespace App\Http\Controllers\backend;

use App\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = $this->getSettingsForTable();
        $testimonials=Testimonial::all();
        return view('backend.testimonial.index',compact('settings','testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $settings = $this->getSettingsForForm();
        return view('backend.testimonial.create',compact('settings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Testimonial $testimonial)
    {
                $file = $request->file('fot');

        if ($request->hasFile('fot')){
            $name = rand(). "." . $file->getClientOriginalExtension();
            $file->move(public_path('photo'), $name);
            $testimonial->fot = $name;
            $testimonial->content = $request->contentss;
            $testimonial->fullname = $request->fullname;
            $testimonial->workplace = $request->workplace;
            $testimonial->save();
            $request->session()->flash(str_slug('Create testimonail','-'),'Testimonail created');
        }

//
//        if ($request->hasFile('image')){
//                $name = rand(). "." . $file->getClientOriginalExtension();
//                $file->move(public_path('photo'), $name);
//                $testimonial = new Testimonial();
//                $testimonial->image = $name;
//                $testimonial->save();
//            $request->session()->flash(str_slug('Create testimonail','-'),'Testimonail created');
//
//        }
//        $testimonial->create($request->all());
        return back();
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
    public function edit(Testimonial $testimonial)
    {
        $settings = $this->getSettingsForForm();
        $settings['title'] = 'Edit testimonail';
        return view('backend.testimonial.edit',compact('testimonial','settings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Testimonial $testimonial)
    {

        $file = $request->file('fot');
        if ($request->hasFile('fot')){
            $name = rand(). "." . $file->getClientOriginalExtension();
            $file->move(public_path('photo'), $name);
            $testimonial->fot = $name;
            $testimonial->fullname = $request->fullname;
            $testimonial->content = $request->contents;
            $testimonial->workplace = $request->workplace;
            $testimonial->update();
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
    public function destroy(Request $request,Testimonial $testimonial)
    {
        $testimonial->delete();
        (file_exists(public_path('photo/'.$testimonial->fot)) ? unlink(public_path('photo/'.$testimonial->fot)) : null);

        $request->session()->flash(str_slug('testimonial','-'),'Testimonial Deleted');
        return back();
    }

    private function getSettingsForTable()
    {
        return  [
            'title' => 'Testimonials',
            'table' => 'testimonials',
            'createButton' => [
                'text' => "Create testimonials",
                'url' => route('testimonial.create')
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
                    'label' => 'fullanme',
                ]
                ,
                [
                    'label' => 'content',
                ]
                ,
                [
                    'label' => 'workplace	',
                ]

            ],
        ];
    }

    private  function  getSettingsForForm()
    {
        return [
            'title' => 'Create testimonial',
            'flashSessionKey' => 'testimonial',
            'flashSessionValue' => 'Testimonial created',
            'backButton' => [
                'text' => "Back",
                'url' => route('testimonial.index')
            ]
        ];
    }

}
