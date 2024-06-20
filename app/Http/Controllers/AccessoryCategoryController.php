<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AccessoryCategory;

class AccessoryCategoryController extends Controller
{
    public function index(Request $request)
    {   
        $n = 1;
          if ($request->page > 1) {
            $n = ($request->page * 5) - 4;
          }
        $accessory_categories=AccessoryCategory::latest()->paginate(5);      
        return view('backend.accessory_category.index',compact('accessory_categories','n'));
    }
    public function create()    {   
      
        return view('backend.accessory_category.create');
    }
    public function store(Request $request)
    {

        $request->validate([
            "name" => "required",                
        ]);       
        AccessoryCategory::create($request->except('_token'));
        return redirect('/accessory_categories');
    }
    public function show(AccessoryCategory $accessory_category)
    {   
    //    dd($accessory_category);
        return view('backend.accessory_category.show',compact('accessory_category'));
    }    
    public function edit(AccessoryCategory $accessory_category)
    {    
        
        return view('backend.accessory_category.edit',compact('accessory_category'));
    }   
    public function update(AccessoryCategory $accessory_category,Request $request)
    {
        $accessory_category->update($request->except('_token'));
        return redirect('accessory_categories');
    }
    public function destroy(AccessoryCategory $accessory_category)
    {
        $accessory_category->accessories()->delete();
        $accessory_category->delete();
       
        
        return back();
    }
}
