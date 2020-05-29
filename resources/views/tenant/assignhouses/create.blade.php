
@extends('tenant.layouts')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('Allocate    Units') }}</div>

              <div class="card-body">
              <form method="POST" action="{{action('ManagetenantController@store')}}">
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
                        {{-- <input id="unitNumber" type="text" class="form-control @error('unitNumber') is-invalid @enderror" name="unitNumber" value="{{ old('unitNumber') }}" required autocomplete="unitNumber" autofocus> --}}
                         <select name="houseNumber" id="houseNumber" class="form-control">

                             @foreach ($houseNumber as $houseNumber) 
                             <option value="{{$houseNumber->houseNumber}} ">
                                 {{  $houseNumber->houseNumber  }}
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
                        <label for="predifenedMonthlyRent" class="col-md-4 col-form-label text-md-right">{{ __('Predifened Monthly Rent') }}</label>

                        <div class="col-md-6">
                            <input id="predifenedMonthlyRent" type="text" class="form-control @error('predifenedMonthlyRent') is-invalid @enderror" name="predifenedMonthlyRent" value="{{ old('predifenedMonthlyRent') }}" required autocomplete="houseNumber" autofocus>

                            @error('predifenedMonthlyRent')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tenantID" class="col-md-4 col-form-label text-md-right">{{ __('Tenant ID') }}</label>

                        <div class="col-md-6">
                            <input id="tenantID" type="text" class="form-control @error('tenantID') is-invalid @enderror" name="tenantID" value="{{ old('tenantID') }}" required autocomplete="tenantID" autofocus>
                   
                            @error('tenantID')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tenantName" class="col-md-4 col-form-label text-md-right">{{ __('Tenant Firstname') }}</label>

                        <div class="col-md-6">
                            <input id="tenantName" type="text" class="form-control @error('tenantName') is-invalid @enderror" name="tenantName" value="{{ old('tenantName') }}" required autocomplete="tenantName" autofocus>

                            @error('tenantName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="deposit" class="col-md-4 col-form-label text-md-right">{{ __('Deposit Amount') }}</label>

                        <div class="col-md-6">
                            <input id="deposit" type="text" class="form-control @error('deposit') is-invalid @enderror" name="deposit" value="{{ old('deposit') }}" required autocomplete="deposit" autofocus>

                            @error('deposit')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="rentPaid" class="col-md-4 col-form-label text-md-right">{{ __('Rent Amount Paid') }}</label>

                        <div class="col-md-6">
                            <input id="rentPaid" type="text" class="form-control @error('rentPaid') is-invalid @enderror" name="rentPaid" value="{{ old('rentPaid') }}" required autocomplete="rentPaid" autofocus>

                            @error('rentPaid')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    
                      <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  {{ __('Finalize Allocation') }}
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
