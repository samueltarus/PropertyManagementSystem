
@extends('dashboard.layouts')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('Prepare Invoice For Each House Occupied') }}</div>

              <div class="card-body">
              <form method="POST" action="{{action('PropertyController@store')}}">
                      @csrf


                      <div class="form-group row">
                          <label for="property_name" class="col-md-4 col-form-label text-md-right">{{ __('Apartment Name') }}</label>

                          <div class="col-md-6">
                              <input id="property_name" type="text" class="form-control @error('property_name') is-invalid @enderror" name="property_name" value="{{ old('property_name') }}" required autocomplete="property_name" autofocus>

                              @error('property_name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                     
                      <div class="form-group row">
                        <label for="house_number" class="col-md-4 col-form-label text-md-right">{{ __('House Number') }}</label>

                        <div class="col-md-6">
                            <input id="house_number" type="text" class="form-control @error('house_number') is-invalid @enderror" name="house_number" value="{{ old('house_number') }}" required autocomplete="house_number" autofocus>
                           
                            @error('apartments_type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="month" class="col-md-4 col-form-label text-md-right">{{ __('Month') }}</label>

                        <div class="col-md-6">
                            <input id="month" type="month" class="form-control @error('month') is-invalid @enderror" name="month" value="{{ old('month') }}" required autocomplete="month" autofocus>

                            @error('month')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="year" class="col-md-4 col-form-label text-md-right">{{ __('Year ') }}</label>

                        <div class="col-md-6">
                            <input id="year" type="year" class="form-control @error('year') is-invalid @enderror" name="year" value="{{ old('year') }}" required autocomplete="year" autofocus>

                            @error('year')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <hr>
                    
                    <h3>Important Billing</h3>
                    
                    <div class="row">
                        <div class="col-sm-6">
                          <!-- checkbox -->
                          <div class="form-group clearfix">
                            <div class="icheck-primary d-inline">
                              <input type="checkbox" id="checkboxPrimary1" >
                              <label for="checkboxPrimary1">
                                  Water Bill
                              </label>
                            </div>
                            <div class="icheck-primary d-inline">
                              <input type="checkbox" id="checkboxPrimary2">
                              <label for="checkboxPrimary2">
                                  Power Bill
                              </label>
                            </div>
                            <div class="icheck-primary d-inline">
                              <input type="checkbox" id="checkboxPrimary3" >
                              <label for="checkboxPrimary3">
                                Maitenance Bill
                              </label>
                            </div>
                          </div>
                        </div>
                    </div>

                    

                      <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  {{ __('Register') }}
                              </button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
  @endsection
