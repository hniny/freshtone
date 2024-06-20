@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
<div class="card">
    <div class="card-header bg-dark">
        <div class="container  ">
            <div class='row   justify-content-between'>    
               Accessory  
                <a href="/accessories" class="btn btn-primary">
                   Back
               </a>        
             </div>
           </div>  
    </div>
    <div class="card-body">
        <form action="" >  
            <div class="form-group">
              <label for="exampleFormControlInput1">Accessory Category</label>
              <input type="text" class="form-control bg-white" readonly name="title" value="{{$accessory->accessoryCategory->name}}">
            </div>      
            <div class="form-group">
              <label for="exampleFormControlInput1">Title</label>
              <input type="text" class="form-control" name="title" value="{{$accessory->title}}">
            </div>            
            <div class="form-group">
                <label for="exampleFormControlSelect2">Accessory Content </label>
                <textarea class="description" name="description"
                id="exampleFormControlTextarea1" rows="3">
                {{$accessory->description}} 
                </textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Accessory Gallery </label>           
                @php
                    $gallery=json_decode($accessory->gallery);
                @endphp  
                <br/>
                <div class="row">     
                    @foreach($gallery as $key => $value)                
                        {{-- <div class="col-md-3 mb-2 ">     
                        <img src="{{url('image/'.$value)}}" width="120px" height="120px" alt="">                       
                        </div>     --}}
                    @endforeach
                </div>                     
            </div>         
        </form>  
    </div>
</div>
  
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> 
        $(document).ready(function(){
            $('.description').summernote();
        });
    </script>
@stop