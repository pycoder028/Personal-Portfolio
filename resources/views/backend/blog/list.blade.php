@extends('backend.layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Blog Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blog</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        @include('_message')

        <a href="{{ url('admin/blog/add') }}" class="btn btn-success">Add Blog</a>
        <!-- Small boxes (Stat box) -->
        <div class="row mt-2">

          <section class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Image</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($getrecord as $value)
                    <tr>
                      <td>{{ $value->id }}</td>
                      <td>
                        @if (!empty($value->image))
                          <img src="{{ url('public/blog/'.$value->image) }}" alt="Image" style="height: 80px; width:80px;">
                        @endif
                      </td>
                      <td>{{ $value->title }}</td>
                      <td>{{ $value->description }}</td>
                      <td>
                        <a href="{{ url('admin/blog/edit/'.$value->id) }}" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
                        <a href="{{ url('admin/blog/delete/'.$value->id) }}" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-outline-danger"><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </section>

        </div>
        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection