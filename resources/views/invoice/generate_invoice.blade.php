
@extends('dashboard.layouts')

@section('content')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Invoice</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Invoice</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="callout callout-info">
          <h5><i class="fas fa-info"></i> Note:</h5>
          This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
        </div>


        <!-- Main content -->
        <div class="invoice p-3 mb-3">
          <!-- title row -->
          <div class="row">
            <div class="col-12">
              <h4>
                <i class="fas fa-globe"></i> Modern Houses Company
                <small class="float-right">Date: 2/10/2014</small>
              </h4>
            </div>
            <!-- /.col -->
          </div>
          <!-- info row -->
          <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
              From
              <address>
                <strong>Modern Houses Company</strong><br>
                Sil, Suite 600<br>
                San Francisco, CA 94107<br>
                Phone: (254) 0797 093 681<br>
                Email: info@modernhousescompany.com
              </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
              To
              <address>
                <strong>Tenant Name</strong><br>
                Apartment<br>
                House Type<br>
                House Number<br>
                Phone: tenant Phone_number<br>
                Email: tenant.com
              </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
              <b>Invoice #007612</b><br>
              <br>
              <b>Order ID:</b> 4F3S8J<br>
              <b>Payment Due:</b> 2/22/2014<br>
              <b>Account:</b> 968-34567 <br>
              <b>Status :</b>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <!-- Table row -->
          <div class="row">
            <div class="col-12 table-responsive">
              <table class="table table-striped">
                <p class="lead">Amount Due 2/22/2014</p>

                <div class="table-responsive">
                  <table class="table">
                        <thead>
                         <tr>
                            <th>#Payments Details</th>
                            <th>Total</th>
                          </tr>
                     </thead>
                    <tr>
                        <th>House Rent</th>
                      <td>$250.30</td>
                    </tr>
                    <tr>
                        <th>Late Payment Penalty(15%)</th>
                      <td>$10.34</td>
                    </tr>
                    <tr>
                     
                    <th>Previous Monthly Balance</th>
                      <td>$5.80</td>
                    </tr>
                  
                  </table>
                </div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <div class="row">
          
            <div class="col-9">
              <p class="lead">Amount Due 2/22/2014</p>

              <div class="table-responsive">
                <table class="table">
                  <tr>
                    <th style="width:50%">Subtotal:</th>
                    <td>$250.30</td>
                  </tr>
                  <tr>
                    <th>Tax (9.3%)</th>
                    <td>$10.34</td>
                  </tr>
                  <tr>
                    <th>OverPayment:</th>
                    <td>$5.80</td>
                  </tr>
                  <tr>
                    <th>Total:</th>
                    <td>$265.24</td>
                  </tr>
                </table>
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
         

          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-12">
            <a href="{{URL::to('print-invoice')}}" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> View Invoice</a>
              <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                Payment
              </button>
              <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                <i class="fas fa-download"></i> Generate PDF
              </button>
            </div>
          </div>
        </div>
        <!-- /.invoice -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
  @endsection
