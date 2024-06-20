<?php

namespace App\Http\Controllers;

use App\LenItem;
use App\LenCategory;
use Illuminate\Http\Request;
use File;
use App\Helper;

class LenItemController extends Controller
{
    public function index(Request $request)
    {   
        $n = 1;
          if ($request->page > 1) {
            $n = ($request->page * 5) - 4;
          }
          
        $len_items=LenItem::latest()->paginate(5);   
        return view('backend.len_item.index',compact('len_items','n'));
    }
    public function create()
    {   
        $len_categories=LenCategory::all();
        return view('backend.len_item.create',compact('len_categories'));
    }
    public function store(Request $request)
    {  
        $request->validate([
            "len_category_id" => "required",
            "item_name" => "required", 
            "price" => "required",
            "description" => "required", 
            "item_image" => "required", 
        ]);       
        if($request->hasFile('item_image')){          
            $image=$request->file('item_image');
            $image_name=uniqid().$image->getClientOriginalName();
            $image->move('image',$image_name);            
        }        
        LenItem::create([
            'len_category_id' => $request->len_category_id,
            'item_name' => $request->item_name,
            'price' => $request->price,
            'description' => $request->description,
            'item_image'=> $image_name
        ]);
        return redirect('/len_items');
    }
    public function show(LenItem $len_item)
    {      
       
        return view('backend.len_item.show',compact('len_item'));       
    }    
    public function edit(LenItem $len_item)
    {    
        $len_categories=LenCategory::all();        
        return view('backend.len_item.edit',compact('len_item','len_categories'));
    }   
    public function update(Request $request,$id)
    {
     
        if($request->hasFile('item_image')){            
         
            $image=$request->file('item_image');
            $image_name=uniqid().$image->getClientOriginalName();
            $image->move('image',$image_name);          
            Helper::deleteOldImage($request->old_image);
        }      
        LenItem::where('id',$id)->update([
            'len_category_id' => $request->len_category_id,
            'item_name' => $request->item_name,
            'price' => $request->price,
            'description' => $request->description,
            'item_image'=> $image_name
        ]);

        return redirect('len_items');
    }
    public function destroy(LenItem $len_item)
    {
        $len_item->delete();
        return back();
    }
}
