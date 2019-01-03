
@extends('employer.master')
@section('styles')

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
@stop
@section('employer.titel')
<div class="row page-titles">
   <div class="col-md-5 align-self-center">
      <h3 class="text-themecolor">Add New Employe</h3>
   </div>
   <div class="col-md-7 align-self-center">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
         <li class="breadcrumb-item active">Add New Employe</li>
      </ol>
   </div>
</div>
@stop
@section('employer.container')
<div class="container-fluid">
   <!-- /row -->
   <div class="row">
      <div class="col-md-12 col-sm-12">
         <!-- General Information -->
          <form method="post" action="{{ url('employer/create_new_emp') }}" enctype="multipart/form-data">
         <div class="card">
            <div class="card-header">
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>
            <div class="card-body">
               <div class="row">
                  
                  <div class="col-md-6 col-sm-6">
                     <label>Employer Name*</label>
                     <small class="text-danger">{{ $errors->first('emp_name') }}</small>
                     <input type="text" class="form-control" name="emp_name" placeholder="Enter Employer Name" value="{{ old('emp_name') }}">
                  </div>
                  <div class="col-md-6 col-sm-6">
                     <label>Email*</label>
                     <small class="text-danger">{{ $errors->first('emp_email') }}</small>
                     <input type="text" class="form-control" name="emp_email" placeholder="Enter Email" value="{{ old('emp_email') }}">
                  </div>
                  <div class="col-md-12 col-sm-12">
                     <label>Password*</label>
                     <small class="text-danger">{{ $errors->first('emp_password') }}</small>
                     <input type="Password" class="form-control" name="emp_password" placeholder="Enter Your Password" value="{{ old('emp_password') }}">
                  </div>
                  <div class="col-md-12 col-sm-12">
                     <label>Phone Number*</label>
                     <small class="text-danger">{{ $errors->first('phone_number') }}</small>
                     <input type="text" class="form-control" name="phone_number" placeholder="Enter Your Phone Number" value="{{ old('phone_number') }}">
                  </div>
                     <div class="col-md-12 col-sm-12">
                 <label>Zip Code</label>
                 <small class="text-danger">{{ $errors->first('emp_zip') }}</small>
                  <div class="">
                  <select class="form-control getLocation" name="emp_zip" required >
                  </select>
                  </div>                 
               </div>
                
               </div>
            </div>
         </div>
      
         <div class="text-center">
            <button type="submit" value="submit" class="btn btn-m btn-success">Create</button>
         </div>
         </form>
      </div>
   </div>
   <!-- /row -->
</div>
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
   
     
</script>
@stop