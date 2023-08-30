<?php

namespace App\Controllers;

class BlogController extends BaseController
{
    public function allBlogs()
    {
        return view('blogs/all-blogs');
    }
    public function addBlog()
    {
        return view('blogs/add-blog');
    }
    public function blogCategories()
    {
        return view('blogs/blog-categories');
    }
    public function addCategory()
    {
        return view('blogs/add-category');
    }
}