<?php

namespace App\Http\Controllers\backend;

use App\Callme;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CallmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = $this->getSettingsForTable();
        $calls=Callme::all();
        return view('backend.main.index',compact('calls','settings'));
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
    public function destroy($id)
    {
        //
    }


    private function getSettingsForTable()
    {
        return  [
            'title' => 'Call',
            'table' => 'Call',
            'createButton' => [
                'text' => " Call",
                'url' => route('callme.index')
            ],
            'columns' => [
                [
                    'label' => 'ID',
                ],
                [
                    'label' => 'name',
                ]
                ,
                [
                    'label' => 'number',
                ]

            ],
        ];
    }
}
