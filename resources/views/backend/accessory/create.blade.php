@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    {{-- <div class="container col-md-8 offset-md-2">
    <h1>Create Accessories</h1>    
   </div>    --}}
@stop

@section('content')
<div class="card">
  <div class="card-header bg-dark">
    Create Accessories
  </div>
  <div class="card-body">
    <form action="/accessories" method="post"  
      enctype="multipart/form-data"
      class="needs-validation" novalidate>
        @csrf     
          <div class="form-group">
          <label for="exampleFormControlSelect2">Select Accessory Category</label>
          <select id="accessory_category_id"  name="accessory_category_id" class="form-control"  required>
           <option value="0"> </option> 
            @foreach($accessory_categories as $accessory_category)
            <option value="{{$accessory_category->id}}">{{$accessory_category->name}}</option>       
            @endforeach  
          </select>
          <div class="invalid-feedback">
            Enter Accessory Category
          </div>
        </div>          
        <div class="form-group">
          <label for="exampleFormControlInput1">Title</label>
          <input type="text" class="form-control" name="title" required>
          <div class="invalid-feedback">
            Enter Title
          </div> 
        </div>
         
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Description</label>       
          <textarea name="description" id="description" class="description" rows="5" cols="5" required></textarea>
          <div class="invalid-feedback">
            Enter Category Description
          </div>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Accessory Image</label>    <br/>   
          <input type='file' name='gallery[]' id="gallery" multiple class="form-control" />
        </div>
        <div class="form-group">           
              <a href="/len_categories" class="btn btn-dark">Cancel</a>
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
<script>
  $(document).ready(function(){
    $('.description').summernote();

  });

</script>

@stop