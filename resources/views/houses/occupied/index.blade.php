@extends('houses.layouts')

@section('content')
  <!-- /.content-header -->
  <div class="container">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-3">
              <h1>Occupied Houses</h1>
            </div>
            <div class="col-sm-9">
              <ol class="breadcrumb float-sm-right">
                {{-- <li class="breadcrumb-item"><a href="#" class="btn btn-primary">Landlord Contract Form</a></li> --}}
                {{-- <li class="breadcrumb-item"><a href="#" class="btn btn-primary">Billing</a></li> --}}
                {{-- <li class="breadcrumb-item"><a href="{{ route ('propert.addhouses.index')}}" class="btn btn-primary">Manage Units</a></li> --}}
                <li class="breadcrumb-item"><a href="{{ route('property.index')}}" class="btn btn-primary">Home</a></li>

              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
    <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">All Houses</h3>
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
              <th>House Number</th>
              <th>House Type</th>
              <th>Building |Apartment</th>
              <th>Teant Name</th>
              <th>Property Owner</th>

              <th></th>
            </tr>
          </thead>
          <tbody>

        

            <tr>
             
              <td class="text-right py-0 align-middle">
                <div class="btn-group btn-group-sm">
                  {{-- <a href="#" class="btn btn-info"> <i class="fas fa-eye">Edit</i></a> --}}

                  <a href="#" class="btn btn-danger"><i class="fas fa-trash">Vacate Tenant</i></a>
                  
                 
                </div>

              </td>
              <tr>

        

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
