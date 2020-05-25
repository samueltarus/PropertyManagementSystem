
@extends('tenant.layouts')

@section('content')
    <div class="container">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-3">
                  <h1>Tenant Information Management</h1>
                  <hr>
                </div>
                <div class="col-sm-9">
                  <ol class="breadcrumb float-sm-right">
     
                    <li class="breadcrumb-item"><a href="{{ action('TenantController@index')}}" class="btn btn-secondary">Home</a></li>
                   
                    <li class="breadcrumb-item"><a href="{{ action('TenantController@create')}}" class="btn btn-secondary">Add New Tenant</a></li>
                  </ol>
                </div>
              </div>
            </div><!-- /.container-fluid -->
          </section>
        <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Property  Management</h3>

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
                  <th>Apartment Name</th>
                  <th>Unit Number</th>
                  <th>Phone Number</th>
                  <th>Status</th>
                  <th>Monthly Rent</th>
                  <th>Essential Services Total</th>

                  <th></th>
                </tr>
              </thead>
              <tbody>

                @foreach ($tenant as $tenant)
                           
                <tr>
                <td>{{$tenant->firstname}}</td>
                  <td>{{$tenant->lastname}}</td>
                  <td>{{$tenant->propertyName}}</td>
                  <td>{{$tenant->unitNumber}}</td>
                  <td>{{$tenant->phoneNumber}}</td>
                  <td>{{$tenant->status}}</td>
                  <td>{{$tenant->rent}}</td>
                  <td>{{$tenant->services}}</td>
                  <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                    <a href="{{route('tenant.edit',$tenant['id'])}}" class="btn btn-info"><i class="fas fa-eye">Update</i></a>
                      <a href="#" class="btn btn-danger"><i class="fas fa-trash">Delete</i></a>
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
    
    
  @endsection