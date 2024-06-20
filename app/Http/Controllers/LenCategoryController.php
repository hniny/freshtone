<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\LenCategory;

class LenCategoryController extends Controller
{
    public function index(Request $request)
    {   
        $n = 1;
          if ($request->page > 1) {
            $n = ($request->page * 5) - 4;
          }
        $len_categories=LenCategory::latest()->paginate(5);      
        return view('backend.len_category.index',compact('len_categories','n'));
    }
    public function create()
    {   
        $len_categories=LenCategory::all();
        return view('backend.len_category.create',compact('len_categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            "category_name" => "required",
            "category_description" => "required",            
        ]);       
        LenCategory::create($request->except('_token'));
        return redirect('/len_categories');
    }
    public function show(LenCategory $len_category)
    {   
        $len_categories=LenCategory::all();
        return view('backend.len_category.show')->withLenCategory($len_category)
        ->withLenCategories($len_categories);
    }    
    public function edit(LenCategory $len_category)
    {    
        $len_categories=LenCategory::all();        
        return view('backend.len_category.edit',compact('len_category','len_categories'));
    }   
    public function update(LenCategory $len_category,Request $request)
    {
        $len_category->update($request->except('_token'));
        return redirect('len_categories');
    }
    public function destroy(LenCategory $len_category)
    {  
        $len_category->lenItems()->delete();
        $len_category->delete();
        return back();
    }
}
