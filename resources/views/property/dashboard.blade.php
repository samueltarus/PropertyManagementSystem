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
                <li class="breadcrumb-item"><a href="#" class="btn btn-primary">Landlord Contract Form</a></li>
                <li class="breadcrumb-item"><a href="#" class="btn btn-primary">Billing</a></li>
              <li class="breadcrumb-item"><a href="{{ route ('manageUnits.index')}}" class="btn btn-primary">Manage Units</a></li>
              <li class="breadcrumb-item"><a href="{{ route('property.create')}}" class="btn btn-primary">Add New Property</a></li>

              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
    <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">All properties</h3>
          @if ($message = Session::get('success'))
          <div class="alert alert-success">
            <p>{{$message}}</p>

          </div>   
          @endif

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
              <th>Total  Units</th>
              <th>Address</th>
              <th>Phone Number</th>
              <th>Property Manager</th>

              <th></th>
            </tr>
          </thead>
          <tbody>

          @foreach ($properties  as $Property=> $value)

            <tr>
              <td>{{$value->propertyName}}</td>
              <td>{{$value->propertyType}}</td>
              <td>{{$value->propertyDescription}}</td>
              <td>{{$value->numberOfUnits}}</td>
              <td>{{$value->address}}</td>
              <td>{{$value->phoneNumber}}</td>
              <td>{{$value->propertyManager}}</td>
              <td class="text-right py-0 align-middle">
                <div class="btn-group btn-group-sm">
                  <a href="{{ route('property.edit',$value['id'])}}" class="btn btn-info"> <i class="fas fa-eye">Update</i></a>
                  <a href="{{ route('property.destroy',$value['id'])}}" class="btn btn-danger"><i class="fas fa-trash">Delete</i></a>
                  
                 
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
  <script>
    $(document).ready(function () {
      $('delete_form').on('submit',function(){
        if (confirm("Are you sure you want to delete it?")) {
          
          return true;

        } else {
          return false;
        }
      
    });
    </script>

@endsection
