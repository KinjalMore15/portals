@extends('web.master')
@section('styles')
<link href="{{ asset('public/assets/css/jsregister.css') }}" rel="stylesheet" type='text/css'>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
</link>
@stop
@section('web.main')
<section class="registration-form ">
   <div id="row">
   <div class="col-md-7" style="background-color:transprant;">
      <div class="row" style="margin: 10% 15% 5% 15%; ">
         <h1 style="margin: 0% 0% 10% 0%; ">Sign Up</h1>
         <a href="/user/sign-in">or Sign In Here</a>
        {{--  <div class="">
            Registration for
            <a href="">employer or staffing agency</a>
         </div> --}}
         {{-- <div class="small-12 columns double-bump">
            <a class="btn facebook social" data-gtm="registration|facebook-sign-up-clicked" href="" id="facebook-sign-up">
            <span>
            <i class="fa fa-facebook-official"></i> Sign up with Facebook
            </span>
            </a>
         </div>
         <div class="small-12 columns double-bump">
            <a class="btn google social" data-gtm="registration|google-sign-up-clicked" href="" id="google-sign-up">
            <span>
            <i class="fa fa-google "></i> Sign up with Google
            </span>
            </a>
         </div> --}}
        <form method="post" action="{{ url('job-seeker/register') }}" enctype="multipart/form-data" >
        {{ csrf_field() }}
         <div class="col-md-6 col-sm-">
            <label>First Name *</label>
            <input type="text" name="f_name" placeholder="Your first name" required pattern="[a-zA-Z0-9]+" title="alphabets characters only" value="{{ old('f_name') }}"  >
            <small class="text-danger">{{ $errors->first('f_name') }}</small>
         </div>
         <div class="col-md-6">
            <label>last Name </label>
            <input type="text" name="l_name" placeholder="Your last name" required pattern="[a-zA-Z0-9]+" title="alphabets characters only" value="{{ old('l_name') }}">
            <small class="text-danger">{{ $errors->first('l_name') }}</small>
         </div>
         <div class="col-md-12">
            <label>Email *</label>
            <input type="text" name="email" placeholder="Your email Addresss"  required value="{{ old('email') }}" 
           >
            <small class="text-danger">{{ $errors->first('email') }}</small>
         </div>
         <div class="col-md-12">
            <label>Password *</label>
          
            <input name="password" id="password" type="password" />
          
            <small class="text-danger">{{ $errors->first('email') }}</small>
         </div>
         <div class="col-md-12">
            <label>Confrim password*</label>
            <input type="password" name="confirm_password" id="confirm_password" />
           
            <small id='message' class="text-danger">{{ $errors->first('email') }}</small>
         </div>
         <div class="col-md-12">
            <label>City *</label>
            <div class="selector">
               <select class="full-width getLocation" name="zip" required value="{{ old('zip') }}" >
               </select>
            </div>
            <small class="text-danger">{{ $errors->first('zip') }}</small>
         </div>
         <div class="col-md-6">
            <label>Phone Number *</label>
            <input type="number" class="full-width" name="phone_number" placeholder="Your contact number" pattern="[789][0-9]{9}"  value="{{ old('phone_number') }}" >
            <small class="text-danger">{{ $errors->first('phone_number') }}</small>
         </div>
         <div class="col-md-6">
            <label>Work authorization</label>
             
               <select class="selector" name="wrk_auth" required value="{{ old('wrk_auth') }}" >
                  <option value="1">OPT</option>
                  <option value="2">CPT</option>
                  <option value="3">F1</option>
                  <option value="4">H4</option>
                  <option value="5">L1</option>
                  <option value="6">HAVE H1 VISA</option>
                  <option value="7">NEED H1 VISA</option>
                  <option value="8">EMPLOYMENT AUTH DEPT</option>
                  <option value="11">TN PERMIT HOLDER</option>
                  <option value="9">GREEN CARD HOLDER</option>
                  <option value="10">US CITIZEN</option>
                  <option value="12">CANADIAN CITIZEN</option>
                  
               </select>
               <span class="custom-select full-width">Select Work Authorization</span>
               <small class="text-danger">{{ $errors->first('wrk_auth') }}</small>
           
         </div>
         <div class="col-md-6">
            <label>Upload Resume</label>
            <div class="upload-box">
               <span class="btn-file"> Browse File
               <input type="file" name="file_name" accept="application/msword,text/plain, application/pdf,">
               </span>
            </div>
         </div>
         <div class="col-md-6">
           <div class="upload-box" style="padding-top: 20px;">
               <input class="btn-file" type="submit" value="Submit">
            </div>
         </div>
       </form>
      </div>
   </div>
   <div class="col-md-5" style="background-color:transprant; border-left: 1px solid #8cad4b;" id="hiderow" >
      <div class="row " style="margin: 10% 15% 100% 15%;">
         <div class="row rocket-ship" style="padding:2.5rem 0rem ">
            <div class="col-md-4"></div>
            <div class="col-md-4">
               <img alt="Create an Account" src="{{ asset('public/assets/images/logo/opt-logo.png') }}">
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-12"style="">
               <h3>Create an Account with opt to unlock these great features</h3>
            </div>
            <div class="col-md-12"style="margin: 0 10% 5% 5%;">
               <p>
               <h4>
                  <i class="fa fa-check-circle"></i>
                  See similar job titles and skills to help you make your next move
               </h4>
               </p>
               <p>
               <h4>
                  <span class="small-2 columns">
                  <i class="fa fa-check-circle"></i>
                  </span>
                  <span class="small-10 columns">
                  Upload a resume and become visible to Hiring Managers and Employers
                  </span>
               </h4>
               </p>
               <p>
               <h4>
                  <span class="small-2 columns">
                  <i class="fa fa-check-circle"></i>
                  </span>
                  <span class="small-10 columns">
                  Compare Salary Information to see where you stand amongst your peers
                  </span>
               </h4>
               </p>
               <p>
               <h4>
               <span class="small-2 columns">
               <i class="fa fa-check-circle"></i>
               <span class="small-10 columns">
               Easily Quick Apply to jobs with just one click!
               </span>
               <h4>
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
@stop
@section('scripts')
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
   
  $('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});   
</script>
@stop