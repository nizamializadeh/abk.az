<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog_translate extends Model
{
    protected $fillable = ['title', 'content', 'lang_id', 'blog_id'];
}
