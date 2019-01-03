@extends('web.master')
@section('styles')
<link href="{{ asset('public/assets/css/editor.css') }}" type="text/css" rel="stylesheet" />

  <link href="{{ asset('public/assets/css/timeline.css') }}" type="text/css" rel="stylesheet" /> 
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

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
               <li class="completed last">
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
    
      <form method="post" action="{{ url('employer/create_jobs') }}" enctype="multipart/form-data">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <div class="row empform">
            <div class="col-md-2 col-sm-1">
            </div>
            <div class="col-md-8 col-sm-10">
               <h2>Job Posts</h2>
               <input type="text" hidden type="Number" name="company_id" value="{{$company_id}}">
               <input type="text" hidden type="Number" name="employer_id" value="{{$employer_id}}">
               <div class="col-md-12 col-sm-12">
                  <label>Job Title*</label>
                  <small class="text-danger">{{ $errors->first('job_titel') }}</small>
                  <input type="text" name="job_titel" placeholder="Enter Job Title" required value="{{ old('job_titel') }}">
               </div>
               <div class="col-md-12 col-sm-12">
                  <label>Job Location*</label>
                  <small class="text-danger">{{ $errors->first('zip') }}</small>
                  <div class="selector">
                  <select class="full-width getLocation" name="zip" required value="{{ old('zip') }}">
                  </select>
                  </div>
               </div>
               <div class="col-md-12 col-sm-12">
                  <label>Job Category*</label>
                  <small class="text-danger">{{ $errors->first('job_category') }}</small>                  
                      <select class="full-width" name="job_category">
                        @foreach ($job_categories as $job_category)
                        @if (old('category_id') == $job_category->id)
                        <option value="{{ $job_category->id }}" selected>{{$job_category->name}}</option>
                        @else                        
                        <option value="{{$job_category->id}}">{{$job_category->name}}</option>
                        @endif
                        @endforeach                       
                     </select>                     
                  
               </div>
   
               <div class="col-md-12 col-sm-12">
                  <label>Job Description*</label>
                  <small class="text-danger">{{ $errors->first('job_description') }}</small> {{ old('job_description') }}
                <div class="text-editor-box">
                    <textarea class="txtEditor" style="display: none;" name="job_description"  value ="{{old('job_description')}}">{{  old('job_description') }} </textarea>
                </div>
               </div>
               
               <div class="col-md-3 col-sm-3">
                  <label>Min Salary</label>
                  <small class="text-danger">{{ $errors->first('min_salary') }}</small>
                  <input type="text" name="min_salary" placeholder="e.g. $7000">
               </div>

                <div class="col-md-3 col-sm-3">
                  <label>Max Salary</label>
                  <small class="text-danger">{{ $errors->first('max_salary') }}</small>
                  <input type="text" name="max_salary" placeholder="e.g. $70000">
               </div>
                <div class="col-sm-3">
                  <label>Currancy</label>
                  <select class="form-control" name="salary_currency">
                    <option value="1">USD</option>
                    <option value="2">CAD</option>
                    <option value="3">GBP</option>
                    </select>
                </div>
                <div class="col-sm-3">
                  <label>Salary Type</label>
                  <select class="form-control" name="salary_type">
                    <option value="1">Annually</option>
                        <option value="2">Monthly</option>
                        <option value="3">Weekly</option>
                        <option value="4">Daily</option>
                        <option value="4">Hourly</option>
                     </select>
                  </div>
               
               <div class="col-md-12">
                   <div class="btn-col">                    
                      <button type="submit" value="Submit">Save and Continue</button> 
                   
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
   
     
</script>
@stop