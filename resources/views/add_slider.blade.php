@extends('layout.app')

@section('main')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Slider</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('account.dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Add Slider</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
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
          <form action="{{route('account.addsliderProcess')}}" method="POST">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Title</label>
                <input type="text" value="{{old('title')}}" id="title" name="title" @error('title') is-invalid @enderror class="form-control">
                @error('title')
                    <p class="invalid-feedback">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="inputStatus">Status</label>
                <select value="{{old('status')}}" id="inputStatus" name="status" @error('status') is-invalid @enderror class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option value="1">Active</option>
                  <option value="0">InActive</option>
                </select>
                @error('status')
                    <p class="invalid-feedback">{{$message}}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="image">Banner Image</label>
                <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror">
                @error('image')
                    <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </div>
        
       
              <button type="submit" class="btn btn-primary float-right">Submit</button>
            </div>
        </form>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
       
      </div>
   
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

 