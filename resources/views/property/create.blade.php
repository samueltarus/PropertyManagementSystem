
@extends('property.layouts')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('Add Property') }}</div>

              <div class="card-body">
              <form method="POST" action="{{action('PropertyController@store')}}">
                      @csrf


                      <div class="form-group row">
                          <label for="propertyName" class="col-md-4 col-form-label text-md-right">{{ __('Property Name') }}</label>

                          <div class="col-md-6">
                              <input id="propertyName" type="text" class="form-control @error('propertyName') is-invalid @enderror" name="propertyName" value="{{ old('propertyName') }}" required autocomplete="propertyName" autofocus>

                              @error('propertyName')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                        <label for="propertyType" class="col-md-4 col-form-label text-md-right">{{ __('Property Type') }}</label>

                        <div class="col-md-6">
                            <input id="propertyType" type="text" class="form-control @error('propertyType') is-invalid @enderror" name="propertyType" value="{{ old('propertyType') }}" required autocomplete="propertyType" autofocus>

                            @error('propertyType')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                      <div class="form-group row">
                        <label for="propertyDescription" class="col-md-4 col-form-label text-md-right">{{ __('Property Description ') }}</label>

                        <div class="col-md-6">
                            <input id="propertyDescription" type="text" class="form-control @error('propertyDescription') is-invalid @enderror" name="propertyDescription" value="{{ old('propertyDescription') }}" required autocomplete="propertyDescription" autofocus>

                            @error('propertyDescription')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="numberOfUnits" class="col-md-4 col-form-label text-md-right">{{ __('Number of Units') }}</label>

                        <div class="col-md-6">
                            <input id="numberOfUnits" type="text" class="form-control @error('numberOfUnits') is-invalid @enderror" name="numberOfUnits" value="{{ old('numberOfUnits') }}" required autocomplete="numberOfUnits" autofocus>

                            @error('numberOfUnits')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                   
                    <div class="form-group row">
                        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                        <div class="col-md-6">
                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phoneNumber" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                        <div class="col-md-6">
                            <input id="phoneNumber" type="text" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" value="{{ old('phoneNumber') }}" required autocomplete="phoneNumber" autofocus>

                            @error('phoneNumber')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                      <div class="form-group row">
                          <label for="propertyManager" class="col-md-4 col-form-label text-md-right">{{ __('Property Manager') }}</label>

                          <div class="col-md-6">
                              <input id="propertyManager" type="text" class="form-control @error('propertyManager') is-invalid @enderror" name="propertyManager" value="{{ old('propertyManager') }}" required autocomplete="propertyManager" autofocus>

                              @error('propertyManager')
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
