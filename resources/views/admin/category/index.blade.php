@extends('admin.layout')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Category Page</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Category Page</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            <h3 class="card-title">Category List</h3>
            <!-- Button trigger modal -->
            <a href="" class="btn btn-primary ml-auto" data-bs-toggle="modal" data-bs-target="#createModal">
              Create Category
            </a>
            {{-- <h3 class="card-title">Create Category</h3> --}}
          </div>
          <!-- /.card-header -->
          <input type="text" name="search" id="search" class="mb-1 form-control text-center" placeholder="Search Here...">
          <div class="card-body p-0">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>Count</th>
                    <th style="width: 40px">Action</th>
                  </tr>
                </thead>
                {{-- <tbody>
                  @if($categories->empty())
                  <tr>
                    <td colspan="4">
                      <h5 class="text-center">
                        No Data Fount
                      </h5>
                    </td>
                  </tr>
                  
                  @else
                  @foreach ($categories as $key => $category)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$category->name}}</td>
                    <td>
                      <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                      </div>
                    </td>
                    <td class="d-flex">
                      <a href="" class="btn btn-success mr-1 update_category_form"
                        data-bs-toggle="modal" 
                        data-bs-target="#updateModal"
                      
                        data-id="{{ $category->id }}"
                        data-name="{{ $category->name }}"
                        >
                        <i class="fas fa-edit"></i>
                      </a>
                      <a href="" class="btn btn-danger delete_category"
                        data-id="{{ $category->id }}"
                      >
                        <i class="fas fa-times"></i>
                      </a>
                    </td>
                  </tr> 
                  @endforeach
                  @endif
                </tbody> --}}
                <tbody>
                  @if($categories->count())
                  @foreach ($categories as $key => $category)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$category->name}}</td>
                    <td>
                      <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                      </div>
                    </td>
                    <td class="d-flex">
                      <a href="" class="btn btn-success mr-1 update_category_form"
                        data-bs-toggle="modal" 
                        data-bs-target="#updateModal"
                      
                        data-id="{{ $category->id }}"
                        data-name="{{ $category->name }}"
                        >
                        <i class="fas fa-edit"></i>
                      </a>
                      <a href="" class="btn btn-danger delete_category"
                        data-id="{{ $category->id }}"
                      >
                        <i class="fas fa-times"></i>
                      </a>
                    </td>
                  </tr> 
                  @endforeach
                  @else
                  <tr>
                    <td colspan="4">
                      <h5 class="text-center">
                        No Data Fount
                      </h5>
                    </td>
                  </tr>
                  @endif
                </tbody>
                </table>
                {!!$categories->links()!!}
              </div>
              <!-- /.card-body -->
            </div>
      </div>      
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->


@include('admin.category.create')
@include('admin.category.update')

@include('admin.category.ajax')

{!! Toastr::message() !!}


@endsection