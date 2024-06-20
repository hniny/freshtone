@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
   
@stop
@section('content')  
     <div class="card">
       <div class="card-header bg-dark">
        Create Accessory Category
       </div>
       <div class="card-body">
        <form action="/accessory_categories"  method="post" class="needs-validation" novalidate>
          @csrf            
          <div class="form-group">
            <label for="exampleFormControlInput1"> Accessory Category Name</label>
            <input type="text" class="form-control" name="name" required>
            <div class="invalid-feedback">
              Enter  Accessory category name
            </div> 
          </div>          
          <div class="form-group">           
                <a href="/accessory_categories" class="btn btn-secondary">Cancel</a>
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
@stop