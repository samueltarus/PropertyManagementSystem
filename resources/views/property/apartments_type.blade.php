
@extends('dashboard.layouts')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('Add Property') }}</div>

              <div class="card-body">
              <form method="POST" action="{{URL::to('update-apartments_type')}}">
                      @csrf


                   <div class="form-group row">
                        <label for="apartments_type" class="col-md-4 col-form-label text-md-right">{{ __('Apartments Type') }}</label>

                        <div class="col-md-6">
                            <input id="apartments_type" type="text" class="form-control @error('apartments_type') is-invalid @enderror" name="apartments_type" value="{{ old('apartments_type') }}" required autocomplete="apartments_type" autofocus>

                            @error('apartments_type')
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
