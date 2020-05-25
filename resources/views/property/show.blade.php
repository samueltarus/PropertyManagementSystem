@extends('property.layouts')

@section('content')
  <!-- /.content-header -->
  <div class="container">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-3">
              <h1>All Properties</h1>
            </div>
            <div class="col-sm-9">
              <ol class="breadcrumb float-sm-right">
                
              <li class="breadcrumb-item"><a href="{{route('property.index')}}" class="btn btn-primary">Home</a></li>

              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
    <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">All properties</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
          </div>
        </div>
    <div class="card-body p-0">
        <table class="table">
          <thead>
            <tr>
              <th>Property Name</th>
              <th>Property Type</th>
              <th>Property Description</th>
              <th>Property of Units</th>
              <th>Address</th>
              <th>Phone Number</th>
              <th>Property Manager</th>

              <th></th>
            </tr>
          </thead>
          <tbody>

          @foreach ($properties as $Property)

            <tr>
              <td>{{$Property->propertyName}}</td>
              <td>{{$Property->propertyType}}</td>
              <td>{{$Property->propertyDescription}}</td>
              <td>{{$Property->numberOfUnits}}</td>
              <td>{{$Property->address}}</td>
              <td>{{$Property->phoneNumber}}</td>
              <td>{{$Property->propertyManager}}</td>
              <td class="text-right py-0 align-middle">
                <div class="btn-group btn-group-sm">
                  <a href="#" class="btn btn-info"><i class="fas fa-eye">Delete</i></a>
                  <a href="#" class="btn btn-danger"><i class="fas fa-trash">Update</i></a>
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
