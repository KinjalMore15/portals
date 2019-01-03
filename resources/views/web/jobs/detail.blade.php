@extends('web.master')
@section('styles')
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script type="text/javascript"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
   .sidebar .box .text-box {
    float: left;
    width: 100%;
    padding: 32px 5px 5px 5px;
}
.job-detail .clearfix {
    float: left;
    width: 100%;
    padding: 0px 0 15px;
}
.theme-style-1 h2 {
    font: 500 30px/30px 'Roboto', sans-serif;
    color: #222;
    margin: 0 0 10px;
}
.job-detail .company-social {
    margin-left: 0px;
    float: left;
}
.job-detail ul li {
    padding: 0 0 15px 0px;
    overflow: hidden;
    display: block;
    font: 400 14px/18px 'Roboto', sans-serif;
    color: #666;
    position: relative;
}
.comp_description{
  display: block; /* or inline-block */
  text-overflow: ellipsis;
  word-wrap: break-word;
  overflow: hidden;
  max-height: 5em;
  line-height: 5em;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
</style>
@stop
@section('web.banner')
<section class="candidates-search-bar">

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
      	<div class="col-md-3 col-sm-4">
            
            <aside>
               <div class="sidebar">
                  <div class="box">
                     <div class="thumb"> <a href="{{ URL::to('company_detail/'.$job_detail->company_id) }}"><img src="{{ asset('public/assets/images/companies/companies-img-3.jpg') }}" alt="img"></a>
                        
                     </div>
                     <div class="text-box">
                        
                        <h4><a href="{{ URL::to('company_detail/'.$job_detail->company_id) }}">{{ $job_detail->CompanyDetail->company_name}}</a></h4>
                        @if(!empty($$job_detail->CompanyDetail->company_state))
                        <a href="{{ URL::to('company_detail/'.$job_detail->company_id) }}" class="text"><i class="fa fa-map-marker"></i>{{ $job_detail->CompanyDetail->company_state}}, {{ $job_detail->CompanyDetail->company_city}}</a>
                        @endif
                        <a href="{{ URL::to('company_detail/'.$job_detail->company_id) }}" class="text"><i class="fa fa-calendar"></i>{{ $job_detail->CompanyDetail->created_at}} </a>
                        <div class="comp_description">
                          <p>{{ $job_detail->CompanyDetail->created_at}}</p>
                        </div> 
                        

                        <h4><a href="{{ URL::to('company_detail/'.$job_detail->company_id) }}">Contact Info</a></h4>
                        <p>
                              9910 Dupont Circle Drive East
                              Fort Wayne, IN 46825
                              Abigail Zimmer
                              Phone: 260-676-4844

                        </p>
                        <div class="clearfix">
                        <div class="company-social">
                           <ul>
                              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                           </ul>
                        </div>
                     </div>
                     <a href="{{ URL::to('company_detail/'.$job_detail->company_id) }}" class="btn-apply">View Company Detail</a>                        
                     </div>
                  </div>
                  
               </div>
            </aside>
         </div>
         <div class="col-md-6 col-sm-8">
            <div id="content-area">
               <div class="box">
                  
                  <div class="text-col jobdetail">
                  <input type="text" id="job_id" hidden name="job_id" value="{{$job_detail->id}}">
                     <h2><a href="#">{{ $job_detail->job_title}}</a></h2>
                    
                      <input type="text" id="user_id" hidden name="user_id" value="null">
                      <div class="clearfix">
                           <strong><i class="fa fa-map-marker"></i> {{ $job_detail->city}}, {{ $job_detail->state}} </strong>&nbsp &nbsp
                           <strong><a href="#"><i class="fa fa-globe"></i> https://www.jobinn.com</a></strong>
                      </div>
                     
                     <ul class="clearfix">
                        <li><strong>Employment Type:</strong> {{ $job_type[$job_detail->job_type] }}</li>
                        <li><strong>Compensation:</strong>  {{ $job_detail->min_salary }} to{{ $job_detail->max_salary}}</li>
                        {{-- <li><strong>Benefits Offered:</strong> 401K, Dental, Life, Medical, Vision</li> --}}
                     </ul>                      
                     
                     <div class="clearfix">                         
                        <div class="company-social">
                           <ul >
                              <li>
                              <h4>Share This Jobs:</h4>
                              </li>
                              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                           </ul>
                        </div>
                     </div>
                        @auth('jobseeker')                      
                          @if($is_appled == true)
                            <a  href="#" data-toggle="modal" data-target="#view-modal" class="ApplyJob btn-style-1 style-mid" ><i class="fa fa-check"></i>Appled</a> 
                          @else
                             <a  href="#" data-toggle="modal" data-target="#view-modal" class="ApplyJob btn-style-1 style-mid" >Apply for this Job Now</a> 
                          @endif
                        @endauth
                        @guest('jobseeker')

                            <a href="#" data-toggle="modal" data-target="#view-modal" class="LoginApply">Login To apply</a> 

                        @endguest
                       
                        
                  </div>
                  <div class="clearfix">
                     <h4>Overview</h4>
                     
                     <p>{{ $job_detail->job_description }}</p>                  
                    
                    {{--  <a href="#"data-toggle="modal" data-target="#loginModal" class="userDetail btn-style-1 style-mid">Apply for this Job Now</a>  --}}
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3 col-sm-4">
            <h2>Similar Jobs</h2>
            <aside>
               <div class="sidebar">
             
                 
                  <div class="sidebar-jobs"style="height:500px; overflow-y:scroll;">
                     <ul >
                        <li> <a href="#">Vocational Sales Representative</a> <span><i class="fa fa-map-marker"></i>Arlington, VA </span> <span><i class="fa fa-calendar"></i>Dec 22, 2015 - Mar 17, 2016 </span> </li>
                        <li> <a href="#">Medical Transcrption</a> <span><i class="fa fa-map-marker"></i>San Francisco, CA</span> <span><i class="fa fa-calendar"></i>Dec 22, 2015 - Mar 17, 2016 </span> </li>
                        <li> <a href="#">Support Coordinator</a> <span><i class="fa fa-map-marker"></i>Moorgate, London</span> <span><i class="fa fa-calendar"></i>Dec 22, 2015 - Mar 17, 2016 </span> </li>
                        <li> <a href="#">Support Coordinator</a> <span><i class="fa fa-map-marker"></i>Moorgate, London</span> <span><i class="fa fa-calendar"></i>Dec 22, 2015 - Mar 17, 2016 </span> </li>
                        <li> <a href="#">Support Coordinator</a> <span><i class="fa fa-map-marker"></i>Moorgate, London</span> <span><i class="fa fa-calendar"></i>Dec 22, 2015 - Mar 17, 2016 </span> </li>
                        <li> <a href="#">Support Coordinator</a> <span><i class="fa fa-map-marker"></i>Moorgate, London</span> <span><i class="fa fa-calendar"></i>Dec 22, 2015 - Mar 17, 2016 </span> </li>
                        <li> <a href="#">Support Coordinator</a> <span><i class="fa fa-map-marker"></i>Moorgate, London</span> <span><i class="fa fa-calendar"></i>Dec 22, 2015 - Mar 17, 2016 </span> </li>
                        <li> <a href="#">Support Coordinator</a> <span><i class="fa fa-map-marker"></i>Moorgate, London</span> <span><i class="fa fa-calendar"></i>Dec 22, 2015 - Mar 17, 2016 </span> </li>
                     </ul>
                  </div>
               </div>
            </aside>
         </div>
      </div>
   </div>
</section>
<!-- Modal -->
  <div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Apply Job</h4>
        </div>
         <div class="modal-body">
             <div class="resum-form padd-tb">
                  <div class="row">                    
                     <div class="col-md-12">
                        <input name="text" required type="text" placeholder="Enter Your Email"  value="">
                     </div>
                     <div class="col-md-12">
                        <input name="password" required type="password" placeholder="Enter Your Password" value="">
                     </div>                    
                    
                  </div>
               </div>
         </div>
        <div class="modal-footer">
          <button type="submit" value="Submit" class="btn btn-primary">Login</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  </div>
  </div> 


      
      <!-- testing model contant--->
     
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

  
@stop

@section('scripts')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
  
    $(document).on('click', '.LoginApply', function(e){
        e.preventDefault(); 
        $('#dynamic-content').html(''); // leave it blank before ajax call
        $('#modal-loader').show();      // load ajax loader
   
        $.ajax({
            url:'../job-detail/login',
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

    $(document).on('click', '.ApplyJob', function(e){
        alert($(this).closest("div.jobdetail").find("input[name='job_id']").val());
        e.preventDefault(); 
        var job_id = $(this).closest("div.jobdetail").find("input[name='job_id']").val();
        $('#dynamic-content').html(''); // leave it blank before ajax call
        $('#modal-loader').show();      // load ajax loader
   
        $.ajax({
            url:'../job-detail/applyjob/'+job_id,
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

</script>
@stop


