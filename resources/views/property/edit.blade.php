
@extends('property.layouts')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('Update Property') }}</div>
              @if (count($errors)>0)
              <div  class="alert alert-danger">
                  <ul>
                      @foreach ($errors ->all() as $error)
                             <li>{{$error}}</li>
                      @endforeach
                  </ul>
              </div>
                  @endif

              <div class="card-body">
              <form method="post" action="{{ action('PropertyController@update',$id)}}">
                      @csrf
                      <input type="hidden" name="_method" value="PATCH" />

                      

                      <div class="form-group row">
                          <label for="propertyName" class="col-md-4 col-form-label text-md-right">{{ __('Property Name') }}</label>

                          <div class="col-md-6">
                              <input id="propertyName" type="text" class="form-control @error('propertyName') is-invalid @enderror" name="propertyName" value="{{ $property->propertyName }}" required autocomplete="propertyName" autofocus>

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
                            <input id="propertyType" type="text" class="form-control @error('propertyType') is-invalid @enderror" name="propertyType" value="{{ $property->propertyType  }}" required autocomplete="propertyType" autofocus>

                            @error('propertyType')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="propertyDescription" class="col-md-4 col-form-label text-md-right">{{ __('Property Description') }}</label>

                        <div class="col-md-6">
                            <input id="propertyDescription" type="text" class="form-control @error('propertyDescription') is-invalid @enderror" name="propertyDescription" value="{{ $property->propertyDescription }}" required autocomplete="propertyDescription" autofocus>

                            @error('propertyDescription')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="numberOfUnits" class="col-md-4 col-form-label text-md-right">{{ __('Number Of Units') }}</label>

                        <div class="col-md-6">
                            <input id="numberOfUnits" type="text" class="form-control @error('numberOfUnits') is-invalid @enderror" name="numberOfUnits" value="{{ $property->numberOfUnits }}" required autocomplete="numberOfUnits" autofocus>

                            @error('numberOfUnits')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                   
                 
                      <div class="form-group row">
                          <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Property Address') }}</label>

                          <div class="col-md-6">
                              <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{  $property->address  }}" required autocomplete="address" autofocus>

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
                            <input id="phoneNumber" type="text" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" value="{{  $property->phoneNumber  }}" required autocomplete="phoneNumber" autofocus>

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
                            <input id="propertyManager" type="text" class="form-control @error('propertyManager') is-invalid @enderror" name="propertyManager" value="{{  $property->propertyManager  }}" required autocomplete="propertyManager" autofocus>

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
                                  {{ __('Update') }}
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
