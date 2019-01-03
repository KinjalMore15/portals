@extends('web.master')
@section('styles')
<link href="{{ asset('public/assets/css/editor.css') }}" type="text/css" rel="stylesheet" />

  <link href="{{ asset('public/assets/css/timeline.css') }}" type="text/css" rel="stylesheet" /> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<style type="text/css">
  .quantity::-webkit-inner-spin-button, 
.quantity::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
</style>
@stop
@section('web.banner')
@stop
@section('web.main')
<div class="onrampNav for_modal">
         <div class="simple-checkout-top">
            <ul class="progress-indicator">
               <li class="completed last">
                  <span class="line"></span>
                  <span class="bubble"></span>
                  <span class="step_txt">Company Details</span>
               </li>
               <li class="completed last">
                  <span class="line"></span>
                  <span class="bubble"></span>
                  <span class="step_txt">Employer Details</span>
               </li>
               <li>
                  <span class="line"></span>
                  <span class="bubble"></span>
                  <span class="step_txt">Job Posts</span>
               </li>
               <li>
                  <span class="line"></span>
                  <span class="bubble"></span>
                  <span class="step_txt">Payments</span>
               </li>
            </ul>
         </div>
      </div>
<section class="resum-form padd-tb">
   <div class="container">
      
         <div class="row empform">

            <div class="col-md-2 col-sm-1">
            </div>
            <div class="col-md-8 col-sm-10">
               <form method="post" action="{{ url('employer/create_employer') }}" enctype="multipart/form-data">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <input type="hidden"  type="Number" name="company_id" value="{{$company_id}}">
               
               <h2>Employer Registration</h2>

               <div class="col-md-12 col-sm-12">
                  <label>Employer Name*</label>
                  <small class="text-danger">{{ $errors->first('emp_name') }}</small>
                  <input type="text" name="emp_name" placeholder="Enter Employer Name"  value="{{!empty($company_detail->name) ? $company_detail->name : old('emp_name')  }}" required>
               </div>
               
               
               <div class="col-md-12 col-sm-12">
                  <label>Phone Number*</label>
                  <small class="text-danger">{{ $errors->first('phone_number') }}</small>
                  <input type="number" class="quantity"  name="phone_number" placeholder="Enter Your Phone Number" value="{{!empty($company_detail->phone_number) ? $company_detail->phone_number : old('phone_number')  }}" required>
               </div>   
               <div class="col-md-12 col-sm-12">
                 <label>Zip Code</label>
                 <small class="text-danger">{{ $errors->first('emp_zip') }}</small>
                  <div class="selector">
                  <select class="full-width getLocation" name="emp_zip" required >
                  </select>
                  </div>
                  @if ($errors->any())
                  {{ implode('', $errors->all('<div>:message</div>')) }}
                  @endif
               </div>
               <div class="col-md-12">
                  <div class="btn-col">                    
                      <button type="submit" value="Submit">Save and Continue</button> 
                     </a>
                  </div>
               </div>
            </form>
            </div>
            <div class="col-md-2 col-sm-1">
            </div>
         </div>
    
   </div>
</section>
@stop
@section('scripts')
<script src="{{ asset('public/assets/js/editor.js') }}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script>
   $('.getLocation').select2({
    
           placeholder: 'Select an item',
           ajax: {
             url: '{{ url('/get/citystatezip') }}',
             dataType: 'json',
             delay: 250,
             method: 'post',
            data: function (params) {
                       return {
                           "_token": "{{ csrf_token() }}",
                           city: $.trim(params.term)
                       };
                   },
             processResults: function (data) {
               return {
                 results:  $.map(data, function (item) {
                       var str1 = item.city;
                       var str2 = "  -  ";
                       var str3 = item.state;
                       var str4 = item.zip;
                       var res = str1.concat( str2).concat( str3).concat( str2).concat( str4);
                       return {
                           text: res,
                           id: item.zip
                       }
                   })
               };
             },
             cache: true
           }
         });
   
     
</script>
@stop