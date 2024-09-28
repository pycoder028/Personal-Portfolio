@extends('backend.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Blog Page</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Edit Blog</a></li>
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
                <!-- Small boxes (Stat box) -->
                <div class="row">

                    <div class="col-md-12">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Edit Blog Page</h3>
                            </div>

                            <form class="form-horizontal" action="{{ url('admin/blog/edit/'.$getrecord->id) }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Blog Image<span style="color: red;">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="file" name="image" class="form-control">

                                            @if ($getrecord->image)
                                                <img src="{{ url('public/blog/'.$getrecord->image) }}" alt="Image" style="height: 80px; width:80px; margin-top:3px;">
                                            @endif

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Blog Title <span style="color: red;">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="title" class="form-control"
                                                placeholder="Portfolio Title" value="{{ $getrecord->title }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Blog Description <span style="color: red;">*</span></label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="6" name="description" placeholder="Blog Description">{{ $getrecord->description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">

                                    <button type="submit" class="btn btn-primary">Update</button>

                                    <a href="{{ url('admin/blog') }}" class="btn btn-default float-right">Cancel</a>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>
                <!-- /.row -->
                <!-- Main row -->

                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
