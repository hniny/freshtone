@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')
   <div class="card">
       <div class="card-header">
            <div class="container">      
                <div class='col-md-12'>  
                <div class="row justify-content-between">               
                <h4>Len item lists</h4>             
                <a href="/len_items/create" class='btn btn-sm btn-primary '>
                    <i class="fa fa-plus-circle" class='ml-1'></i>
                    Create</a>   
                </div>      
            </div>  
        </div> 
       </div>
       <div class="card-body">
        <table class="table table-bordered table-sm">
            <thead class="thead-dark">
              <tr>
                <th scope="col" >#</th>
                <th scope="col"> Len Item Category</th>
                <th scope="col" >Item Name </th>
                <th scope="col" >Price</th>
                <th scope="col"  style="width: 340px;" >Description</th>
                <th scope="col" style="width: 110px;">Item Image</th>
                <th scope="col" style="width:114px;"> Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($len_items as   $len_item)            
                <tr>
                    <th scope="row">{{$n++}}</th>
                    <td>{{$len_item->lenCategory->category_name}}</td>
                    <td>{{$len_item->item_name}}</td>
                    <td>{{$len_item->price}}</td>
                    @php
                     $desc=html_entity_decode($len_item->description);
                    @endphp

                    <td>{!! substr(strip_tags($desc,100),0,50)!!}</td>
                    <td>
                        <img src="image/{{ $len_item->item_image}}"  width="60px" height="50px"
                        data-toggle="modal" data-target="#exampleModal{{$len_item->id}}"/>
                        <div class="modal fade" id="exampleModal{{$len_item->id}}" style="top: 20%;" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document" style='width: 340px;' >
                            <div class="modal-content text-center">  
                                      
                                <div class="modal-body">
                                <img src="{{url('image/'.$len_item->item_image)}}" data-src="{{$len_item->item_image}}"  width="300px"  height="230px" id="item_image" data-toggle="modal" data-target="#exampleModal"/>  
                                </div>   
                                <button type="button" style="margin-bottom: 15px;" class="close close-button"   data-dismiss="modal" aria-label="Close">
                                    <i class="fa fa-times-circle"   aria-hidden="true"></i>
                                </button>             
                            </div>
                            </div>
                        </div>    
                    </td>               
                    <td>
                        <a href="len_items/{{$len_item->id}}"
                        class='btn btn-sm'  >
                            <i class="fas fa-eye text-success"></i>
                        </a> 
                        <a href="len_items/{{$len_item->id}}/edit" >
                        <i class="fas  fa-edit text-dark" aria-hidden="true"></i>
                        </a>
                        <form  class='d-inline' action="len_items/{{$len_item->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button  type='submit' class='btn btn-sm '>  
                                 <i class="fas fa-trash-alt text-danger"></i> 
                            </button>      
                        </form>                              
                    </td>
                </tr>
                @endforeach         
            </tbody>
        </table>
        {{$len_items->appends(request()->input())->links()}}
       </div>
    
   </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="vendors/css/style.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop