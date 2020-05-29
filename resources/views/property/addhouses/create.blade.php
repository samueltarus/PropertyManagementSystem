
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
                           {{-- <input id="unitNumber" type="text" class="form-control @error('unitNumber') is-invalid @enderror" name="unitNumber" value="{{ old('unitNumber') }}" required autocomplete="unitNumber" autofocus> --}}
                            <select name="propertyName" id="propertyName" class="form-control">

                                @foreach ($propertyName as $propertyName) 
                                <option value="{{$propertyName->propertyName}} ">
                                    {{  $propertyName->propertyName  }}
                                </option>
                                @endforeach
                            </select>
                             @error('propertyName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                     </div>
                        
                 </div>
                      
                      <div class="form-group row">
                        <label for="houseNumber" class="col-md-4 col-form-label text-md-right">{{ __('House Number') }}</label>

                        <div class="col-md-6">
                            <input id="houseNumber" type="text" class="form-control @error('houseNumber') is-invalid @enderror" name="houseNumber" value="{{ old('houseNumber') }}" required autocomplete="houseNumber" autofocus>

                            @error('houseNumber')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="houseType" class="col-md-4 col-form-label text-md-right">{{ __('House Type') }}</label>

                        <div class="col-md-6">
                            {{-- <input id="houseType" type="text" class="form-control @error('houseType') is-invalid @enderror" name="houseType" value="{{ old('houseType') }}" required autocomplete="houseType" autofocus> --}}
                            <select name="houseType" id="houseType" class="form-control">

                                @foreach ($houseType as $houseType) 
                                <option value="{{$houseType->houseType}} ">
                                    {{  $houseType->houseType  }}
                                </option>
                                @endforeach
                            </select>
                            @error('houseType')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="monthlyRent" class="col-md-4 col-form-label text-md-right">{{ __('Monthly Rent') }}</label>

                        <div class="col-md-6">
                            <input id="monthlyRent" type="text" class="form-control @error('monthlyRent') is-invalid @enderror" name="monthlyRent" value="{{ old('monthlyRent') }}" required autocomplete="monthlyRent" autofocus>

                            @error('monthlyRent')
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
