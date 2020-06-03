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
              <th>Apartment Name</th>
              <th>Apartment Type</th>
              <th>Town</th>
              <th>Location</th>
              <th>Property Owner</th>

              <th></th>
            </tr>
          </thead>
          <tbody>

          @foreach ($properties  as $Property=> $value)

            <tr>
              <td>{{$value->property_name}}</td>
              <td>{{$value->apartments_type}}</td>
              <td>{{$value->county}}</td>
              <td>{{$value->town}}</td>
              <td>{{$value->location}}</td>
              <td>{{$value->username}}</td>
              <td class="text-right py-0 align-middle">
                <div class="btn-group btn-group-sm">
                  <a href="{{ route('property.show',$value['id'])}}" class="btn btn-info"> <i class="fas fa-eye">Details</i></a>

                  {{-- <a href="{{ route('property.destroy',$value['id'])}}" class="btn btn-danger"><i class="fas fa-trash">Delete</i></a> --}}
                  
                 
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
