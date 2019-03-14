<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Traits\FileUploadTrait;
use App\Models\Category;
use App\Models\Category_translate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->currentLocaleId = (is_null($request->lang_id)) ? $this->currentLocaleId : $request->lang_id;
        $categories = DB::table('categories')
            ->join('category_translates', ['categories.id' => 'category_translates.category_id'])
            ->where('category_translates.lang_id', $this->currentLocaleId)
            ->select('categories.id','categories.logo','categories.parent','category_translates.name')
            ->get();
        return view('backend.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request = $this->saveFiles($request,'category');
        $cateqory = Category::create($request->all());
        foreach ($request->name as $key => $value) {
            Category_translate::create([
                'name' => $value,
                'category_id' => $cateqory->id,
                'lang_id' => $request->lang[$key]
            ]);
        }
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
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $category_translates = Category_translate::where('category_id',$id)->get();
        return view('backend.category.edit',compact('category','category_translates'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        if ($request->hasFile('logo'))
        {
            $request = $this->saveFiles($request,'category');
        }
        $category->update($request->all());

        foreach ($request->name as $key => $value) {
            $translate = Category_translate::where(['category_id' => $category->id, 'lang_id' => $request->lang[$key]])->first();
            $translate->name = $value;
            $translate->update();
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);

    }
}
