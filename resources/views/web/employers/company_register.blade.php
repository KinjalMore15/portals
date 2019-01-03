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
         <li>
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
      <form method="post" action="{{ url('employer/register') }}" enctype="multipart/form-data" autocomplete="off">
         <input type="hidden" name="_token" value="{{ csrf_token() }}" required="">
         <div class="row empform">
            <div class="col-md-2 col-sm-1">
            </div>
            <div class="col-md-8 col-sm-10">
               <h2>Company Registration</h2>
               <div class="col-md-12 col-sm-12">
                  <label>Company Name*</label>
                  <small class="text-danger">{{ $errors->first('company_name') }}</small>
                  <input type="text" name="company_name" placeholder="Enter Company Name" value="{{ old('company_name') }}" pattern="[a-zA-Z0-9 ]+" required>
               </div>
               <div class="col-md-12 col-sm-12">
                  <label>Employer Email*</label>
                  <small class="text-danger">{{ $errors->first('employer_email') }}</small>
                  <input type="email" name="employer_email" pattern="[^ @]*@[^ @]*"  placeholder="Enter Company Email" value="{{ old('employer_email') }}" required>
               </div>
               <div class="col-md-12 col-sm-12">
                  <label>Employer Password*</label>
                  <small class="text-danger">{{ $errors->first('employer_password') }}</small>
                  <input type="password" id="txtNewPassword" pattern=".{6,}" placeholder="Enter Password"  value="{{ old('employer_password') }}" autocomplete="off" required>
               </div>
               <div class="col-md-12 col-sm-12">
                  <label>Confrimed Employer Password*</label>
                  <small  id="divCheckPasswordMatch" class="text-danger">{{ $errors->first('employer_password') }}</small>
                  <input  type="password" id="txtConfirmPassword" onChange="checkPasswordMatch();"  name="employer_password" placeholder="Enter Company Email" value="{{ old('employer_password') }}" pattern=".{6,}">
               </div>
               <div class="col-md-6 col-sm-6">
                  <label>Company Slug</label>
                  <small class="text-danger">{{ $errors->first('company_slug') }}</small>
                  <input type="text" name="company_slug" placeholder="Enter Company slug" value="{{ old('company_slug') }}" pattern="[a-zA-Z0-9 ]+">
               </div>
               <div class="col-md-6 col-sm-6">
                  <label>Industries Type*</label> 
                  <small class="text-danger">{{ $errors->first('industry_id') }}</small>                  
                     <select class="full-width" name="ind_name" required>
                        @foreach ($industries as $industry)
                        <option value="{{$industry->name}}">{{$industry->name}}</option>
                        @endforeach                       
                     </select>                  
               </div>
               <div class="col-md-12 col-sm-12">
                  <label>Phone Number*</label>
                  <small class="text-danger">{{ $errors->first('company_number') }}</small>
                  <input type="number" class="quantity"  name="company_number" placeholder="Enter Company Phone Number" required value="{{ old('company_number') }}">
               </div>
               <div class="col-md-12 col-sm-12">
                  <label>Zip Code</label>                  
                     <select class="full-width getLocation" name="zip" required value="{{ old('zip') }}">
                     </select>
                  </div>
               
               <div class="col-md-12 col-sm-12">
                  <label>Company Website</label>
                  <small class="text-danger">{{ $errors->first('website') }}</small>
                  <input type="text" name="website" placeholder="Write an email address or website URL" required value="{{ old('website') }}">
                  
               </div>
               <div class="col-md-12">
                  <div class="btn-col">
                     <button type="submit" value="Submit">Save and Continue</button> 
                     </a>
                  </div>
               </div>
            </div>
            <div class="col-md-2 col-sm-1">
            </div>
         </div>
      </form>
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
   
          function checkPasswordMatch() {
    var password = $("#txtNewPassword").val();
    var confirmPassword = $("#txtConfirmPassword").val();

    if (password != confirmPassword)
        $("#divCheckPasswordMatch").html("Passwords do not match!");
    else
        $("#divCheckPasswordMatch").html("Passwords match.");
}

$(document).ready(function () {
   $("#txtNewPassword, #txtConfirmPassword").keyup(checkPasswordMatch);
});
     
</script>
@stop