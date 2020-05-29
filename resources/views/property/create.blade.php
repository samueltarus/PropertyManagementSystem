
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
                          <label for="propertyName" class="col-md-4 col-form-label text-md-right">{{ __('Apartment Name') }}</label>

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
                        <label for="apartmentsType" class="col-md-4 col-form-label text-md-right">{{ __('Apartment Type') }}</label>

                        <div class="col-md-6">
                            {{-- <input id="propertyType" type="text" class="form-control @error('propertyType') is-invalid @enderror" name="propertyType" value="{{ old('propertyType') }}" required autocomplete="propertyType" autofocus> --}}
                            <select name="apartmentsType" id="apartmentsType" class="form-control">

                                @foreach ($apartmentsType as $apartmentsType) 
                                <option value="{{$apartmentsType->apartmentsType}} ">
                                    {{  $apartmentsType->apartmentsType  }}
                                </option>
                                @endforeach
                            </select>
                            @error('apartmentsType')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="townLocation" class="col-md-4 col-form-label text-md-right">{{ __('Town Location') }}</label>

                        <div class="col-md-6">
                            <input id="townLocation" type="text" class="form-control @error('townLocation') is-invalid @enderror" name="townLocation" value="{{ old('townLocation') }}" required autocomplete="townLocation" autofocus>

                            @error('townLocation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="location" class="col-md-4 col-form-label text-md-right">{{ __(' Location') }}</label>

                        <div class="col-md-6">
                            <input id="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ old('location') }}" required autocomplete="location" autofocus>

                            @error('location')
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
                          <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Property Manager \Landlord') }}</label>

                          <div class="col-md-6">
                              {{-- <input id="propertyManager" type="text" class="form-control @error('propertyManager') is-invalid @enderror" name="propertyManager" value="{{ old('propertyManager') }}" required autocomplete="propertyManager" autofocus> --}}
                              <select name="username" id="username" class="form-control">

                                @foreach ($username as $username) 
                                <option value="{{$username->username}} ">
                                    {{  $username->username  }}
                                </option>
                                @endforeach
                            </select>
                              @error('username')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="form-group row">
                        <label for="managementFee" class="col-md-4 col-form-label text-md-right">{{ __('Management Fee Percentage %') }}</label>

                        <div class="col-md-6">
                            <input id="managementFee" type="text" class="form-control @error('managementFee') is-invalid @enderror" name="managementFee" value="{{ old('managementFee') }}" required autocomplete="managementFee" autofocus>

                            @error('managementFee')
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
