
@extends('property.layouts')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('Add Units') }}</div>

              <div class="card-body">
              <form method="POST" action="{{action('ManagePropertiesController@store')}}">
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
                        <label for="unitNumber" class="col-md-4 col-form-label text-md-right">{{ __('Unit Number') }}</label>

                        <div class="col-md-6">
                            <input id="unitNumber" type="text" class="form-control @error('unitNumber') is-invalid @enderror" name="unitNumber" value="{{ old('unitNumber') }}" required autocomplete="unitNumber" autofocus>

                            @error('unitNumber')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bedrooms" class="col-md-4 col-form-label text-md-right">{{ __('Number of Bedrooms') }}</label>

                        <div class="col-md-6">
                            <input id="bedrooms" type="text" class="form-control @error('bedrooms') is-invalid @enderror" name="bedrooms" value="{{ old('bedrooms') }}" required autocomplete="bedrooms" autofocus>

                            @error('bedrooms')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bathrooms" class="col-md-4 col-form-label text-md-right">{{ __('Number Of Bathrooms') }}</label>

                        <div class="col-md-6">
                            <input id="bathrooms" type="text" class="form-control @error('bathrooms') is-invalid @enderror" name="bathrooms" value="{{ old('bathrooms') }}" required autocomplete="bathrooms" autofocus>

                            @error('bathrooms')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="propertyManager" class="col-md-4 col-form-label text-md-right">{{ __('Propery Manager') }}</label>

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
