@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')  
@stop

@section('content') 
  <div class="card">
    <div class="card-header bg-dark">
      Edit Accessory Category Name
    </div>
    <div class="card-body">
      <form action="/accessory_categories/{{$accessory_category->id}}" method="POST">
        @csrf
        @method('PUT')       
        <div class="form-group">
          <label for="exampleFormControlInput1"> Accessory Category Name</label>
          <input type="text" class="form-control" name="name" value="{{$accessory_category->name}}">
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
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop