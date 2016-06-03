<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    private $categories;

    public function __construct(Category $category)
    {
        #$this->$this->middleware('guest');
        $this->categories = $category;
    }

    public function index()
    {
        return \View::make('home');
    }
    
    public function exemplo()
    {
        $categories = $this->categories->all();
        
        return view('exemplo', compact('categories'));
    }
}
