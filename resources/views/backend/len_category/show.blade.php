@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
 
@stop

@section('content')
   
        <div class="card">
            <div class="card-header bg-dark">
            Detail Len Category 
            </div>
            <div class="card-body">
            <form action="" >       
                <div class="form-group">
                <label for="exampleFormControlInput1">Category Name</label>
                <input type="text" class="form-control" name="category_name" value="{{$lenCategory->category_name}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Select Parent Category</label>
                    <select name="parent_category" class="form-control" id="exampleFormControlSelect2">
                    <option value="0">Default </option> 
                    @foreach($lenCategories as $len_category)
                    <option value="{{$len_category->id}}">{{$len_category->category_name}}</option>       
                    @endforeach  
                    </select>
                </div>      
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>          
                    <textarea class="category_description" name="category_description">
                        {{$len_category->category_description}}
                    </textarea>
                </div>
                <div class="form-group text-center">
                    <a href="{{URL::previous()}}" class="btn btn-dark">
                        Back
                    </a> 
                </div>      
            </form>  
            </div>
        </div>
  
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script type="text/javascript">
    $(document).ready(function(){
        $('.category_description').summernote();
    }) ;
    </script>
@stop