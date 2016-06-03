<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
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
