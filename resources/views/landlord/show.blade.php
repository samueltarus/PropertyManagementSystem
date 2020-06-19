
@extends('dashboard.layouts')

@section('content')

<section class="content">
  <div class="container-fluid">

    <div class="row mb-2">
      <div class="col-sm-3">
        <h1>Landlord Profile</h1>
        <hr>
      </div>
      <div class="col-sm-9">
        <ol class="breadcrumb float-sm-right">

          <li class="breadcrumb-item"><a href="{{ URL::to('all-landlord')}}" class="btn btn-secondary">Home</a></li>
         
          {{-- <li class="breadcrumb-item"><a href="{{ action('TenantController@create')}}" class="btn btn-secondary">Add New Tenant</a></li> --}}
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
  
    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle"
                   src="{{URL::to($landlords->avatar)}}" style="height:200px ; width:200px";>
            </div>

            <h3 class="profile-username text-center">{{$landlords->firstname."  ".$landlords->lastname}}</h3>

            <p class="text-muted text-center">Software Engineer</p>

            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b>Phone Number</b> <a class="float-right">{{$landlords->phone_number}}</a>
              </li>
              <li class="list-group-item">
                <b>Email</b> <a class="float-right">{{$landlords->email}}</a>
              </li>
              <li class="list-group-item">
                <b>Location</b> <a class="float-right">13,287</a>
              </li>
            </ul>

          <a href="{{URL::to('/edit-profile/'.$landlords->id)}}" class="btn btn-primary btn-block"><b>Update Image Profile</b></a>
          </div>
          <!-- /.card-body -->
        </div>
        
         
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="card">
          {{-- <div class="card-header p-2">
            <ul class="nav nav-pills">
              
              <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
            </ul>
          </div><!-- /.card-header --> --}}
          <div class="card-body">
            <div class="tab-content">

             
           
              <!-- /.tab-pane -->

              {{-- <div class="tab-pane" id="settings"> --}}
                
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
                 
                  <th>Profile</th>
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
                          <a href="{{URL::to('/edit-landlord/'.$landlords->id)}}" class="btn btn-info"><i class="fas fa-eye">Edit</i></a>
                   
                      
                    </div>
                  </td>
                <tr>
                  
             
                </tbody>
            </table>
          </div>
          <hr>
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
              <tbody>
                           
                <tr>
          
                
{{--                   
                  <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                          <a href="{{route('landlord.edit',$landlords->id)}}" class="btn btn-info"><i class="fas fa-eye">Edit</i></a>
                   
                      
                    </div>
                  </td> --}}
                <tr>
                </tbody>
                
            </table>
          </div>
        <tbody>
        </div>
              {{-- </div> --}}
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div><!-- /.card-body -->
        </div>
        <!-- /.nav-tabs-custom -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>


    
  @endsection