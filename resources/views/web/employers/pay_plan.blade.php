@extends('web.master')
@section('styles')
<link href="{{ asset('public/assets/css/timeline.css') }}" type="text/css" rel="stylesheet" /> 
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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
               <li class="completed last">
                  <span class="line"></span>
                  <span class="bubble"></span>
                  <span class="step_txt">Employer Details</span>
               </li>
               <li class="completed last">
                  <span class="line"></span>
                  <span class="bubble"></span>
                  <span class="step_txt">Job Posts</span>
               </li>
               <li>
                  <span class="line last"></span>
                  <span class="bubble"></span>
                  <span class="step_txt">Payments</span>
               </li>
            </ul>
         </div>
      </div>
   </div>
</section>
<section class="price-table">
   <div class="container">
   <div class="row">
      <h2>Job Plans &amp; Pricing</h2>
      <form method="post" action="{{ url('employer/job_pay_plan') }}" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
           <input type="hidden" name="payment_status" value="1">
      <div class=" col-md-6">
      <div class="box">
         <h4>Free Package</h4>
         <strong class="amount"><span>$</span>00.00<sub>/mo</sub></strong>
         <ul>
            <li>Jobs are posted for 30 days</li>
            <li>One Time Fee</li>
            <li>This Plan Includes 1 Job</li>
            <li>Non-Highlighted Post</li>
            <li>Posted For 30 Days</li>
         </ul>
         <button type="submit" value="submit" class="btn-choose btn-color-2">Choose Plan</button> 
      </div>
      </div>
      </form>
      <form method="post" action="{{ url('employer/job_pay_plan') }}" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
           <input type="hidden" name="payment_status" value="2">
      <div class=" col-md-6"> 
      <div class="box ">
               <h4>Enterprise</h4>
               <strong class="amount"><span>$</span>79.00<sub>/mo</sub></strong>
               <ul>
                  <li>Jobs are posted for 150 day</li>
                  <li>One Time Fee</li>
                  <li>This Plan Includes Unlimited Jobs</li>
                  <li>Featured or Highlighted Post</li>
                  <li>Posted For 120 Days</li>
               </ul>
         <button type="submit" value="submit" class="btn-choose btn-color-2">Choose Plan</button> 
              
      </div>
   </form>
            
      
   
    
   </div>
</div>
   </section>

<div class="container">
    <div class="row">
         <div class="col-xs-12 col-md-2">
         </div>
        <div class="col-xs-12 col-md-8">
        
        </div> 
        <div class="col-xs-12 col-md-2">
         </div>         
     
    </div>
</div>
@stop
@section('scripts')
<script src="{{ asset('public/assets/js/editor.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/1.2.3/jquery.payment.min.js"></script>


<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

@stop