@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
   <div class="card">
        <div class="card-header">     
            <div class='col-md-12'>
                <div class="row justify-content-between">     
                <h4>Len Category</h4>             
                <a href="/len_categories/create" class='btn btn-sm btn-primary '>
                    <i class="fa fa-plus-circle" class='ml-1'></i>
                    Create</a>         
                </div>         
            </div>   
        </div>
        <div class="card-body">
            <table class="table table-bordered table-sm">
                <thead class="thead-dark">
                <tr>
                    <th scope="col" >#</th>
                    <th scope="col" >Category Name </th>
                    <th scope="col"  class='w-30'>Description</th>
                    <th scope="col" style="width:200px;" >Parent Category</th>
                    <th scope="col" style="width:114px;"> Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($len_categories as   $len_category)            
                    <tr>
                        <th scope="row">{{$n++}}</th>
                        <td>{{$len_category->category_name}}</td>
                        <td>{!!Str::limit($len_category->category_description,100) !!}</td>
                        <td>{{ $len_category->getLenCategoryName($len_category->parent_category)}}</td>
                        <td >
                            <a href="len_categories/{{$len_category->id}}"
                            class='btn btn-xs btn-primary'  >
                                <i class="fas fa-eye text-white"></i>
                            </a> 
                            <a href="len_categories/{{$len_category->id}}/edit"   class='btn btn-xs btn-warning'>
                            <i class="fas  fa-edit text-dark" aria-hidden="true"></i>
                            </a>
                            <form  class='d-inline' action="len_categories/{{$len_category->id}}" method="post">
                                @csrf
                                @method('delete')
                                <button  type='submit' class='btn btn-xs btn-danger'>  
                                    <i class="fas fa-trash-alt text-white"></i> 
                                </button>      
                            </form>                              
                        </td>
                    </tr>
                    @endforeach         
                </tbody>
            </table>
        </div>
        {{$len_categories->appends(request()->input())->links()}}
   </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop