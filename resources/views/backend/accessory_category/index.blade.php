@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
   {{-- <div class="container">      
        <div class="col-md-12">
            <div class="row justify-content-between">   
                <h4>Accessory  Category List</h4>             
                <a href="/accessory_categories/create" class='btn btn-sm btn-primary'>
                <i class="fa fa-plus-circle" class='ml-1'></i>
                Create</a>   
            </div>             
       </div>  
   </div>    --}}
@stop
@section('content')
   <div class="card">
    <div class="card-header">
        <div class="container">      
            <div class="col-md-12">
                <div class="row justify-content-between">   
                    <h4>Accessory  Category List</h4>             
                    <a href="/accessory_categories/create" class='btn btn-sm btn-primary'>
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
                <th scope="col" >Accessory Category Name </th>          
                <th scope="col" style="width:114px;"> Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($accessory_categories as   $accessory_category)            
                <tr>
                    <th scope="row">{{$n++}}</th>
                    <td>{{$accessory_category->name}}</td>              
                    <td >
                        <a href="accessory_categories/{{$accessory_category->id}}"
                        class='btn btn-xs btn-primary'  >
                            <i class="fas fa-eye "></i>
                        </a> 
                        <a href="accessory_categories/{{$accessory_category->id}}/edit"
                         class='btn btn-xs btn-warning'  >
                        <i class="fas  fa-edit " aria-hidden="true"></i>
                        </a>
                        <form  class='d-inline' action="accessory_categories/{{$accessory_category->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button  type='submit' class='btn btn-xs btn-danger '>  
                                 <i class="fas fa-trash-alt"></i> 
                            </button>      
                        </form>                              
                    </td>
                </tr>
                @endforeach         
            </tbody>
        </table>
        {{$accessory_categories->appends(request()->input())->links()}}
    </div>    
   </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop