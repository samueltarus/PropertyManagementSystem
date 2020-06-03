
@extends('tenant.layouts')

@section('content')
    <div class="container">
        <section class="content-header">
          
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-3">
                  <h1>Tenant Profile</h1>
                  <hr>
                </div>
                <div class="col-sm-9">
                  <ol class="breadcrumb float-sm-right">
     
                    <li class="breadcrumb-item"><a href="{{ action('TenantController@index')}}" class="btn btn-secondary">Home</a></li>
                   
                    {{-- <li class="breadcrumb-item"><a href="{{ action('TenantController@create')}}" class="btn btn-secondary">Add New Tenant</a></li> --}}
                  </ol>
                </div>
              </div>
            </div><!-- /.container-fluid -->
          </section>

        <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Tenant Profile</h3>

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
                  <th>Email </th>
                  <th>Phone Number</th>

                  <th></th>
                </tr>
              </thead>
              <tbody>
                           
                <tr>
                 <td>{{$tenant->firstname}}</td>
                  <td>{{$tenant->lastname}}</td>
                  <td>{{$tenant->email}}</td>
                  <td>{{$tenant->phone_number}}</td>
                  
                  <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                    <a href="{{route('tenant.edit',$tenant->id)}}" class="btn btn-info"><i class="fas fa-eye">Edit</i></a>
                      {{-- <a href="#" class="btn btn-danger"><i class="fas fa-trash">Delete</i></a> --}}
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
            <h3 class="card-title">  Occupant In</h3>
    
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
                  <th>House Number</th>
                  <th>House Type</th>
                  <th>Apartment</th>
                  <th>Rented On</th>
                  <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                    <a href="#" class="btn btn-info"><i class="fas fa-eye">Vacate Tenant</i></a>
                    </div>
                  </td>
                </tr>
              </thead>
            </table>
          </div>
                <hr>
                {{-- Overdue Payments --}}
          <div class="card-header">
            <h3 class="card-title">  Current OverPayments </h3>
    
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
                  <th>Amount</th>
                </tr>
              </thead>
            </table>
          </div>
                <hr>
                {{-- Tenant Invoice --}}
                <div class="card-header">
                  <h3 class="card-title">  Tenant Invoice</h3>
          
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
                        <th>Month</th>
                        <th>Status</th>
                
                      </tr>
                    </thead>
                  </table>
                </div>
                        {{-- Tenant Depoist --}}
                        <hr>
                        <div class="card-header">
                          <h3 class="card-title">  Tenant Deposit </h3>
                  
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
                                <th>Amount</th>
                                <th>For House</th>
                                <th>From</th>
                              </tr>
                            </thead>
                          </table>
                        </div>
                              <hr>
                              {{-- Tenant Placement Amount --}}
                              <hr>
                              <div class="card-header">
                                <h3 class="card-title"> Tenant Placement Amount </h3>
                        
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
                                      <th>Amount</th>
                                      <th>For House</th>
                                      <th>Month</th>
                                    </tr>
                                  </thead>
                                </table>
                              </div>
                                  <tbody>
                                    <hr>
        </div>
        <!-- /.card -->
      
    </div>
    
    
  @endsection