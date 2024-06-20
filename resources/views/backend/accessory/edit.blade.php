@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  
@stop

@section('content')
<div class="card">
    <div class="card-header bg-dark">
        Edit Accessory
    </div>
    <div class="card-body">
        <form action="{{route('accessories.update',$accessory->id)}}" method="post" enctype="multipart/form-data">     
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="exampleFormControlInput1">Title</label>
              <input type="text" class="form-control" name="title" value="{{$accessory->title}}">
            </div>          
            <div class="form-group">
                <label for="exampleFormControlSelect2">Accessory Content </label>
                <textarea class="description" name="description"
                id="exampleFormControlTextarea1" >
                {{$accessory->description}} 
                </textarea>
            </div>
            @php
                $gallery=json_decode($accessory->gallery);
            @endphp 
            <div class="row mb-2">
                @foreach($gallery as $key => $value)
                <div class="list-group gallery">
                    <div class="col-sm-4 col-xs-6 col-md-3 col-lg-3">
                        <a class="thumbnail fancybox" href="/image/{{$value}}" rel="ligthbox">
                            <img class="img-responsive" alt="" width="200px" src="/image/{{ $value }}" />                          
                        </a>      
                        <input type="hidden"   id="old{{$key}}"  data-old="{{$value}}" data-id="{{$accessory->id}}">              
                            
                        <a  id="close-icon" data-key="{{$key}}" class="close-icon btn btn-danger"><i class="fas fa-times"></i></a>
                        
                    </div>                
                </div>
                @endforeach
            </div>
            <input type="hidden" value="{{$accessory->gallery}}" name="old_gallery" />    
            <div class="col-md-12 mb-2">                    
                <strong>Image:</strong>                       
                <input type="file" multiple name="gallery[]"  class="form-control"/>
            </div>               
            <div class="form-group">
                <a href="{{URL::previous()}}" class="btn btn-dark">
                    Back
                </a> 
                <button  type="submit" class='btn btn-primary'>Update</button>
            </div>      
        </form> 
    </div>
</div>
 
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        .gallery{
            display: inline-block;
            margin-top: 20px;
        }
        .gallery img{
            width: 192px;
            height: 150px;
        }
        .close-icon{
            border-radius: 47%;
            position:absolute;
            right: -160px;
            top: -10px;
            padding: 2px 8px;
        }        
    </style>
@stop

@section('js')
    <script> 
     $(document).ready(function(){
            $('.description').summernote();
            $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
            });
            $('.close-icon').on('click',function(){               
                var key=$(this).data('key');
                var old_image=$('#old'+key).data('old');
                var acc_id=$('#old'+key).data('id');
                window.location.href="/deleteImage?id="+acc_id+"&&old_image="+old_image;
                   
            });
     });
    </script>
@stop