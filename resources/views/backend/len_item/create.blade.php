@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')   
  <div class="card">
    <div class="card-header bg-dark">
    Create Len Item
    </div>
    <div class="card-body">
    <form action="/len_items" method="post" class="needs-validation"  novalidate enctype="multipart/form-data">
      @csrf      
      <div class="form-group">
        <label for="exampleFormControlSelect2">Select Len Category</label>
        <select id="len_category_id"  name="len_category_id" class="form-control"  required>
          <option value="0">Default </option> 
          @foreach($len_categories as $len_category)
          <option value="{{$len_category->id}}">{{$len_category->category_name}}</option>       
          @endforeach  
        </select>
        <div class="invalid-feedback">
          Enter Len Category
        </div>
      </div>        
      <div class="form-group">
        <label for="exampleFormControlInput1">Item  Name</label>
        <input type="text" class="form-control" id="item_name" name="item_name" required>
        <div class="invalid-feedback">
          Enter Item  Name
        </div> 
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Price</label>
        <input type="number" class="form-control" name="price" required>
        <div class="invalid-feedback">
          Enter Item  Price
        </div> 
      </div>          
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Description</label>       
        <textarea name="description" id="description" class="form-control description" rows="5" cols="5" required></textarea>
        <div class="invalid-feedback">
          Enter Item Description
        </div>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Len Item Image</label>    
        <br/>          
          <input type="file" name='item_image' class="mb-2" onchange="preview(event)">
          <br/>
          <img id="img" width="200px">       
        <div class="invalid-feedback">
          Enter Item Image 
        </div>
      </div>
      <div class="form-group">           
          <a href="/len_items" class="btn btn-secondary">Cancel</a>
          <button type="submit" class="btn btn-primary">Save</button>           
      </div>
      </form>  
    </div>
  </div>  
@stop

@section('css')  
@stop

@section('js')    
<script src="{{ asset('vendors/js/validation.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.description').summernote();
  });
  function preview(event){
    var input=event.target.files[0];
    var reader=new FileReader();
    reader.onload=function(){
      var result=reader.result;
      var img=document.getElementById('img');
      img.src=result;
    }
    reader.readAsDataURL(input);    
  }
</script>

@stop