@extends('web.master')
@section('styles')
<link href="{{ asset('public/assets/css/jsregister.css') }}" rel="stylesheet" type='text/css'>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</link>
@stop
@section('web.main')
<section class="registration-form ">
   <div id="row">
    
   <div class="col-md-7" style="background-color:white;">
      <div class="row" style="margin: 20% 15% 5% 15%; ">
         @include('flash::message')
        <form method="post" action="{{ url('job-seeker') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
         
         <div class="col-md-12">
            <label>Email *</label>
            <input type="text" name="email" placeholder="Your email Addresss"  required 
           >
            <small class="text-danger">{{ $errors->first('email') }}</small>
         </div>
         <div class="col-md-12">
            <label>password *</label>
            <input type="text" name="password" placeholder="Your password"  required 
           >
            <small class="text-danger">{{ $errors->first('password') }}</small>
         </div>
         
         
         
         
         <div class="col-md-12">
            <div class="btn-col ">
               <input class="btn-col"  type="submit" value="Submit" style="float: right;">
            </div>
         </div>
       </form>
      </div>
   </div>
   <div class="col-md-5" style="background-color:#eaf2da; border-left: 1px solid #8cad4b;" id="hiderow" >
      <div class="row " style="margin: 0% 5% 0% 5%; ">
         <div class="row rocket-ship" style="padding:5rem 2rem ">
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
<script src="//code.jquery.com/jquery.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
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