@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header') 
@stop

@section('content')
<div class="card">
  <div class="card-header bg-dark">
    <div class="container">
      <div class='row justify-content-between'>    
         Accessory Category 
          <a href="/accessory_categories" class="btn btn-primary">
             Back
         </a>        
       </div>
     </div>   
  </div>
  <div class="card-body">
    <form action="" >       
      <div class="form-group">
        <label for="exampleFormControlInput1"> Accessory Category Name</label>
        <input type="text" class="form-control" name="name" value="{{$accessory_category->name}}">
      </div>        
  </form>  
  </div>
</div> 
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop