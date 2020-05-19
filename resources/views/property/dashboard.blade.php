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
                <li class="breadcrumb-item"><a href="{{ action("PropertyController@index")}}" class="btn btn-secondary">Landlord Contract Form</a></li>
                <li class="breadcrumb-item"><a href="{{ action("PropertyController@index")}}" class="btn btn-secondary">Billing</a></li>
                <li class="breadcrumb-item"><a href="{{ action("PropertyController@index")}}" class="btn btn-secondary">Manage Units</a></li>
              <li class="breadcrumb-item"><a href="{{ action("PropertyController@create")}}" class="btn btn-secondary">Add New Property</a></li>
                
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
              <th>Property Monthly Rev</th>
              <th>Property Annualized</th>
              <th></th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <td>Functional-requirements.docx</td>
              <td>49.8005 kb</td>
              <td>5</td>
              <td>Active</td>
              <td>Functional-requirements.docx</td>
              <td>49.8005 kb</td>
              <td>5</td>
              <td>Active</td>
              <td>Active</td>
              <td class="text-right py-0 align-middle">
                <div class="btn-group btn-group-sm">
                  <a href="#" class="btn btn-info"><i class="fas fa-eye">Delete</i></a>
                  <a href="#" class="btn btn-danger"><i class="fas fa-trash">Update</i></a>
                </div>
              </td>
         

          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
<div class="row">
  <div class="col-12">
    <a href="#" class="btn btn-secondary">Cancel</a>
    <input type="submit" value="Save Changes" class="btn btn-success float-right">
  </div>
</div>

       
</div>
@endsection