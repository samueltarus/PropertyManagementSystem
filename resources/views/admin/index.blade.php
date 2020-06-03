
@extends('admin.layouts')

@section('content')
    <div class="container">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-3">
                  <h1>Landlords Information And Actions</h1>
                </div>
                <div class="col-sm-9">
                  <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{ action("LandlordController@index")}}" class="btn btn-secondary">Home</a></li>
                  {{-- <li class="breadcrumb-item"><a href="#" class="btn btn-secondary">Show Landlord Detail</a></li> --}}
                  </ol>
                </div>
              </div>
            </div><!-- /.container-fluid -->
          </section>
        <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Landlords Details Management</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>

        <div class="card-body p-0">
            <table class="table">
              <thead>
                <tr>
                  <th>First Name</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th> Role</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>

                 @foreach ($admins  as $admins )

                   <tr>
                   <td>{{$admins ->name}}</td>
                   <td>{{$admins->username}}</td>
                   <td>{{$admins->email}}</td>
                   <td>{{$admins->role}}</td>
                  
                  <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                     
                      <a href="{{ route('admin.edit',$admins['id'])}}" class="btn btn-info"><i class="fas fa-eye">Edit</i></a>
                      {{-- <a href="{{action('admins.destroy', [$admins->id])}}" class="btn btn-danger"><i class="fas fa-trash">Delete</i></a> --}}
                    </div>
                  </td>
                <tr>

                  @endforeach

              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    {{-- <div class="row">
      <div class="col-12">
        <a href="#" class="btn btn-secondary">Cancel</a>
        <input type="submit" value="Save Changes" class="btn btn-success float-right">
      </div>
    </div> --}}

    </div>
  @endsection
