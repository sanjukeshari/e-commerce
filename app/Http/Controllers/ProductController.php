<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('admin-panel.products.list',compact('products'));
       }

       public function create(){
        $categories = Category::all();
        $subcategories = Subcategory::all();
        return view('admin-panel.products.create', compact('categories', 'subcategories'));
       }

        public function store(request $request){

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        $product = new Product();
        $product->title            = $request->title;
        $product->title            = $request->long_description;
        $product->meta_title       = $request->meta_title;
        $product->meta_description = $request->meta_description;
        $product->slug             = $request->slug;
        $product->price            = $request->price;
        $product->discount_price   = $request->discount_price;
        $product->image            = $imageName;
        $product->save();
        // return redirect()->route('product.list');
        // return  redirect()->route('product.list');
        return $this->index(); // ✅

   }

}
