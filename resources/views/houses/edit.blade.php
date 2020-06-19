
@extends('dashboard.layouts')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('Edit Property Details') }}</div>

              <div class="card-body">
                <form method="POST" action="{{ action('HousesController@update',$houses->id)}}">
                      @csrf
                    @method('PUT')
                      <input type="hidden" name="_method" value="PATCH" />
                      
                      <div class="form-group row">
                          <label for="house_number" class="col-md-4 col-form-label text-md-right">{{ __('Apartment Name') }}</label>

                          <div class="col-md-6">
                              {{-- <input id="house_number" type="text" class="form-control @error('house_number') is-invalid @enderror" name="house_number" value="{{ $house->house_number }}" required autocomplete="house_number" autofocus> --}}
                              <select name="house_number" id="house_number" class="form-control">

                                @foreach ($house as $house_number) 
                                <option value="{{$house_number->house_number}} ">
                                    {{  $house_number->house_number  }}
                                </option>
                                @endforeach
                            </select>
                              @error('house_number')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                     
                      <div class="form-group row">
                        <label for="monthly_rent" class="col-md-4 col-form-label text-md-right">{{ __('Apartment Type') }}</label>

                        <div class="col-md-6">
                            {{-- <input id="propertyType" type="text" class="form-control @error('propertyType') is-invalid @enderror" name="propertyType" value="{{ old('propertyType') }}" required autocomplete="propertyType" autofocus> --}}
                            <select name="monthly_rent" id="apartments_type" class="form-control">

                                @foreach ($monthly_rent as $monthly_rent) 
                                <option value="{{$monthly_rent->monthly_rent}} ">
                                    {{  $monthly_rent->monthly_rent  }}
                                </option>
                                @endforeach
                            </select>
                            @error('apartmapartments_typeentsType')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="county" class="col-md-4 col-form-label text-md-right">{{ __('County ') }}</label>

                        <div class="col-md-6">
                            {{-- <input id="county" type="text" class="form-control @error('county') is-invalid @enderror" name="county" value="{{ $house->apartments_type }}" required autocomplete="county" autofocus> --}}
                            <select name="apartments_type" id="apartments_type" class="form-control">

                                @foreach ($apartments_type as $apartments_type) 
                                <option value="{{$apartments_type->apartments_type}} ">
                                    {{  $apartments_type->apartments_type  }}
                                </option>
                                @endforeach
                            </select>
                            @error('county')
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
