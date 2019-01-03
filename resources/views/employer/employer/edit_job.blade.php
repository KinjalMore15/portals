@extends('employer.master')
@section('styles')
<link href="{{ asset('public/assets/css/tags.css') }}" type="text/css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.1/css/selectize.default.css" rel="stylesheet" />
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
         <form method="post" action="{{ url('employer/job_edit') }}" enctype="multipart/form-data">
             <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="job_id" class="form-control" value="{{$job_detail->id}}" >
         <!-- General Information -->
         <div class="card">
            <div class="card-body">
               <div class="row">
                  <div class="col-sm-6">
                     <label>Job Title*</label>
                     <small class="text-danger">{{ $errors->first('job_title') }}</small>
                     <input type="text" name="job_title" class="form-control" onkeypress="return alpha(event)" value="{{$job_detail->job_title}}">
                  </div>
                  <div class="col-sm-6">
                     <label>Job Category*</label>
                     <small class="text-danger">{{ $errors->first('job_cat') }}</small>
                     <select class="form-control" name="job_category_id">
                        @foreach ($jobcategories as $jobcategory)

                        @if ($job_detail->job_category_id == $jobcategory->id)
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
                     <textarea  class="form-control" name="job_description"> {{$job_detail->job_description}}</textarea>
                  </div>
                  <div class="col-sm-4 m-clear">
                     <label>Desegnation*</label>
                     <small class="text-danger">{{ $errors->first('job_designation') }}</small>
                     <input type="text" class="form-control" name="job_designation" onkeypress="return alpha(event)"  value="{{$job_detail->designation}}">
                  </div>
                  <div class="col-sm-4 m-clear">
                     <label>Experience*</label>
                     <small class="text-danger">{{ $errors->first('experiance') }}</small>
                     <select class="form-control" name="experiance">
                        @foreach ($experiances as $experianc)
                        @if ($job_detail->experience == $experianc->id)
                        <option value="{{$experianc->id}}" selected>{{$experianc->experiance_range}}</option>
                        @else                        
                         <option value="{{$experianc->id}}">{{$experianc->experiance_range}} Year</option>
                        @endif                       
                        @endforeach
                     </select>
                  </div>
                  <div class="col-sm-4 m-clear">
                     <label>No. Of Vacancy*</label>
                      <small class="text-danger">{{ $errors->first('num_of_vacancy') }}</small>
                     <input type="number" class="form-control" value="{{$job_detail->nums_of_vacancy}}" name="num_of_vacancy">
                  </div>
                  <div class="col-sm-4 m-clear">
                     <label>Job Type*</label>
                     <small class="text-danger">{{ $errors->first('job_type') }}</small>
                     <select class="form-control" name="job_type">
                        <option value="1"  {{($job_detail->job_type == 1) ? 'selected' : '' }}> Time</option>
                        <option value="2" {{($job_detail->job_type == 2) ? 'selected' : '' }}>Full Time</option>
                        <option value="3" {{($job_detail->job_type == 3) ? 'selected' : '' }}>Freelancer</option>
                     </select>
                  </div>
                  <div class="col-sm-4 m-clear">
                     <label>Min Qualification*</label>
                     <small class="text-danger">{{ $errors->first('job_qualification') }}</small>
                     <select class="form-control" name="job_qualification">
                        <option value="1" {{($job_detail->qualification == 1) ? 'selected' : '' }}>Secondary(10th Pass)</option>
                        <option value="2" {{($job_detail->qualification == 2) ? 'selected' : '' }}>Higher Secondary(12th Pass)</option>
                        <option value="3" {{($job_detail->qualification == 3) ? 'selected' : '' }}>Diploma</option>
                        <option value="4" {{($job_detail->qualification == 4) ? 'selected' : '' }}>Bachelor's</option>
                        <option value="5" {{($job_detail->qualification == 5) ? 'selected' : '' }}>Master's</option>
                        <option value="6" {{($job_detail->qualification == 6) ? 'selected' : '' }}>Doctorate</option>
                     </select>
                  </div>
                  <div class="col-sm-4 m-clear">
                     <label>Last Date</label>
                     <small class="text-danger">{{ $errors->first('last_date') }}</small>
                     <input type="date" data-toggle="datepicker" name="last_date" class="form-control" value="{{$job_detail->last_date}}">
                  </div>
                  <div class="col-sm-6">
                     <label>Free/Paid Job*</label>
                     <div class="row">
                        <div class="col-sm-5 col-xs-6">
                           <div class="custom-radio">
                              <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="noCheck" {{($job_detail->is_pay == 0) ? 'checked' : '' }} value="0">
                              <label for="noCheck">Free</label>
                              <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck" {{($job_detail->is_pay == 1) ? 'checked' : '' }} value="1">
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
                        <input type="text" class="form-control" id="skill" name="skill" placeholder="Enter your Skills">
  

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
                     <input type="number" class="form-control" name="min_amount" value="{{$job_detail->min_salary}}">
                  </div>
                  <div class="col-sm-3">
                     <label>Max Amount*</label>
                     <input type="number" class="form-control" name="max_amount" value="{{$job_detail->max_salary}}">
                  </div> 
                  <div class="col-sm-3">
                     <label>Currancy*</label>
                     <select class="form-control" name="salary_currency">
                        <option value="1" {{($job_detail->salary_currency == 1) ? 'selected' : '' }}>USD</option>
                        <option value="2" {{($job_detail->salary_currency == 2) ? 'selected' : '' }}>CAD</option>
                        <option value="3" {{($job_detail->salary_currency == 3) ? 'selected' : '' }}>GBP</option>
                     </select>
                  </div>
                  <div class="col-sm-3">
                     <label>Salary Type*</label>
                     <select class="form-control" name="salary_type">
                        <option value="1" {{($job_detail->salary_type == 3) ? 'selected' : '' }}>Annually</option>
                        <option value="2" {{($job_detail->salary_type == 3) ? 'selected' : '' }}>Monthly</option>
                        <option value="3" {{($job_detail->salary_type == 3) ? 'selected' : '' }}>Weekly</option>
                        <option value="4" {{($job_detail->salary_type == 3) ? 'selected' : '' }}>Daily</option>
                        <option value="5" {{($job_detail->salary_type == 3) ? 'selected' : '' }}>Hourly</option>
                     </select>
                  </div>
                  <div class="col-sm-4 m-clear">
                     <label>Zip Code*</label>
                      <select class="form-control getLocation" name="zip" required value="{{ $job_detail->zip }}">
                      </select>
                     </div>  
                   <div class="col-sm-4 m-clear">
                     <label>Requierd Age</label>
                     <input type="text" class="form-control" name="required_age" value="{{ $job_detail->required_age }}">
                  </div>  
                  <div class="col-sm-4 m-clear">
                     <label>visa Type</label>
                     <input type="text" class="form-control" name="required_age" value="{{ $job_detail->visa_type }}">
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
  alert('hi');
     var k;
     document.all ? k = e.keyCode : k = e.which;
     return ((k > 64 && k < 91) || (k > 96 && k < 123) || k !== 8 );
}

$('#skill').selectize({
    persist: false,
    delimiter: ',',
    
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
        callback(res.name.name);
      }
    });
  }
   
    });
</script>
@stop

