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
                <h1 class="m-0 text-dark">Add category</h1>
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
                <form action="{{route('category.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label>Tên danh mục</label>
                      <input type="text" name="name" class="form-control"  placeholder="Nhập tên danh muc">
                      @if ($errors->has('name'))
                            <div class="error-validate text-danger">{{ $errors->first('name') }}</div>
                      @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
        </div>

</div>

@endsection


