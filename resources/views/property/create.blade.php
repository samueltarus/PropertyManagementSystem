
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
                        <label for="apartments_type" class="col-md-4 col-form-label text-md-right">{{ __('Apartment Type') }}</label>

                        <div class="col-md-6">
                            {{-- <input id="propertyType" type="text" class="form-control @error('propertyType') is-invalid @enderror" name="propertyType" value="{{ old('propertyType') }}" required autocomplete="propertyType" autofocus> --}}
                            <select name="apartments_type" id="apartments_type" class="form-control">

                                @foreach ($apartments_type as $apartments_type) 
                                <option value="{{$apartments_type->apartments_type}} ">
                                    {{  $apartments_type->apartments_type  }}
                                </option>
                                @endforeach
                            </select>
                            @error('apartments_type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="county" class="col-md-4 col-form-label text-md-right">{{ __('County') }}</label>

                        <div class="col-md-6">
                            <input id="county" type="text" class="form-control @error('county') is-invalid @enderror" name="county" value="{{ old('county') }}" required autocomplete="county" autofocus>

                            @error('county')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="town" class="col-md-4 col-form-label text-md-right">{{ __('Town ') }}</label>

                        <div class="col-md-6">
                            <input id="town" type="text" class="form-control @error('town') is-invalid @enderror" name="town" value="{{ old('town') }}" required autocomplete="town" autofocus>

                            @error('town')
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
                        <label for="property_description" class="col-md-4 col-form-label text-md-right">{{ __('Property Description ') }}</label>

                        <div class="col-md-6">
                            <input id="property_description" type="text" class="form-control @error('property_description') is-invalid @enderror" name="property_description" value="{{ old('property_description') }}" required autocomplete="property_description" autofocus>

                            @error('property_description')
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
                        <label for="management_fee" class="col-md-4 col-form-label text-md-right">{{ __('Management Fee Percentage %') }}</label>

                        <div class="col-md-6">
                            <input id="management_fee" type="text" class="form-control @error('management_fee') is-invalid @enderror" name="management_fee" value="{{ old('management_fee') }}" required autocomplete="management_fee" autofocus>

                            @error('management_fee')
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
