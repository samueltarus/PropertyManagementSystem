
@extends('landlord.layouts')

@section('content')
    <div class="container">
        <section class="content-header">
          
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-3">
                  <h1>Landlord Profile</h1>
                  <hr>
                </div>
                <div class="col-sm-9">
                  <ol class="breadcrumb float-sm-right">
     
                    <li class="breadcrumb-item"><a href="{{ action('LandlordController@index')}}" class="btn btn-secondary">Home</a></li>
                   
                    {{-- <li class="breadcrumb-item"><a href="{{ action('TenantController@create')}}" class="btn btn-secondary">Add New Tenant</a></li> --}}
                  </ol>
                </div>
              </div>
            </div><!-- /.container-fluid -->
          </section>

        <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Landlord Profile</h3>

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
                  <th>User Name</th>
                  <th>Email </th>
                  <th>Phone Number</th>

                  <th></th>
                </tr>
              </thead>
              <tbody>
                           
                <tr>
                    <td>{{$landlords ->firstname}}</td>
                    <td>{{$landlords->lastname}}</td>
                     <td>{{$landlords->username}}</td>
                    <td>{{$landlords->email}}</td>
                    <td>{{$landlords->phone_number}}</td>
                     <td>{{$landlords->owns}}</td>
                  
                  <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                          <a href="{{route('landlord.edit',$landlords->id)}}" class="btn btn-info"><i class="fas fa-eye">Edit</i></a>
                   
                      
                    </div>
                  </td>
                <tr>
                  
             
                </tbody>
            </table>
          </div>
          <!-- /.card-body -->
          {{-- Occupant --}}
          <hr>
          <div class="card-header">
            <h3 class="card-title">  Landlord Apartments  List</h3>
    
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
            </div>
          </div>
          
          <hr>
          <div class="card-body p-0">
            <table class="table">
              <thead>
                <tr>
                    <th>Apartment Name</th>
                  <th>Apartment Type</th>
                  <th>Town</th>
                  <th>Location</th>
                  <th>Management Fee</th>
                  <th>Total Houses</th>

                  <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                        
                    {{-- <a href="#" class="btn btn-info"><i class="fas fa-eye">Vacate Tenant</i></a> --}}
                    </div>
                  </td>
                </tr>
              </thead>
            </table>
          </div>
        <tbody>
        </div>
        <!-- /.card -->
      
    </div>
    
    
  @endsection