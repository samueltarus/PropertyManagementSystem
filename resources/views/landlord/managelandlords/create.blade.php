
@extends('landlord.layouts')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('Registration') }}</div>

              <div class="card-body">
              <form method="POST" action="{{action('ManageLandlordController@store')}}">
                      @csrf

                      <div class="form-group row">
                          <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                          <div class="col-md-6">
                              <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                              @error('firstname')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                        <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                        <div class="col-md-6">
                            <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                            @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                   
                      <div class="form-group row">
                          <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('User Name') }}</label>

                          <div class="col-md-6">
                              <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                              @error('username')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                        <label for="phonenumber" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>
  
                        <div class="col-md-6">
                            <input id="phonenumber" type="text" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber" value="{{ old('phonenumber') }}" required autocomplete="phonenumber" autofocus>
  
                            @error('phonenumber')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                      <div class="form-group row">
                          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                          <div class="col-md-6">
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                        <label for="no_apartments" class="col-md-4 col-form-label text-md-right">{{ __('Number Of Appartments') }}</label>

                        <div class="col-md-6">
                            <input id="no_apartments" type="no_apartments" class="form-control @error('no_apartments') is-invalid @enderror" name="no_apartments" value="{{ old('no_apartments') }}" required autocomplete="no_apartments">

                            @error('no_apartments')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="no_units" class="col-md-4 col-form-label text-md-right">{{ __('Number Of Units') }}</label>

                      <div class="col-md-6">
                          <input id="no_units" type="no_units" class="form-control @error('no_units') is-invalid @enderror" name="no_units" value="{{ old('no_units') }}" required autocomplete="no_units">

                          @error('no_units')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="rent" class="col-md-4 col-form-label text-md-right">{{ __('Rent') }}</label>

                    <div class="col-md-6">
                        <input id="rent" type="no_units" class="form-control @error('rent') is-invalid @enderror" name="rent" value="{{ old('rent') }}" required autocomplete="rent">

                        @error('rent')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                  <label for="services_amount" class="col-md-4 col-form-label text-md-right">{{ __('Services Amount') }}</label>

                  <div class="col-md-6">
                      <input id="services_amount" type="services_amount" class="form-control @error('services_amount') is-invalid @enderror" name="services_amount" value="{{ old('services_amount') }}" required autocomplete="services_amount">

                      @error('services_amount')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
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