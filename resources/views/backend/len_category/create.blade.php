@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')   
@stop

@section('content')      
  <div class="card">
    <div class="card-header bg-dark">
      Create Len Category
    </div>
    <div class="card-body">
      <form action="/len_categories" method="post" class="needs-validation" novalidate>
        @csrf            
        <div class="form-group">
          <label for="exampleFormControlInput1">Category Name</label>
          <input type="text" class="form-control" name="category_name" required>
          <div class="invalid-feedback">
            Enter Category Name
          </div> 
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Select Parent Category</label>
            <select id="parent_category"  name="parent_category" class="form-control"  required>
              <option value="0">Default </option> 
              @foreach($len_categories as $len_category)
              <option value="{{$len_category->id}}">{{$len_category->category_name}}</option>       
              @endforeach  
            </select>
            <div class="invalid-feedback">
              Enter Parent Category
            </div>
        </div>      
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Description</label>                
          <textarea class="category_description" name="category_description"></textarea>
          <div class="invalid-feedback">
            Enter Category Description
          </div>
        </div>
        <div class="form-group">           
            <a href="/len_categories" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">Save</button>           
        </div>
      </form> 
    </div>
  </div>   
@stop

@section('css')
@stop

@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('.category_description').summernote();
  });
</script>

@stop

