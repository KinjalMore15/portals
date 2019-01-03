@extends('web.master')
@section('styles')
<link href="{{ asset('public/assets/css/editor.css') }}" type="text/css" rel="stylesheet" />

  <link href="{{ asset('public/assets/css/timeline.css') }}" type="text/css" rel="stylesheet" /> 

@stop
@section('web.banner')
@stop
@section('web.main')
<section class="resum-form padd-tb">
   <div class="container">
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
      <form action="#" autocomplete="off">
         <div class="row">
            <div class="col-md-2 col-sm-1">
            </div>
            <div class="col-md-8 col-sm-10">
               <div class="col-md-12 col-sm-12">
                  <label>Employer Name*</label>
                  <input type="text" placeholder="Enter Employer Name">
               </div>
               <div class="col-md-12 col-sm-12">
                  <label>Email*</label>
                  <input type="text" placeholder="Enter Email">
               </div>
               <div class="col-md-12 col-sm-12">
                  <label>Password*</label>
                  <input type="text" placeholder="Enter Your Password">
               </div>
               <div class="col-md-12 col-sm-12">
                  <label>Phone Number*</label>
                  <input type="text" placeholder="Enter Your Phone Number">
               </div>
               
               <div class="col-md-12 col-sm-12">
                  <label>Company Type*</label>
                  <div class="selector">
                     <select class="full-width">
                        <option value="1">Full type</option>
                        <option value="2">part time</option>
                        <option value="3">Banking</option>
                        <option value="4">Engineering</option>
                     </select>
                     <span class="custom-select full-width">-Select Companty type-</span>
                  </div>
               </div>
               <div class="col-md-12 col-sm-12">
                  <label>Zip Code</label>
                  <input type="text" placeholder="e.g. $7000 - 9000">
               </div>
               <div class="col-md-12 col-sm-12">
                  <label>Company Website</label>
                  <input type="text" placeholder="Write an email address or website URL">
               </div>
             
               <div class="col-md-12">
                  <div class="btn-col">
                     <a href="{{ url('/employer/post_jobs') }}">
                     <input type="button" value="Save and Continue">
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
@stop