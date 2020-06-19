
@extends('dashboard.layouts')

@section('content')
    <div class="container">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-3">
                  <h1>Landlord Income</h1>
                </div>
                <div class="col-sm-9">
                  <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{ action("LandlordController@index")}}" class="btn btn-secondary">Home</a></li>
                  {{-- <li class="breadcrumb-item"><a href="#" class="btn btn-secondary">Show Landlord Detail</a></li> --}}
                  </ol>
                  
                </div>
              </div>
              <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                  <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div><!-- /.container-fluid -->
          </section>
          <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Total Rent Collection</span>
                  <span class="info-box-number">
                    10
                    <small>%</small>
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Total Placement Fee Collection</span>
                  <span class="info-box-number">41,410</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
  
            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>
  
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Landlord Revenue  On Placement</span>
                  <span class="info-box-number">760</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Landlord Revenue On Rent</span>
                  <span class="info-box-number">2,000</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
          </div>
          
        <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Landlord Income</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
           
               

        <div class="card-body p-0">
            <table class="table">
              <thead>
                <tr>
                  <th>Rent Collections</th>
                  <th>Placement Fee Collection</th>
                
                  <th></th>
                </tr>
              </thead>
              <tbody>

               

                   <tr>
               
                  
                  
                <tr>


              </tbody>
              
             
            </table>
           {{-- {{ $landlords->links() }} --}}
          </div>
          
          
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    {{-- <div class="row">
      <div class="col-12">
        <a href="#" class="btn btn-secondary">Cancel</a>
        <input type="submit" value="Save Changes" class="btn btn-success float-right">
      </div>
    </div> --}}

    </div>
  @endsection
