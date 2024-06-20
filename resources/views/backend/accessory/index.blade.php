@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')  
@stop
@section('content')
<div class="card">
    <div class="card-header">
        <div class="container">      
            <div class='col-md-12  '>   
                <div class="row justify-content-between">
                    <h4>Accessories</h4>             
                    <a href="/accessories/create" class='btn btn-sm btn-primary '>
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
                <th scope="col"> Accesory Category</th>
                <th scope="col" >Title </th>
                <th scope="col"  style="width: 500px;">Description</th>
                {{-- <th scope="col" class='w-50' >Gallery</th> --}}
                <th scope="col" style="width:114px;"> Action</th>
              </tr>
            </thead>  
            @php 
            $i=0;
           
          @endphp    
          
            <tbody>
                @foreach($accessories as   $accessory)   
                    
                <tr>
                    <th scope="row">{{++$i}}</th>
                    <td>{{$accessory->accessoryCategory->name}}</td>
                    <td>{{$accessory->title}}</td>                  
                    <td>
                    @php 
                        $text= html_entity_decode($accessory->description);
                    @endphp
                        {!!  substr(strip_tags($text), 0, 60) !!}
                    </td>              
                    <td >
                        <a href="accessories/{{$accessory->id}}"
                        class='btn btn-sm'  >
                            <i class="fas fa-eye text-success"></i>
                        </a> 
                        <a href="accessories/{{$accessory->id}}/edit" >
                        <i class="fas  fa-edit text-dark" aria-hidden="true"></i>
                        </a>
                        <form  class='d-inline' action="accessories/{{$accessory->id}}" method="post">
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
        {{$accessories->appends(request()->input())->links()}}
    </div>
</div> 
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop