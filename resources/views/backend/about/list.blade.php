@extends('backend.layouts.app')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">About Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">About</li>
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
                <h3 class="card-title">About Page</h3>
              </div>

              <form class="form-horizontal" action="{{ url('admin/about/post') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="card-body">

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">First Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="first_name" value="{{ @$getrecord[0]->first_name }}" class="form-control" placeholder="Enter Your First Name">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Last Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="last_name" value="{{ @$getrecord[0]->last_name }}" class="form-control" placeholder="Enter Your Last Name">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Age</label>
                    <div class="col-sm-10">
                      <input type="number" name="age" value="{{ @$getrecord[0]->age }}" class="form-control" placeholder="Enter Your Age">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nationality</label>
                    <div class="col-sm-10">
                      <input type="text" name="nationality" value="{{ @$getrecord[0]->nationality }}" class="form-control" placeholder="Enter Your Nationality">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Freelance</label>
                    <div class="col-sm-10">
                      <input type="text" name="freelance" value="{{ @$getrecord[0]->freelance }}" class="form-control" placeholder="Freelance">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Address </label>
                    <div class="col-sm-10">
                      <input type="text" name="address" value="{{ @$getrecord[0]->address }}" class="form-control" placeholder="Address">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Phone </label>
                    <div class="col-sm-10">
                      <input type="text" name="phone" value="{{ @$getrecord[0]->phone }}" class="form-control" placeholder="Phone">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" name="email" value="{{ @$getrecord[0]->email }}" class="form-control" placeholder="Email">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Skype </label>
                    <div class="col-sm-10">
                      <input type="text" name="skype" value="{{ @$getrecord[0]->skype }}" class="form-control" placeholder="Skype ">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Languages</label>
                    <div class="col-sm-10">
                      <input type="text" name="languages" value="{{ @$getrecord[0]->languages }}" class="form-control" placeholder="Languages">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Years of Experience</label>
                    <div class="col-sm-10">
                      <input type="text" name="years_of_experience" value="{{ @$getrecord[0]->years_of_experience }}" class="form-control" placeholder="Years of Experience">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Completed Projects</label>
                    <div class="col-sm-10">
                      <input type="text" name="completed_Projects" value="{{ @$getrecord[0]->completed_Projects }}" class="form-control" placeholder="Completed Projects">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Happy Customers</label>
                    <div class="col-sm-10">
                      <input type="text" name="happy_customers" value="{{ @$getrecord[0]->happy_customers }}" class="form-control" placeholder="Happy Customers">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Awards Won</label>
                    <div class="col-sm-10">
                      <input type="text" name="awards_won" value="{{ @$getrecord[0]->awards_won }}" class="form-control" placeholder="Awards Won">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">HTML5</label>
                    <div class="col-sm-10">
                      <input type="text" name="html" value="{{ @$getrecord[0]->html }}" class="form-control" placeholder="HTML5">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">JavaScript</label>
                    <div class="col-sm-10">
                      <input type="text" name="javascript" value="{{ @$getrecord[0]->javascript }}" class="form-control" placeholder="JavaScript">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">CSS3</label>
                    <div class="col-sm-10">
                      <input type="text" name="css" value="{{ @$getrecord[0]->css }}" class="form-control" placeholder="CSS3">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">PHP</label>
                    <div class="col-sm-10">
                      <input type="text" name="php" value="{{ @$getrecord[0]->php }}" class="form-control" placeholder="PHP">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">WordPress</label>
                    <div class="col-sm-10">
                      <input type="text" name="wordpress" value="{{ @$getrecord[0]->wordpress }}" class="form-control" placeholder="WordPress">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jquery</label>
                    <div class="col-sm-10">
                      <input type="text" name="jquery" value="{{ @$getrecord[0]->jquery }}" class="form-control" placeholder="Jquery">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Angular</label>
                    <div class="col-sm-10">
                      <input type="text" name="angular" value="{{ @$getrecord[0]->angular }}" class="form-control" placeholder="Angular">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">React</label>
                    <div class="col-sm-10">
                      <input type="text" name="react" value="{{ @$getrecord[0]->react }}" class="form-control" placeholder="React">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Years Of Present</label>
                    <div class="col-sm-10">
                      <input type="text" name="years_of_present" value="{{ @$getrecord[0]->years_of_present }}" class="form-control" placeholder="Years Of Present">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                      <input type="text" name="title" value="{{ @$getrecord[0]->title }}" class="form-control" placeholder="Title">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Sub Title</label>
                    <div class="col-sm-10">
                      <input type="text" name="sub_title" value="{{ @$getrecord[0]->sub_title }}" class="form-control" placeholder="Sub Titile">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                      <textarea name="description" class="form-control" cols="30" rows="5" placeholder="Description">{{ @$getrecord[0]->description }}</textarea>
                    </div>
                  </div>

                  <input type="hidden" name="id" value="{{ @$getrecord[0]->id }}">

                </div>

                <div class="card-footer">

                  <button type="submit" name="add_to_update" id="add_to_update" value="@if(count($getrecord)>0) Edit @else Add @endif" class="btn btn-info">
                    @if(count($getrecord)>0) Edit @else Add @endif</button>

                  <a href="" class="btn btn-default float-right">Cancel</a>
                </div>

              </form>

            </div>
          </div>
        </div>

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection