
@extends('dashboard.layouts')

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

                       <label for="property_name" class="col-md-4 col-form-label text-md-right">{{ __('Property Name') }}</label>
                       <div class="col-md-6">
                           {{-- <input id="unitNumber" type="text" class="form-control @error('unitNumber') is-invalid @enderror" name="unitNumber" value="{{ old('unitNumber') }}" required autocomplete="unitNumber" autofocus> --}}
                            <select name="property_name" id="property_name" class="form-control">

                                @foreach ($property_name as $property_name) 
                                <option value="{{$property_name->property_name}} ">
                                    {{  $property_name->property_name  }}
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
                        <label for="house_number" class="col-md-4 col-form-label text-md-right">{{ __('House Number') }}</label>

                        <div class="col-md-6">
                            <input id="house_number" type="text" class="form-control @error('house_number') is-invalid @enderror" name="house_number" value="{{ old('house_number') }}" required autocomplete="house_number" autofocus>

                            @error('house_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="house_type" class="col-md-4 col-form-label text-md-right">{{ __('House Type') }}</label>

                        <div class="col-md-6">
                            {{-- <input id="houseType" type="text" class="form-control @error('houseType') is-invalid @enderror" name="houseType" value="{{ old('houseType') }}" required autocomplete="houseType" autofocus> --}}
                            <select name="house_type" id="house_type" class="form-control">

                                @foreach ($house_type as $house_type) 
                                <option value="{{$house_type->house_type}} ">
                                    {{  $house_type->house_type  }}
                                </option>
                                @endforeach
                            </select>
                            @error('house_type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="monthly_rent" class="col-md-4 col-form-label text-md-right">{{ __('Monthly Rent') }}</label>

                        <div class="col-md-6">
                            <input id="monthly_rent" type="text" class="form-control @error('monthly_rent') is-invalid @enderror" name="monthly_rent" value="{{ old('monthly_rent') }}" required autocomplete="monthly_rent" autofocus>

                            @error('monthly_rent')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                  
                    <div class="form-group row">
                        <label for="house_status" class="col-md-4 col-form-label text-md-right">{{ __('House Status') }}</label>
                        <div class="col-md-6">
                          <input type=checkbox  class="input-xlarge" class="form-control @error('monthly_rent') is-invalid @enderror" name="house_status" value="0" required="">
                          @error('house_status')
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
<script type="text/javascript">


</script>
  @endsection
