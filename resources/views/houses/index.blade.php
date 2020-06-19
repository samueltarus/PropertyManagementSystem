@extends('dashboard.layouts')

@section('content')
  <!-- /.content-header -->
  <div class="container">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-3">
              <h1>All Houses</h1>
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
          <h3 class="card-title">List of All Houses </h3>
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
              <th>Apartment/Building</th>
              <th>House Number</th>
              <th>House Type</th>
              <th>Rent</th>
              <th>County</th>
              <th>Town</th>
              <th>Location</th>
              <th>Owner</th>
              

              <th></th>
            </tr>
          </thead>
          <tbody>

            @foreach ($house  as $house)

            <tr>
          <td>{{$house->property_name}}</td>
          <td>{{$house->house_number}}</td>
           <th>{{$house->house_type}}</th>
          <td>{{$house->monthly_rent}}</td>
          <td>{{$house->county}}</td>
          <td>{{$house->town}}</td>
          <td>{{$house->location}}</td>
          <td>{{$house->username}}</td>
         
          
              <td class="text-right py-0 align-middle">
                <div class="btn-group btn-group-sm">
                  @if ($house->house_status==0)
                  <a class="btn btn-danger" href="{{URL::to('/unactive_house/'.$house->id)}}">Status
                          <i class="fas fa-thumbs-down"></i>  
                      </a>
                      @else
                      <a class="btn btn-success" href="{{URL::to('/active_house/'.$house->id)}}">Status
                          <i class="fas fa-thumbs-up"></i>  
                      </a> 
                      @endif
                  <a href="{{route('houses.edit',$house->id)}}" class="btn btn-info"> <i class="fas fa-eye">Edit</i></a>
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
