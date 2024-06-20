<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accessory;
use App\AccessoryCategory;
use File;
use App\Helper;

class AccessoryController extends Controller
{ 
    public function index(Request $request)
    {   
        $n=($request->page * 1 - 1) * 5;      
        $accessories=Accessory::latest()->paginate(5);      
        return view('backend.accessory.index',compact('accessories','n'));
    }

    public function create()
    {   $accessory_categories=AccessoryCategory::all();
        return view('backend.accessory.create',compact('accessory_categories'));
    }
    public function store()
    {   
        request()->validate([
            "title" => "required",
            "description" => "required",    
            "gallery" => "required"  ,
            "accessory_category_id" => "required"      
        ]);  
        $array=[]; 
        foreach(request('gallery') as $gallery) {
            $image=$gallery;
            $image_name=uniqid().$gallery->getClientOriginalName();
            $image->move('image',$image_name);
            $array[]=$image_name;           
        }
        Accessory::create([
            'accessory_category_id' => request('accessory_category_id'),
            'title' => request('title'),
            'description' => request('description'),
            'gallery'=> json_encode($array)
        ]);      
        return redirect('/accessories');
    }

    public function show(Accessory $accessory)
    {   
        return view('backend.accessory.show',compact('accessory'));
    }    

    public function edit(Accessory $accessory)
    {      
        return view('backend.accessory.edit',compact('accessory'));
    }   
    
    public function update(Accessory $accessory,Request $request)
    {   
        //dd($request->all());
        $image_gallery=[];
        if(request('gallery')){
            foreach(request('gallery') as $gallery){           
                $image_name=uniqid().$gallery->getClientOriginalName();
                $gallery->move('image',$image_name);
                $image_gallery[]=$image_name;              
            }  
            
            foreach(json_decode(request('old_gallery')) as $old){
                $image_gallery[]=$old;

            }            
        }
        
        $image_gallery=$image_gallery ? json_encode($image_gallery) : request('old_gallery');
        $accessory->update([
            "title" => request('title'),
            "description" => request('description'),
            "gallery" => $image_gallery           
        ]);
        return redirect('accessories');
    }
    public function destroy(Accessory $accessory)
    {
        $accessory->delete();
        return back();
    }    
    public function deleteImage(Request $request){
        $accessory=Accessory::find($request->id);
        $array=json_decode($accessory->gallery);
        $arr=[];
        $new_arr=[];
        foreach($array as $key => $a){
            if($a== $request->old_image){
                $arr[$key]=$a;
            }
            if($a !== $request->old_image){
                $new_arr[$key]=$a;
            }
        }
        $accessory->gallery=json_encode($new_arr);
        $accessory->save();       
        Helper::deleteOldImage(json_encode($arr));
        return back();

    }
}
