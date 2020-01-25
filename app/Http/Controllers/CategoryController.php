<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function ShowCatPage(){
        $CategoryList = Category::latest()->paginate(5);
        return view('AdminPage.Users.category',compact('CategoryList'));
}
public function CatSubmit(Request $request){
        $storeToDb = Category::create([
            'title'         => $request->title,
            'display_name'  => $request->displayname,
        ]);
        if ($storeToDb){
            return $this->ShowCatPage();
        }
}
}
