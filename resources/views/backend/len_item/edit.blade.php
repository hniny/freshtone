@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header') 
@stop

@section('content')
<div class="card">
  <div class="card-header bg-dark">
    Edit Len Item
  </div>
  <div class="card-body">
    <form action="/len_items/{{$len_item->id}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')      
      <div class="form-group">
        <label for="exampleFormControlInput1">Len Category Name</label>
        <select name="len_category_id" class="form-control" id="exampleFormControlSelect2">
          <option value="0">Default </option> 
          @foreach($len_categories as $len_category)
          <option value="{{$len_category->id}}" @if($len_category->id==$len_item->len_category_id) selected @endif>{{$len_category->category_name}}</option>       
          @endforeach  
        </select>
      </div>      
      <div class="form-group">
        <label for="exampleFormControlInput1">Item  Name</label>
        <input type="text" class="form-control" id="item_name" name="item_name" value="{{$len_item->item_name}}" required>
        <div class="invalid-feedback">
          Enter Item  Name
        </div> 
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Price</label>
        <input type="number" class="form-control" name="price" value="{{$len_item->price}}" required>
        <div class="invalid-feedback">
          Enter Item  Price
        </div> 
      </div>          
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Description</label>       
        <textarea name="description" id="description" class="form-control description" rows="5" cols="5" required>{{$len_item->description}}</textarea>
        <div class="invalid-feedback">
          Enter Item Description
        </div>
      </div>
      <div class="form-group">       
        <label for="exampleFormControlTextarea1">Len Item Image</label>    
        <div class="row">          
          <div class="col-md-2">            
            <img src="{{url('image/'.$len_item->item_image)}}" data-src="{{$len_item->item_image}}"  width="115px" height="100px" id="item_image" data-toggle="modal" data-target="#exampleModal"/>             
            <div class="modal fade" id="exampleModal" style="top: 20%;" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document" style='width: 340px;' >
              <div class="modal-content text-center">                                        
                  <div class="modal-body">
                  <img src="{{url('image/'.$len_item->item_image)}}" data-src="{{$len_item->item_image}}"  width="300px"  height="230px" id="item_image" data-toggle="modal" data-target="#exampleModal"/>  
                  </div>   
                  <button type="button" class="close close-button"   data-dismiss="modal" aria-label="Close" style="margin-bottom: 15px;">
                      <i class="fa fa-times-circle"   aria-hidden="true"></i>
                  </button>             
              </div>
              </div>
          </div>    
            <input type="hidden" name="old_image" value="{{$len_item->item_image}}"  />
          </div>
          <div class="col-md-10">
            <input type="file" name='item_image'>
            <div class="invalid-feedback">
              Enter Item Image 
            </div>     
          </div>
        </div>            
      </div>
      <div class="form-group">           
            <a href="{{ URL::previous() }}" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">Update</button>           
      </div>
  </form> 
  </div>
</div>  
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="vendors/css/style.css">   
@stop

@section('js')
    <script> 
    $(document).ready(function(){
      $('.description').summernote();     
    });
    </script>
@stop