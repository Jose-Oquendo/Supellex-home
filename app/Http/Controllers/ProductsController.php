<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;
use Illuminate\Support\Facades\File;

class ProductsController extends Controller
{
    public function catalogue(Request $request, $category = 'Todos'){
        if($request->search == ''){
            if($category != 'Todos'){
                $category_serach = Categories::where('nameCategorie', $category)->first();
                $products = Products::where('Category_id', $category_serach->id)->get();
            }else{
                $products = Products::all();
            }
        }else{
            $products = Products::where('title', 'LIKE', '%'.$request->search.'%')->get();
            $category = $request->search;
        }
        return view('client.catalogue', ['category' => $category, 'products' => $products]);
    }

    public function details_product($id_product){
        $product = Products::find($id_product);
        return view('client.details', ['product' => $product]);
    }

    public function store(Request $request){
        $product = new Products;
        $product->title = $request->title;
        $product->description = $request->description;

        if($product->img_url != $request->img_url){
            if($request->hasFile('img_url')){
                File::delete($product->img_url);
    
                $file = $request->file('img_url');
                $destinationPath = 'img/products/';
                $filename = time().'-'.$file->getClientOriginalName();
                $uploadSuccess = $file->move($destinationPath, $filename);
                $product->img_url = $destinationPath . $filename;
            }
        }

        $product->quantity = $request->quantity;
        $product->price = $request->price;

        $category = Categories::where('nameCategorie', $request->Category_id)->first();
        $product->Category_id = $category->id;

        $product->save();

        return redirect()->back();
    }

    public function update(Request $request, $id){
        $product = Products::find($id);
        $product->title = $request->title;
        $product->description = $request->description;

        if($request->hasFile('img_url')){
            $file = $request->file('img_url');
            $destinationPath = 'img/products/';
            $filename = time().'-'.$file->getClientOriginalName();
            $uploadSuccess = $request->file('img_url')->move($destinationPath, $filename);
            $product->img_url = $destinationPath . $filename;
        }

        $product->quantity = $request->quantity;
        $product->price = $request->price;

        $category = Categories::where('nameCategorie', $request->Category_id)->first();
        $product->Category_id = $category->id;

        $product->save();

        return redirect()->route('emp.products');
    }
}
