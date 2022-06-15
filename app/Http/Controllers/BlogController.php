<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function store(){

    }

    public function create(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('blogs.create');
    }

    public function show(){

    }

    public function update()
    {
        return view('blogs.edit');
    }

    public function destroy(){

    }
}
