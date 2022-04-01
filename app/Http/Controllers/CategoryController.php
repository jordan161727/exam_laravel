<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
    $data['category'] = Category::orderBy('id','desc')->paginate(5);
    return view('category.index', $data);
    }



    public function create()
    {
    return view('category.create');
    }
    public function store(Request $request)
    {
    $request->validate([
    'name' => 'required',

    ]);
    $category = new Category;
    $category->name = $request->name;

    $category->save();
    return redirect()->route('category.index')
    ->with('success','Company has been created successfully.');
    }
    public function edit(Category $category)
    {
    return view('category.edit',compact('category'));
    }
     
    public function update(Request $request, $id)
    {
    $request->validate([
        'name' => 'required',
        ]);
        $category = Category::find($id);
        $category->name = $request->name;
      
        $category->save();
    return redirect()->route('category.index')
    ->with('success','Category Has Been updated successfully');
    }
    public function trash()
    {
    $data['category'] = Category::onlyTrashed('id','desc')->paginate(5);
    return view('category.trash', $data);
    }

    public function show(Category $category)
    {
    return view('category.trash',compact('category')); 
    } 
    public function destroy(Category $category)
    {
    $category->delete();
    return redirect()->route('category.trash')
    ->with('success','Company has been deleted successfully');
    }
    public function restore($id)
    {
    $category = Category::withTrashed()->find($id);
    if(!is_null($category)){
    $category->restore();
    }
    return redirect()->route('category.index');
    }
    public function forceDelete($id)
    {
    $category = Category::withTrashed()->find($id);
    if(!is_null( $category)){
    $category->forceDelete();
    }
    return redirect()->back();

}

}
