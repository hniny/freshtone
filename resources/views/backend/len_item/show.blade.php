@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    {{-- <div class="container col-md-8 offset-md-2">
        <h1>Detail Len Item</h1>    
    </div>    --}}
@stop

@section('content') 
    <div class="card">
        <div class="card-header bg-dark">
        Detail Len Item  
        </div>
        <div class="card-body">
        <form action="" >       
            <div class="form-group">
                <label for="exampleFormControlInput1">Len Item Category</label>
                <input type="text" class="form-control" value="{{$len_item->lenCategory->category_name}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Len Item </label>
                <input type="text" class="form-control"  value="{{$len_item->item_name}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Price </label>
                <input type="text" class="form-control" value="{{$len_item->price}}">
            </div>
    
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="description">
                {{$len_item->description}} 
                </textarea>
            </div>
            <div class="form-group">         
                <label for="exampleFormControlTextarea1">Len Item Image</label>   
                <br/>
                <img src="{{url('image/'.$len_item->item_image)}}" data-src="{{$len_item->item_image}}"  width="115px" height="100px"  id="item_image" data-toggle="modal" data-target="#exampleModal"/>                 
                <div class="modal fade" id="exampleModal" style="top: 20%;" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document" style='width: 340px;' >
                    <div class="modal-content text-center">                                        
                        <div class="modal-body">
                        <img src="{{url('image/'.$len_item->item_image)}}" data-src="{{$len_item->item_image}}"  width="300px"  height="230px" id="item_image" data-toggle="modal" data-target="#exampleModal"/>  
                        </div>   
                        <button type="button" class="close close-button"   data-dismiss="modal" aria-label="Close"    style="margin-bottom: 15px ;">
                            <i class="fa fa-times-circle"   aria-hidden="true"></i>
                        </button>             
                    </div>
                    </div>
                </div>            
            </div>
            <div class="form-group">
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
    <link rel="stylesheet" href="vendors/css/style.css">
@stop

@section('js')
    <script>
        $(document).ready(function(){
            $('.description').summernote();
        });
    </script>
@stop