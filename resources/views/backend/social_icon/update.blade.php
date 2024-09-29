@extends('backend.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Social Icon Page</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Social Icon</a></li>
                            <li class="breadcrumb-item active">Social Icon</li>
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
                                <h3 class="card-title">Social Icon Page</h3>
                            </div>

                            <form class="form-horizontal" action="{{ url('admin/social_icon/update/'.$getrecord->id) }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Name <span style="color: red;">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Enter Name" value="{{ $getrecord->name }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Email <span style="color: red;">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Enter Email" value="{{ $getrecord->email }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Mobile <span style="color: red;">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="mobile" class="form-control"
                                                placeholder="Enter Mobile"  value="{{ $getrecord->mobile }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Facebook <span style="color: red;">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="facebook" class="form-control"
                                                placeholder="Enter Facebook"  value="{{ $getrecord->facebook }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Twitter <span style="color: red;">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="twitter" class="form-control"
                                                placeholder="Enter Twitter"  value="{{ $getrecord->twitter }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">YouTube <span style="color: red;">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="youtube" class="form-control"
                                                placeholder="Enter YouTube"  value="{{ $getrecord->youtube }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Dribbble <span style="color: red;">*</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="dribbble" class="form-control"
                                                placeholder="Enter Dribbble"  value="{{ $getrecord->dribbble }}" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">

                                    <button type="submit" class="btn btn-primary">Update</button>

                                    <a href="" class="btn btn-default float-right">Cancel</a>
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
