
@extends('landlord.layouts')

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
                  <li class="breadcrumb-item"><a href="{{ action("ManageLandlordController@create")}}" class="btn btn-secondary">Add New Landlord</a></li>
                  <li class="breadcrumb-item"><a href="{{ action("ManageLandlordController@show")}}" class="btn btn-secondary">Add New Landlord</a></li>
                    
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
                  <th>Last Name</th>
                  <th>Number Of Appartments</th>
                  <th>Number of units</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
               
            @foreach ($manage_landlords  as $ManageLandlord )
                     <tr>
                <td>{{$ManageLandlord ->firstname}}</td>
                  <td>{{$ManageLandlord->lastname}}</td>
                  <td>{{$ManageLandlord->no_apartments}}</td>
                  <td>{{$ManageLandlord ->no_units}}</td>
                  <td>{{$ManageLandlord->status}}</td>
                  <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                      <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                      <a href="{{action('ManageLandlordController@destroy', [$ManageLandlord->id])}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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