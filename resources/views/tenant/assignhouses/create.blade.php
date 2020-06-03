
@extends('tenant.layouts')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('Allocate    Units') }}</div>

              <div class="card-body">
              <form method="POST" action="{{action('ManageTenantController@store')}}">
                      @csrf

                     <div class="form-group row">

                       <label for="property_name" class="col-md-4 col-form-label text-md-right">{{ __('Property Name') }}</label>
                       <div class="col-md-6">
                           {{-- <input id="unitNumber" type="text" class="form-control @error('unitNumber') is-invalid @enderror" name="unitNumber" value="{{ old('unitNumber') }}" required autocomplete="unitNumber" autofocus> --}}
                            <select name="property_name" id="property_name" class="form-control">
                                <option value="">--select--</option>
                                @foreach ($property_name as $property_name)
                                 <option value="{{$property_name->property_name}} "> 
                                {{$property_name->property_name}}      </option>
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
                        {{-- <input id="unitNumber" type="text" class="form-control @error('unitNumber') is-invalid @enderror" name="unitNumber" value="{{ old('unitNumber') }}" required autocomplete="unitNumber" autofocus> --}}
                         <select name="house_number" id="house_number" class="form-control input-lg dynamic" data-dependent ="house_number">
                          
                           
                   @foreach ($house_number as $house_number) 
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
                        <label for="predifened_monthly_rent" class="col-md-4 col-form-label text-md-right">{{ __('Predifened Monthly Rent') }}</label>

                        <div class="col-md-6">
                            {{-- <input id="predifened_monthly_rent" type="text" class="form-control @error('predifened_monthly_rent') is-invalid @enderror" name="predifened_monthly_rent" value="{{ old('predifened_monthly_rent') }}" required autocomplete="predifened_monthly_rent" autofocus> --}}
                            <select name="predifened_monthly_rent" id="predifened_monthly_rent" class="form-control input-lg dynamic" >
                                <option>--Predifened Monthly Rent--</option>
                                      
                                  @foreach ($monthly_rent as $predifened_monthly_rent) 
                                 <option value="{{$predifened_monthly_rent->predifened_monthly_rent}} ">
                                     {{  $predifened_monthly_rent->predifened_monthly_rent  }}
                                 </option>
                                 @endforeach
                             </select>
                            @error('predifened_monthly_rent')
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
<script>

    $(document).ready(function(){

      $('#property_name').change(function(){

         // Department id
         var id = $(this).val();

         // Empty the dropdown
         $('#house_number').find('option').not(':first').remove();

         // AJAX request 
         $.ajax({
           url: 'property_name/'+id,
           type: 'get',
           dataType: 'json',
           success: function(response){

             var len = 0;
             if(response['data'] != null){
               len = response['data'].length;
             }

             if(len > 0){
               // Read data and create <option >
               for(var i=0; i<len; i++){

                 var id = response['data'][i].id;
                 var apartment_name = response['data'][i].apartment_name;

                 var option = "<option value='"+id+"'>"+apartment_name+"</option>"; 

                 $("#house_number").append(option); 
               }
             }

           }
        });
      });

    });

    </script>

  @endsection
  
