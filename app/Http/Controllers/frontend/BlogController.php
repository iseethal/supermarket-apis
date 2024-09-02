<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        return view('frontend.blog.blog_view');
    }

   public function BlogDetails()
   {
    return view('frontend.blog.blog_details');
   }
}
