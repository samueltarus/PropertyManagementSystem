
@extends('property.layouts')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('Edit Tenant Details') }}</div>
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
                  
              <form method="post" action="{{ action('TenantController@update',$id)}}">
                      @csrf
                      <input type="hidden" name="_method" value="PATCH" />
                  
                      <div class="form-group row">
                          <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                          <div class="col-md-6">
                              <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ $tenant->firstname }}" required autocomplete="firstname" autofocus>

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
                            <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ $tenant->lastname  }}" required autocomplete="lastname" autofocus>

                            @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="propertyName" class="col-md-4 col-form-label text-md-right">{{ __('Property Name') }}</label>

                        <div class="col-md-6">
                            <input id="propertyName" type="text" class="form-control @error('propertyName') is-invalid @enderror" name="propertyName" value="{{ $tenant->propertyName }}" required autocomplete="propertyName" autofocus>

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
                            <input id="unitNumber" type="text" class="form-control @error('unitNumber') is-invalid @enderror" name="unitNumber" value="{{ $tenant->unitNumber }}" required autocomplete="unitNumber" autofocus>

                            @error('unitNumber')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                   
                 
                      <div class="form-group row">
                          <label for="phoneNumber" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                          <div class="col-md-6">
                              <input id="phoneNumber" type="text" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" value="{{  $tenant->phoneNumber  }}" required autocomplete="phoneNumber" autofocus>

                              @error('phoneNumber')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                        <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                        <div class="col-md-6">
                            <input id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{  $tenant->status  }}" required autocomplete="status" autofocus>

                            @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="rent" class="col-md-4 col-form-label text-md-right">{{ __('Monthly Rent') }}</label>

                        <div class="col-md-6">
                            <input id="rent" type="text" class="form-control @error('rent') is-invalid @enderror" name="rent" value="{{  $tenant->rent  }}" required autocomplete="rent" autofocus>

                            @error('rent')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="services" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                        <div class="col-md-6">
                            <input id="services" type="text" class="form-control @error('services') is-invalid @enderror" name="services" value="{{  $tenant->services  }}" required autocomplete="services" autofocus>

                            @error('services')
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
