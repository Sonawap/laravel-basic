<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function add(){
        $category = new Category();

        $category->name = "Cars";
        $category->description = "Description for cars";

        $category->save();
    }
}
