@extends('layout.app')

@section('main')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Banner Slider</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('account.dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Slider</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
 
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">

              @if(Session::has('success'))
              <div class="alert alert-success">
                  {{Session::get('success')}}
              </div>
            @endif
      
            @if(Session::has('error'))
            <div class="alert alert-danger">
                {{Session::get('error')}}
            </div>
          @endif
       
             
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                      <a class="btn btn-info btn-sm" href="{{route('account.addSlider')}}">
                        <i class="fas fa-plus"></i> Add Slider
                      </a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th style="width: 30px">id</th>
                            <th>Image</th>
                            <th style="width: 40%">Title</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>

                          @foreach ($banners as $row => $banner)     
                          <tr>
                            <td>{{$row+1}}</td>
                            <td>
                              <img alt="Avatar" class="table-avatar" src="https://adminlte.io/themes/v3/dist/img/avatar.png" style="width: 2.5rem;">
                            </td>
                            <td>{{$banner->title}}</td>
                            <td>
                              @if ($banner->status === 'active')
                              <span class="badge badge-success">Active</span>
                              @else
                                  <span class="badge badge-danger">Inactive</span>
                              @endif
                            </td>
                            <td>{{ $banner->created_at->format('d M Y') }}</td>
                            <td>
                              <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt"></i> Edit
                              </a>
                              <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash"></i> Delete
                              </a>
                            </td>
                          </tr>
                          @endforeach
                     
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
        
             
            </div>
          
          </div>
        </div><!-- /.container-fluid -->
      </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection

 