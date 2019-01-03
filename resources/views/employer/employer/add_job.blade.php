@extends('employer.master')
@section('styles')
<link href="{{ asset('public/assets/css/tags.css') }}" type="text/css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.1/css/selectize.min.css" rel="stylesheet" />
<style type="text/css">
  
.exampleSearch {
  width: 250px;
  margin: 50px;
  display: block;
}
</style>
@stop
@section('employer.titel')
<div class="row page-titles">
   <div class="col-md-5 align-self-center">
      <h3 class="text-themecolor">Post Job</h3>
   </div>
   <div class="col-md-7 align-self-center">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
         <li class="breadcrumb-item active">Freelancers</li>
      </ol>
   </div>
</div>
@stop
@section('employer.container')
<div class="container-fluid">
   <!-- /row -->
   <div class="row">
      <div class="col-md-12 col-sm-12">
         <form method="post" action="{{ url('employer/create_new_job') }}" enctype="multipart/form-data">
             <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <!-- General Information -->
         <div class="card">
            <div class="card-body">
               <div class="row">
                  <div class="col-sm-6">
                     <label>Job Title*</label>
                     <small class="text-danger">{{ $errors->first('job_title') }}</small>
                     <input type="text" name="job_title" class="form-control"  value="{{ old('job_title') }}" onkeypress="return alpha(event)">
                  </div>
                  <div class="col-sm-6">
                     <label>Job Category*</label>
                     <small class="text-danger">{{ $errors->first('job_category_id') }}</small>
                     <select class="form-control" name="job_category_id">
                        @foreach ($jobcategories as $jobcategory)
                        @if (old('job_category_id') == $jobcategory->id)
                        <option value="{{ $jobcategory->id }}" selected>{{$jobcategory->name}}</option>
                        @else                        
                        <option value="{{$jobcategory->id}}">{{$jobcategory->name}}</option>
                        @endif
                        @endforeach
                     </select>
                  </div>
                  <div class="col-sm-12">
                     <label>Job Description*</label>
                     <small class="text-danger">{{ $errors->first('job_description') }}</small>
                     <textarea  class="form-control" name="job_description">{{ old('job_description') }}</textarea>
                  </div>
                  <div class="col-sm-4 m-clear">
                     <label>Desegnation*</label>
                     <small class="text-danger">{{ $errors->first('job_designation') }}</small>
                     <input type="text" class="form-control" name="job_designation" value="{{ old('job_designation') }}" onkeypress="return alpha(event)">
                  </div>
                  <div class="col-sm-4 m-clear">
                     <label>Experience*</label>
                     <small class="text-danger">{{ $errors->first('experiance') }}</small>
                     <select class="form-control" name="experiance">
                        @foreach ($experiances as $experianc)
                         @if (old('experiance') == $experianc->id)
                        <option value="{{$experianc->id}}" selected>{{$experianc->experiance_range}} Year</option>
                        @else    
                        <option value="{{$experianc->id}}">{{$experianc->experiance_range}} Year</option>
                        @endif
                        @endforeach
                     </select>
                  </div>
                  <div class="col-sm-4 m-clear">
                     <label>No. Of Vacancy*</label>
                      <small class="text-danger">{{ $errors->first('num_of_vacancy') }}</small>                    
                      <select class="form-control" name="num_of_vacancy">
                        <option value="1">1 hire</option>
                        <option value="2">2 - 4 hires</option>
                        <option value="3">5 - 10 hires</option>
                        <option value="4">10+ hires</option>
                        <option value="5">I have an ongoing need to fill this role</option>                     
                     </select>
                  </div>
                  <div class="col-sm-4 m-clear">
                     <label>Job Type*</label>
                     <small class="text-danger">{{ $errors->first('job_type') }}</small>
                     <select class="form-control" name="job_type">
                        <option value="1">Part Time</option>
                        <option value="2">Full Time</option>
                        <option value="3">Freelancer</option>
                        <option value="4">Temporary</option>
                        <option value="5">Contract</option>
                        <option value="6">Internship</option>
                        <option value="7">Commission</option>
                        <option value="8">Volunteer</option>
                        <option value="9">New-Grad</option>
                        <option value="10">Other</option>
                     </select>
                  </div>
                  <div class="col-sm-4 m-clear">
                     <label>Min Qualification*</label>
                     <small class="text-danger">{{ $errors->first('job_qualification') }}</small>
                     <select class="form-control" name="job_qualification">
                        <option value="1">Secondary(10th Pass)</option>
                        <option value="2">Higher Secondary(12th Pass)</option>
                        <option value="2">Diploma</option>
                        <option value="2">Bachelor's</option>
                        <option value="2">Master's</option>
                        <option value="2">Doctorate</option>
                     </select>
                  </div>
                  <div class="col-sm-4 m-clear">
                     <label>Last Date</label>
                     <small class="text-danger">{{ $errors->first('last_date') }}</small>
                     <input type="date" data-toggle="datepicker" name="last_date" class="form-control">
                  </div>
                  <div class="col-sm-6">
                     <label>Free/Paid Job*</label>
                     <div class="row">
                        <div class="col-sm-5 col-xs-6">
                           <div class="custom-radio">
                              <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="noCheck" checked="" value="0">
                              <label for="noCheck">Free</label>
                              <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck" value="1">
                              <label for="yesCheck">Paid</label>
                           </div>
                        </div>
                        <div class="col-sm-7 col-xs-6">
                           <div id="ifYes" style="visibility:hidden">
                              <input type="text" class="form-control" id="yes" name="yes" placeholder="$30">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-12">
                     <label>Skills*</label>
                     <select id="skill" class="demo-default" placeholder="Type your name..." name="skills[]" multiple required>
                          <option value="">Type your name ...</option>
                      </select>
                       
  

                  </div>
               </div>
            </div>
         </div>
         <!-- General Information -->
         <div class="card">
            <div class="card-header">
               <h4>Compensation Range:</h4>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-sm-3">
                     <label>Min Amount*</label>
                     <input type="number" class="form-control" name="min_amount">
                  </div>
                  <div class="col-sm-3">
                     <label>Max Amount*</label>
                     <input type="number" class="form-control" name="max_amount">
                  </div>
                  <div class="col-sm-3">
                     <label>Currancy*</label>
                     <select class="form-control" name="salary_currency">
                        <option value="1">USD</option>
                        <option value="2">CAD</option>
                        <option value="3">GBP</option>
                     </select>
                  </div>
                  <div class="col-sm-3">
                     <label>Salary Type*</label>
                     <select class="form-control" name="salary_type">
                        <option value="1">Hourly</option>
                        <option value="2">Daily</option>
                        <option value="3">Weekly</option>
                        <option value="4">Monthly</option>
                        <option value="5">Annually</option>
                     </select>
                  </div>
                   <div class="col-sm-12">
                     <label>Salary Type*</label>
                     <textarea  class="form-control" name="">{{ old('job_description') }}</textarea>
                  </div>
                  <div class="col-sm-4 m-clear">
                     <label>Zip Code*</label>
                      <select class="form-control getLocation" name="zip" required value="{{ old('zip') }}">
                      </select>
                  </div>  
                  <div class="col-sm-4 m-clear">
                     <label>Requierd Age</label>
                     <input type="text" class="form-control" name="required_age">
                  </div> 
                   <div class="col-sm-4 m-clear">
                     <label>Visa type</label>
                     <input type="text" class="form-control" name="visa_type">
                  </div>            
               </div>
            </div>
         </div>
         <div class="text-center">
            <button type="submit" value="submit" class="btn btn-m btn-success">Submit &amp; Exit</button>
         </div>
        </form>
      </div>
   </div>
   <!-- /row -->
</div>
@stop
@section('scripts')
<script src="{{ asset('public/assets/js/tag.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.1/js/standalone/selectize.min.js"></script>
<script type="text/javascript">
<!--
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



function alpha(e) {
 
     var k;
     document.all ? k = e.keyCode : k = e.which;
     return ((k > 64 && k < 91) || (k > 96 && k < 123) || k !== 8 );
}

$('#skill').selectize({
   
    maxItems:10,
    valueField: 'name',
    labelField: 'name',
    searchField: 'name',
    options: [],
    create: false,
      load: function(query, callback) {
    $.ajax({
      url: 'http://localhost/optnation/employer/get-skills',
      type: 'GET',
      data:{
        skill:query
      },
      error: function() {
        callback();
      },
      success: function(res) {
        callback(res);
      }
    });
  }
   
    });
</script>
@stop

