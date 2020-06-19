
@extends('dashboard.layouts')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('Update Image') }}</div>

              <div class="card-body">
              <form enctype="multipart/form-data" method="POST" action="{{URL::to('/update-profile',$landlords->id)}}">
                      @csrf

                    
                    <div class="form-group row">
                        <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Upload Image') }}</label>

                        <div class="col-md-6">
                            <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="old('avatar') }}" required autocomplete="avatar">

                            @error('avatar')
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