@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Admin Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
          
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                   src={{URL::asset('dist/img/avatar5.png')}}      {{-- {{asset('images/imageOffer/'.$offers -> image)}} --}}
                       alt="User profile picture">
                </div>
                   
                    <h3 class="profile-username text-center">{{ Auth::guard('admin')->user()->name }}</h3>  
                
                

                <p class="text-muted text-center">admin </p>
               
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                  <b>email</b> <a class="float-right">{{ Auth::guard('admin')->user()->email }}</a>
                  </li>
                
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>

                   </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
           
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                 
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">settings</a></li>
                 
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
               
                  @include('admin.includs.alerts.success')
                  <div class="tab-pane" id="settings">
                      <h3>edit votre compt</h3>
                      @foreach ($admin as $item)
                          
                    
                  <form class="form-horizontal" method="POST" action="{{route('edit.admin')}}"  enctype="multipart/form-data">
                        @csrf
                      <div class="form-group row">
                        <label for="inputName"  class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" value="{{ Auth::guard('admin')->user()->name }}" required id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email:    </label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" value="{{ Auth::guard('admin')->user()->email }}" name="email" required id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">password</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" value="{{ Auth::guard('admin')->user()->password }}" required name="password" id="inputName2" placeholder="Name">
                        </div>
                      </div>
                     
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                    @endforeach
                  </div>
                
                  <!-- /.edit -->
                  
                </div>
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
     <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
    
@endsection