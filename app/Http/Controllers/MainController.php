<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class MainController extends Controller
{
    private $category;
    public function __construct(Category $category){
        date_default_timezone_set('Asia/Phnom_Penh');
        $this->date     =date("Y-m-d H:m:s");
        $this->category=$category;
    }
    public function index()
    {
        $category = $this->category->orderBy('order','ASC')->get();
        $id=0;
        return view('index',compact('category','id'));
        // return view('welcome',compact('category','id'));
    }
    public function showByCat($id)
    {
        $category = $this->category->orderBy('order','ASC')->get();
        $this->id=$id;
        return view('index',compact('category','id'));
    }
}
