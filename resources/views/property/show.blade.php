@extends('property.layouts')

@section('content')
  <!-- /.content-header -->
  <div class="container">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-3">
              <h1>Appartment Details</h1>
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
          <h3 class="card-title"> Appartment Details</h3>

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
              <th>Town</th>
              <th>Location</th>
              <th>Management Fee</th>
              <th>Property Manager</th>

              <th></th>
            </tr>
          </thead>
          <tbody>


            <tr>
              <td>{{$property->property_name}}</td>
              <td>{{$property->apartments_type}}</td>
              <td>{{$property->County}}</td>
              <td>{{$property->town}}</td>
              <td>{{$property->location}}</td>
              <td>{{$property->management_fee}}</td>
              <td>{{$property->username}}</td>
              <td class="text-right py-0 align-middle">
                <div class="btn-group btn-group-sm">
                <a href="{{route('property.edit',$property->id)}}" class="btn btn-info"><i class="fas fa-eye">Edit</i></a>
                  <a href="#" class="btn btn-danger"><i class="fas fa-trash">Delete</i></a>
                </div>
              </td>
              <tr>

                  

          </tbody>
        </table>
      </div>

      <hr>
      <div class="card-header">
        <h3 class="card-title">  Apartment Houses</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
        </div>
      </div>
      
      <hr>
      <!-- /.card-body -->
      <div class="card-body p-0">
        <table class="table">
          <thead>
            <tr>
              <th>House Number</th>
              <th>House Type</th>
              <th>Status</th>
              <th>Rent</th>
              {{-- <th>Property Owner</th> --}}

              <th></th>
            </tr>
          </thead>
          <tbody>

          {{-- @foreach ($property  as $property=> $value) --}}

            {{-- <tr>
              <td>{{$value->propertyName}}</td>
              <td>{{$value->apartmentsType}}</td>
              <td>{{$value->townLocation}}</td>
              <td>{{$value->location}}</td>
              <td>{{$value->username}}</td>
              <td class="text-right py-0 align-middle">
                {{-- <div class="btn-group btn-group-sm">
                  <a href="{{ route('property.show',$value['id'])}}" class="btn btn-info"> <i class="fas fa-eye">Details</i></a>

                  {{-- <a href="{{ route('property.destroy',$value['id'])}}" class="btn btn-danger"><i class="fas fa-trash">Delete</i></a> --}}
                  
{{--                  
                </div> --}}

              {{-- </td>
              <tr>

          @endforeach --}}

          </tbody>
        </table>
      </div>
    </div>
    
    <!-- /.card -->
  </div>
  

@endsection
