
@extends('dashboard.layouts')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('Allocate    Units') }}</div>

              <div class="card-body">
              <form id="assignhouses" method="POST" action="{{action('ManageTenantController@store')}}">
                      @csrf
                      {{ csrf_field() }}
                     <div class="form-group row">

                       <label for="property_name" class="col-md-4 col-form-label text-md-right">{{ __('Property Name') }}</label>
                       <div class="col-md-6">
                           {{-- <input id="property_name" type="text" class="form-control @error('property_name') is-invalid @enderror" name="property_name" value="{{ old('property_name') }}" required autocomplete="property_name" autofocus> --}}
                            <select name="property_name" class="property_name" id="property_name" class="form-control " value="property_name">
                                
                               

                                @foreach ($property_name as $property_name)
                                
                                 <option value="{{$property_name->id}} "> {{$property_name->property_name}}     </option>
                                
                                @endforeach

                            </select>
                             @error('property_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                     </div>
                        
                 </div>
                 <div class="form-group row">

                    <label for="house_number" class="col-md-4 col-form-label text-md-right">{{ __('House Number') }}</label>
                    <div class="col-md-6">
                        {{-- <input id="house_number" type="text" class="form-control @error('house_number') is-invalid @enderror" name="house_number" value="{{ old('house_number') }}" required autocomplete="unitNumber" autofocus> --}}
                          <select name="house_number"   class="house_number" id="house_number" class="form-control"  value="house_number"> 
                              
                            <option value="0" disabled="true" selected="true">Select House Number</option>
{{--                         
                           @foreach ($house_number as $house_number) 
                             <option value="{{$house_number->house_number}} ">
                                 {{  $house_number->house_number  }}
                             </option>
                             @endforeach  --}}
                             
                         </select> 
                          @error('house_number')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                         @enderror
                  </div>
                     
              </div>
                      
                      <div class="form-group row">
                        <label for="monthly_rent" class="col-md-4 col-form-label text-md-right">{{ __('Predifened Monthly Rent') }}</label>

                        <div class="col-md-6">
                            <input id="monthly_rent" type="text"  class="monthly_rent"  class="form-control @error('monthly_rent') is-invalid @enderror" name="monthly_rent" value="{{ old('monthly_rent') }}" required autocomplete="monthly_rent" autofocus>
                            
                            @error('monthly_rent')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tenant_ID" class="col-md-4 col-form-label text-md-right">{{ __('Tenant ID') }}</label>

                        <div class="col-md-6">
                            <input id="tenant_ID" type="text" class="form-control @error('tenant_ID') is-invalid @enderror" name="tenant_ID" value="{{ old('tenant_ID') }}" required autocomplete="tenantID" autofocus>
                   
                            @error('tenant_ID')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tenant_name" class="col-md-4 col-form-label text-md-right">{{ __('Tenant Firstname') }}</label>

                        <div class="col-md-6">
                            <input id="tenant_name" type="text" class="form-control @error('tenant_name') is-invalid @enderror" name="tenant_name" value="{{ old('tenant_name') }}" required autocomplete="tenant_name" autofocus>

                            @error('tenant_name')
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
                        <label for="rent_paid" class="col-md-4 col-form-label text-md-right">{{ __('Rent Amount Paid') }}</label>

                        <div class="col-md-6">
                            <input id="rent_paid" type="text" class="form-control @error('rent_paid') is-invalid @enderror" name="rent_paid" value="{{ old('rent_paid') }}" required autocomplete="rent_paid" autofocus>

                            @error('rent_paid')
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">


    $('#assignhouse').on('submit',function(event){
      event.preventDefault();

      property_name = $('#property_name').val();
      house_number = $('#house_number').val();
      monthly_rent = $('#monthly_rent').val();
      tenant_ID = $('#tenant_ID').val();
      tenant_name = $('#tenant_name').val();
      deposit = $('#deposit').val();
      rent_paid = $('#rent_paid').val();
      


      $.ajax({
        url:'{!!URL::to('/tenant/assignhouses')!!}',
        type:"POST",
        data:{
          "_token": "{{ csrf_token() }}",
          property_name:property_name,
          house_number:house_number,
          monthly_rent:monthly_rent,
          tenant_ID:tenant_ID,
          tenant_name:tenant_name,
          deposit:deposit,
          rent_paid:rent_paid,
        },
        success:function(response){
          console.log(response);
        },
       });
      });

</script>

  
