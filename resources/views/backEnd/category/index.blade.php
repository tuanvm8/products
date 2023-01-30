@extends('backEnd.layouts.admin')
@section('title')
    <title>Trang chủ</title>
@endsection
@section('content')

<div class="content-wrapper">
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">List Danh muc</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Starter Page</li>
                </ol>
            </div>
            </div>
        </div>
        </div>
        <div class="content">
        <div class="container-fluid">
          
          <div class="row">
            </div class="col-md-12">
              <a href="{{route('category.create')}}" class="btn btn-primary btn-lg active m-1" role="button" aria-pressed="true">Add</a>
            </div>
            <div class="col-md-12 ">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên danh mục</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $item)
                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->name}}</td>
                                <td>
                                    <a href="{{route('category.edit', ['id' => $item->id])}}" class="btn btn-primary">Edit</a>
                                </td>
                                <td> 
                                    <a href="{{route('category.destroy', ['id' => $item->id])}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                      
                    </tbody>
                  </table>
            </div>

            </div>
        </div><!-- /.container-fluid -->
        </div>

    </div>
@endsection


