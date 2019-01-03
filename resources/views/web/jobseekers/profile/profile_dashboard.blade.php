

@extends('web.master')

@section('styles')


    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
   <link href="{{ asset('public/assets/css/jsprofile.css') }}" rel="stylesheet" type='text/css'>
   </link>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
   <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<style type="text/css">
   .select2-close-mask{
    z-index: 2099;
}
.select2-dropdown{
    z-index: 3051;
}
.summary{
  display: block; /* or inline-block */
  text-overflow: ellipsis;
  word-wrap: break-word;
  overflow: hidden;
  max-height: 5em;
  line-height: 5em;
}
</style>
@stop 
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
@section('web.banner')
<section class="candidates-search-bar">
   @include('notification')
   <form action="#">
      <div class="row">
         <div class="col-md-6">
            <input type="text" placeholder="Enter Job Title, Skills or Company">
         </div>
         <div class="col-md-5">
            <input type="text" placeholder="Enter City, State, Province or Country">
         </div>
         <div class="col-md-1">
            <button type="submit"><i class="fa fa-search"></i></button>
         </div>
      </div>
   </form>
</section>
@stop 
@section('web.main')
<section class="recent-row padd-tb job-detail">
   <div class="container">
      <div class="row">
       @include('flash::message')
         <div class="col-md-3 col-sm-12">         
            
            <aside>
              <a href="#" data-toggle="modal" data-target="#view-modal" class="userDetail" id="profile-picture" >
                  <h4><i class="fa fa-pencil"></i>About Me</h4>
               </a>
               <div class="sidebar">
                  <div class="box">
                     <div class="thumb">
                        <a ><img src="../storage/app/photos/related-img-2.jpg" alt="img"></a>
                     </div>
                     <div class="text-box">
                        <h2 style="text-align: center">{{($seeker_detail->f_name) }} {{($seeker_detail->l_name)  }}</h2>
                     </div>
                  </div>
               </div>
               <a href="#" data-toggle="modal" data-target="#view-modal" class="userDetail" id="contact-detail" >
                  <h4><i class="fa fa-pencil"></i> Contact</h4>
               </a>
               <div class="sidebar">
                  <div class="box">
                     <div class="text-box">
                        <input type="text" id="user_id" hidden name="user_id" value="{{$seeker_detail->id}}">
                        <a href="#" class="text"><i class="fa fa-envelope"></i>{{ (!empty(($seeker_detail->email))) ? ($seeker_detail->email)  : null }}</a>
                        <a href="#" class="text"><i class="fa fa-phone"></i>{{($seeker_detail->phone_number)  }}</a>
                     </div>
                  </div>
               </div>
               <h4> Websites</h4>
               <div class="sidebar">
                  <div class="box">
                     <div class="link-box">                     
                        <a class="text" href="#" data-toggle="modal" data-target="#view-modal"  >
                        <i class="fa fa-twitter"></i> <span class="userDetail" id="website-detail">Add Twitter Profile </span></a>
                        <a href="#" class="text" data-toggle="modal" data-target="#view-modal" ><i class="fa fa-linkedin"></i><span class="userDetail" id="website-detail">Add LinkedIn Profile</span></a>
                        <a href="#" class="text" data-toggle="modal" data-target="#view-modal"> <i class="fa fa-plus-square"></i><span class="userDetail" id="website-detail">  Add Facebook Profile</span></a>
                     </div>
                  </div>
               </div>
            </aside>
         </div>
         <div class="col-md-6 col-sm-12">
            <div id="content-area">
               <h4>Important details</h4>
              
               <div class="box" >
                  <a href="#" class="text"  data-toggle="modal" data-target="#view-modal">
                     <h4><i class="fa fa-pencil"></i><span class="userDetail" id="summary-detail">  Summary</span> </h4>
                  </a>
                  <div class="summary">
                     @if(!empty($seeker_detail->jsSeekerDetail->summary))
                     <p >{{$seeker_detail->jsSeekerDetail->summary }}..
                     </p>
                     @endif
                  </div>
               </div>
                
               <div class="box">
                 
                  <a href="#" class="text" data-toggle="modal" data-target="#view-modal">
                     <h4><i class="fa fa-pencil"></i> <span class="userDetail" id="create-workexp">Add Work Experience</span></h4>
                  </a>
                  
                  <div class="summary-box">
                     @foreach($seeker_detail->jsSeekerWorkExperiances as $experiance)
                     <div class="outer">
                     <a href="#" class="text" data-toggle="modal" data-target="#view-modal">
                     <h5 class=""><span class="expDetail" id="edit-workexp">Edit</span></h5>
                     </a> 
                     <input type="text" id="exp_id" hidden name="exp_id" value="{{$experiance->id}}">
                        <strong class="title">{{ $experiance->job_title }} <b></b></strong>
                        <div class="col">
                           <span>{{ Carbon::parse($experiance->statrt_date)->format('Y M')  }} - {{  Carbon::parse($experiance->end_date)->format('Y M') }}</span>
                           <p>{{$experiance->summary }}.. </p>
                        </div>
                     </div>
                     @endforeach
                                          
                  </div>
               </div>
               <div class="box">
                  <a href="#" class="text" data-toggle="modal" data-target="#view-modal">
                      <h4><i class="fa fa-pencil"></i> <span class="userDetail" id="create-education">Add Qualifications</span></h4>
                  </a>

                  <div class="summary-box">
                     @foreach($seeker_detail->jsSeekerEducations as $education)
                     <div class="outer">
                     <a href="#" class="text" data-toggle="modal" data-target="#view-modal">
                     <h5 class=""><span class="eduDetail" id="edit-edudetail">Edit</span></h5>
                     </a>
                     <input type="text" id="edu_id" hidden name="edu_id" value="{{$education->id}}">
                        <strong class="title">{{ $education->certificate_degree_name }} <b></b></strong>
                        <div class="col">
                           <span>{{ Carbon::parse($education->start_date)->format('Y M')  }} - {{  Carbon::parse($education->end_date)->format('Y M') }}</span>
                           <p>{{$education->summary }}.. </p>
                        </div>
                     </div>
                     @endforeach
                                          
                  </div>
               </div>
               @if(!empty($seeker_detail->jsAchievements->first()))
               <div class="box">
                  <a href="#" class="text" data-toggle="modal" data-target="#view-modal">
                      <h4><i class="fa fa-pencil"></i> <span class="userDetail" id="create-achivement">Add Achivements</span></h4>
                  </a>

                  <div class="summary-box">
                     @foreach($seeker_detail->jsAchievements as $achievement)
                     <div class="outer">
                     <a href="#" class="text" data-toggle="modal" data-target="#view-modal">
                     <h5 class=""><span class="eduDetail" id="edit-achivement">Edit</span></h5>
                     </a>
                     <input type="text" id="edu_id" hidden name="edu_id" value="{{$achievement->id}}">
                      
                        <div class="col">
                          
                           <p>{{$achievement->achievement }}.. </p>
                        </div>
                     </div>
                     @endforeach
                                          
                  </div>
               </div>
               @endif
                       @if(!empty($seeker_detail->jsAchievements->first()))
               <div class="box">
                  <a href="#" class="text" data-toggle="modal" data-target="#view-modal">
                      <h4><i class="fa fa-pencil"></i> <span class="userDetail" id="create-certificate">Add Achivements</span></h4>
                  </a>

                  <div class="summary-box">
                     @foreach($seeker_detail->jsCertificates as $certificate)
                     <div class="outer">
                     <a href="#" class="text" data-toggle="modal" data-target="#view-modal">
                     <h5 class=""><span class="cetDetail" id="edit-certificate">Edit</span></h5>
                     </a>
                     <input type="text" id="edu_id" hidden name="cet_id" value="{{$certificate->id}}">
                      
                        <div class="col">
                          
                           <p>{{$certificate->description }}.. </p>
                        </div>
                     </div>
                     @endforeach
                                          
                  </div>
               </div>
               @endif
            </div>
         </div>
         <div class="col-md-3 col-sm-12">
            <h4>Extra Info</h4>
            <aside>
               <div id="content-area">
                  <div class="box">
                     <div class="text-box">
                        <p class="text">Your profile is not complete.Add more info to get noticed by employers!</p>
                        <div class="progress">
                           <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 70%;"> <span> 70%</span> </div>
                        </div>
                     </div>
                  </div>
                  
                 {{--  <div class="sidebar">
                     <div class="box">
                        <div class="text-box">
                           <li style="list-style-type: none">
                              I'm willing to relocate!
                              <div class="material-switch pull-right">
                                 <input checked id="abc" name="someSwitchOption001" type="checkbox"/>
                                 <label for="abc" class="label-success"></label>
                              </div>
                           </li>
                        </div>
                     </div>
                  </div> --}}
               </div>
               @if(empty($seeker_detail->jsAchievements->first()))
                      
               <div class="sidebar">
                  <div class="box">
                     <div class="link-box">
                        
                        <a href="#" class="text" data-toggle="modal" data-target="#view-modal">
                        <i class="fa fa-pencil"></i> <span class="userDetail" id="create-achivement">Add Achivements</span>
                        </a>
                        
                     </div>
                  </div>
               </div>
                @endif
                @if(empty($seeker_detail->jsCertificates->first()))
                    
               <div class="sidebar">
                  <div class="box">
                     <div class="link-box">
                        <a href="#" class="text" data-toggle="modal" data-target="#view-modal">
                        <i class="fa fa-pencil"></i> <span class="userDetail" id="create-certificate">Add Certificates</span>
                        </a>
                     </div>
                  </div>
               </div>
               @endif
            </aside>
            <div class="box">
               <div class="text-box">
                  <ul>
                     <li>
                        <h4>Add Objective</h4>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="view-modal" class="modal fade"  
      tabindex="-1" role="dialog" 
      aria-labelledby="myModalLabel" 
      aria-hidden="true" style="display: none;" style="overflow:hidden;">
      <div class="modal-dialog">
         <div class="modal-content">
     
            <div class="modal-body">
               <div id="modal-loader" 
                  style="display: none; text-align: center;">
                  <img src="ajax-loader.gif">
               </div>
               <!-- content will be load here -->                          
               <div id="dynamic-content"></div>
            </div>
               
         </div>
      </div>
   </div>
