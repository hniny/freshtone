<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\MultipleImage;


class MultipleImageController extends Controller
{


    /**
     * Listing Of images gallery
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = MultipleImage::get();
        return view('image-gallery',compact('images'));
    }


    /**
     * Upload image function
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {

        //dd($request->all());
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        // $input['image'] = time().'.'.$request->image->getClientOriginalName();
        // $request->image->move(public_path('image'), $input['image']);

        if($request->hasFile('image')){          
            $image=$request->file('image');
            $image_name=uniqid().$image->getClientOriginalName();
            $image->move('image',$image_name);            
        }    

        MultipleImage::create([
            'image' => $image_name,
            'title' => $request->title,
           
        ]);


        // $input['title'] = $request->title;
        // MultipleImage::create($input);


        return back()
            ->with('success','Image Uploaded successfully.');
    }


    /**
     * Remove Image function
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MultipleImage::find($id)->delete();
        return back()
            ->with('success','Image removed successfully.');	
    }
}