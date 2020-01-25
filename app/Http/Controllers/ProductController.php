<?php

namespace App\Http\Controllers;

use App\Media;
use App\Product;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Category;

class ProductController extends Controller
{
    public function showEdit(){
        return view('AdminPage.Users.edit');
    }
    public function showAdd(){
        $switalert =0;
        $category = Category::all();
        return view('AdminPage.Users.create',compact('switalert','category'));
    }
    public function AddProduct(Request $request){
        $pathOfVideoFiles = 'uploads\\';
        $validatData = $request->validate([
            'title'=>'required|max:40',
            'description'=>'max:2000',
            'propic' => 'required|mimes:jpeg,png,gif,jpg|max:2999',
        ]);
        $storeFile = $request->file('propic')->move(public_path($pathOfVideoFiles),$request->file('propic')->getClientOriginalName());

        $SubmitIntoDb = Product::create([
            'title'       => $request->title,
            'description' => $request->description,
            'mainprice'   => $request->mainprice,
            'offprice'    => $request->offprice,
            'totalprice'  => $request->totalprice,
            'size'        => $request->size,
            'color'       => $request->color,
        ]);

        $productid = Product::latest('id')->first()->id;

        if ($SubmitIntoDb) {
            $ImageSubmit = Media::create([
                'image_address' => $pathOfVideoFiles . $request->file('propic')->getClientOriginalName(),
                'product_id' => $productid,
            ])->save();
        }

        //--- store category--------
//        $AddCategory = new Product();
//        Product::class()->categories()->attach($request->category);

        $productm = Product::find($productid);
        $productm->categories()->sync($request->category);

        $category = Category::all();

        if ($SubmitIntoDb){
            $switalert = 1;

            return view('AdminPage.Users.create' , compact('switalert','category'));
        }

    }
}
