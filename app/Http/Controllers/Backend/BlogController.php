<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Traits\FileUploadTrait;
use App\Models\Blog;
use App\Models\Blog_translate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
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
        $blogs = DB::table('blogs')
            ->join('blog_translates', ['blogs.id' => 'blog_translates.blog_id'])
            ->where('blog_translates.lang_id', $this->currentLocaleId)
            ->select('blogs.id','blogs.image','blogs.view','blogs.isVisible', 'blog_translates.title', 'blog_translates.content')
            ->get();
        return view('backend.blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request = $this->saveFiles($request,'blog');
        $blog = Blog::create($request->all());

        foreach ($request->title as $key => $value) {
             Blog_translate::create([
                'title' => $value,
                'content' => $request->description[$key],
                'blog_id' => $blog->id,
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
        $blog = Blog::findOrFail($id);
        $blog_translates = Blog_translate::where('blog_id',$id)->get();
        return view('backend.blog.edit',compact('blog','blog_translates'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        if ($request->hasFile('image'))
        {
            $request = $this->saveFiles($request,'blog');
        }
        $blog->update($request->all());
        foreach ($request->title as $key => $value) {
            $translate = Blog_translate::where(['blog_id' => $blog->id, 'lang_id' => $request->lang[$key]])->first();
            $translate->title = $value;
            $translate->content = $request->description[$key];
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
