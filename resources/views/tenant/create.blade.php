
@extends('tenant.layouts')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('Add Tenant') }}</div>

              <div class="card-body">
              <form method="POST" action="{{action('TenantController@store')}}">
                      @csrf

                      <div class="form-group row">
                          <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                          <div class="col-md-6">
                              <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

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
                            <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                            @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('User Name') }}</label>

                        <div class="col-md-6">
                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="passport" class="col-md-4 col-form-label text-md-right">{{ __('ID Number/PassPort') }}</label>

                        <div class="col-md-6">
                            <input id="passport" type="text" class="form-control @error('passport') is-invalid @enderror" name="passport" value="{{ old('passport') }}" required autocomplete="passport" autofocus>

                            @error('passport')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Physical Address') }}</label>

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
                        <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Contact PhoneNumber') }}</label>

                        <div class="col-md-6">
                            <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>

                            @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                      <div class="form-group row">
                          <label for="occupation" class="col-md-4 col-form-label text-md-right">{{ __('Occupation') }}</label>

                          <div class="col-md-6">
                              {{-- <input id="occupation" type="text" class="form-control @error('occupation') is-invalid @enderror" name="occupation" value="{{ old('occupation') }}" required autocomplete="occupation" autofocus> --}}
                              <select name="occupation" id="occupation" class="form-control">

                                @foreach ($occupation as $occupation) 
                                <option value="{{$occupation->occupation}} ">
                                    {{  $occupation->occupation  }}
                                </option>
                                @endforeach
                            </select>
                              @error('occupation')
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
