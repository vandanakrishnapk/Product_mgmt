<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function create_product()
    {
        return view('create_product');
    }
    public function do_create(Request $request)
    {
        $request->validate([
            'p_name' =>'required|string|max:255',
            'price' =>'required|numeric|min:0',
            'description' =>'required|string',
        ]);
        Product::create([
            'p_name' =>$request->p_name,
            'price' =>$request->price,
            'description'=>$request->description,
        ]);
        return redirect()->route('view.product')->with('success',"product addedd successfully");
        
    }
    public function view_product()
    {
        $pro = Product::all();
        return view('view_product',compact('pro'));
    }
    public function edit(Request $request,$id)
    {
        $pid = Product::find($id);
        return view('edit',compact('pid'));
    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'p_name' =>'required|string|max:255',
            'price' =>'required|numeric|min:0',
            'description' =>'required|string',
        ]);
       $data= Product::find($id);
       $data->p_name = $request->input('p_name');
       $data->price=$request->input('price');
       $data->description=$request->input('description');
       $data->update();
       return redirect()->route('view.product')->with('success',"updated successfully");

    }
    public function delete($id)
    {
        Product::find($id)->delete();
        return redirect()->route('view.product')->with('success',"deleted successfully");
    }
}
