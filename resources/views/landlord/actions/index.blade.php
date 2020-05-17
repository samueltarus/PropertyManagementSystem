
@extends('landlord.layouts')

@section('content')
    <div class="container">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-3">
                  <h1>Actions </h1>
                </div>
                <div class="col-sm-9">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ action("ManageLandlordController@index")}}" class="btn btn-secondary">Home</a></li>
                    
                    
                  </ol>
                </div>
              </div>
            </div><!-- /.container-fluid -->
          </section>
        <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Actions</h3>

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
                  <th>Email</th>
                  <th>Status</th>
         
                </tr>
              </thead>
              <tbody>

                
                <tr>
                  <td>Functional-requirements.docx</td>
                  <td>49.8005 kb</td>
                  <td>5</td>
                  <td>Active</td>
                  <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                      <a  href="#" class="btn btn-info"><i class="fas fa-eye">Re-instate</i></a> 
                      <a href="#" class="btn btn-danger"><i class="fas fa-trash">Suspend</i></a>
                    </div>
                  </td>
                <tr>
                 

              </tbody>
            </table>
        
          <!-- /.card-body -->
        </div>
        
      </div>
    </div>

    </div>
  @endsection