@extends('admin.layout')
@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">tag Page</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">tag Page</li>
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
            <h3 class="card-title">tag List</h3>
            <!-- Button trigger modal -->
            <a href="" class="btn btn-primary ml-auto" data-bs-toggle="modal" data-bs-target="#createModal">
              Create tag
            </a>
            {{-- <h3 class="card-title">Create tag</h3> --}}
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
                <tbody>
                  @if($tags->count())
                  @foreach ($tags as $key => $tag)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$tag->name}}</td>
                    <td>
                      <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                      </div>
                    </td>
                    <td class="d-flex">
                      <a href="" class="btn btn-success mr-1 update_tag_form"
                        data-bs-toggle="modal" 
                        data-bs-target="#updateModal"
                      
                        data-id="{{ $tag->id }}"
                        data-name="{{ $tag->name }}"
                        >
                        <i class="fas fa-edit"></i>
                      </a>
                      <a href="" class="btn btn-danger delete_tag"
                        data-id="{{ $tag->id }}"
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
                {!!$tags->links()!!}
              </div>
              <!-- /.card-body -->
            </div>
      </div>      
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->


@include('admin.tag.create')
@include('admin.tag.update')

@include('admin.tag.ajax')

{!! Toastr::message() !!}


@endsection