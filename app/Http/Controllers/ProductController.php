<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
{
$data['product'] = Product::orderBy('id','desc')->paginate(5);
return view('products.index', $data);
}

public function welcome(Request $request)
{

$data['product'] = Product::orderBy('id','desc', 'search')->paginate(8);
return view('index')->with($data);
}

/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('products.create');
}
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$request->validate([
'name' => 'required',
'short_description' => 'required',
'price' => 'required',
'status' => 'required'
]);
$product = new Product;
$product->name = $request->name;
$product->short_description = $request->short_description;
$product->price = $request->price;
$product->status = $request->status;
$product->save();
return redirect()->route('product.index')
->with('success','Company has been created successfully.');
}
/**
* Display the specified resource.
*
* @param  \App\company  $company
* @return \Illuminate\Http\Response
*/
public function show(Product $product)
{
return view('product.trash',compact('product'));
} 
/**
* Show the form for editing the specified resource.
*
* @param  \App\Company  $company
* @return \Illuminate\Http\Response
*/
public function edit(Product $product)
{
return view('products.edit',compact('product'));
}

public function trash()
{
    $data['product'] = Product::onlyTrashed('id','desc')->paginate(5);
    return view('products.trash', $data);

 
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\company  $company
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'short_description' => 'required',
        'price' => 'required',
        'status' => 'required',
        ]);
        $product = Product::find($id);
        $product->name = $request->name;
        $product->short_description = $request->short_description;
        $product->price = $request->price;
        $product->status = $request->status;
        $product->save();
return redirect()->route('product.index')
->with('success','Company Has Been updated successfully');
}
/**
* Remove the specified resource from storage.
*
* @param  \App\Company  $company
* @return \Illuminate\Http\Response
*/
public function destroy(Product $product)
{
$product->delete();
return redirect()->route('product.trash')
->with('success','Company has been deleted successfully');
}


public function restore($id)
{
$product = Product::withTrashed()->find($id);
if(!is_null($product)){
    $product->restore();
}
return redirect()->route('product.index');

}

public function forceDelete($id)
{
$product = Product::withTrashed()->find($id);
if(!is_null($product)){
    $product->forceDelete();
}
return redirect()->back();

}
public function productList()
{
    $products = Product::all();

    return view('products', compact('products'));
}

}