<div class="col-md-12">
                
</section>


<!-- Modal -->
<div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <form method="post" action="{{url('job-seeker/edit-contact')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
               <h2>Edit Websites</h2>
            </div>
            <div class="modal-body">
               <div class="resum-form padd-tb">
                  <div class="">
                     <div class="row">
                        <div class="col-md-12">
                           <input name="fb_link"  type="text" placeholder="{{ (!empty(($seeker_detail->jsSeekerDetail->fb_link))) ? ($seeker_detail->jsSeekerDetail->fb_link)  : 'Facebook' }}" value="{{ (!empty(($seeker_detail->jsSeekerDetail->fb_link))) ? ($seeker_detail->jsSeekerDetail->fb_link)  : null }}">
                        </div>
                        <div class="col-md-12">
                           <input name="fb_link"  type="text" placeholder="{{ (!empty(($seeker_detail->gmail_link))) ? ($seeker_detail->gmail_link)  : 'Gmail' }}" value="{{ (!empty(($seeker_detail->gmail_link))) ? ($seeker_detail->gmail_link)  : null }}">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               <button type="submit" value="Submit" class="btn btn-primary">Save changes</button>
            </div>
         </form>
      </div>
   </div>
</div>
@stop 
@section('scripts')
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<script>

  $('div.alert').not('.alert-important').fadeIn(200).delay(3000).fadeOut(350);
   $(document).ready(function(){
   
    $(document).on('click', '.userDetail', function(e){   
        e.preventDefault();
        var id = $("#user_id").val();
        var url = $(this).attr('id');
        
        $('#dynamic-content').html(''); // leave it blank before ajax call
        $('#modal-loader').show();      // load ajax loader
   
        $.ajax({
            url:url ,
            type: 'GET',
            dataType: 'html'
        })
        .done(function(data){
              
            $('#dynamic-content').html('');    
            $('#dynamic-content').html(data); // load response 
            $('#modal-loader').hide();        // hide ajax loader   
        })
        .fail(function(){
            $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
            $('#modal-loader').hide();
        });
   
    });

     $(document).on('click', '.expDetail', function(e){
   
        e.preventDefault();
        var exp_id = $(this).closest("div.outer").find("input[name='exp_id']").val();
        var url = $(this).attr('id');
        $('#dynamic-content').html(''); // leave it blank before ajax call
        $('#modal-loader').show();      // load ajax loader
   
        $.ajax({
            url:url+'/'+exp_id ,
            type: 'GET',
            dataType: 'html'
        })
        .done(function(data){
              
            $('#dynamic-content').html('');    
            $('#dynamic-content').html(data); // load response 
            $('#modal-loader').hide();        // hide ajax loader   
        })
        .fail(function(){
            $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
            $('#modal-loader').hide();
        });
   
    });
      $(document).on('click', '.eduDetail', function(e){
   
        e.preventDefault();
        var exp_id = $(this).closest("div.outer").find("input[name='edu_id']").val();
        var url = $(this).attr('id');
        $('#dynamic-content').html(''); // leave it blank before ajax call
        $('#modal-loader').show();      // load ajax loader
   
        $.ajax({
            url:url+'/'+exp_id ,
            type: 'GET',
            dataType: 'html'
        })
        .done(function(data){
              
            $('#dynamic-content').html('');    
            $('#dynamic-content').html(data); // load response 
            $('#modal-loader').hide();        // hide ajax loader   
        })
        .fail(function(){
            $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
            $('#modal-loader').hide();
        });
   
    });
    $(document).on('click', '.cetDetail', function(e){
   
        e.preventDefault();
        var exp_id = $(this).closest("div.outer").find("input[name='cet_id']").val();
        var url = $(this).attr('id');
        $('#dynamic-content').html(''); // leave it blank before ajax call
        $('#modal-loader').show();      // load ajax loader
   
        $.ajax({
            url:url+'/'+exp_id ,
            type: 'GET',
            dataType: 'html'
        })
        .done(function(data){
              
            $('#dynamic-content').html('');    
            $('#dynamic-content').html(data); // load response 
            $('#modal-loader').hide();        // hide ajax loader   
        })
        .fail(function(){
            $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
            $('#modal-loader').hide();
        });
   
    });
   });
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
    
   
   $(document).click(function(e){
   
    window.location.href="#";
   });

@if (count($errors) > 0)
    $('#register').modal('show');
@endif

   
</script>
@stop