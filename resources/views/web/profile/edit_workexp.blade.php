@extends('web.master')

@section('styles')

   <link href="{{ asset('public/assets/css/jsprofile.css') }}" rel="stylesheet" type='text/css'>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   </link>

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
         <div class="col-md-3 col-sm-12">
            <h4>About Me</h4>
            <aside>
               <div class="sidebar">
                  <div class="box">
                     
                     <div class="thumb">
                        <a href="#"><img src="{{ asset('public/assets/images/companies/companies-img-2.jpg') }}" alt="img"></a>
                     </div>
                     <div class="text-box">
                        <h4><a href="#">{{($seeker_detail->f_name) }} {{($seeker_detail->l_name)  }}</a></h4>
                     </div>
                  </div>
               </div>
               
               <a href="#" class="text" data-toggle="modal" data-target="#ContactModal"><h4><i class="fa fa-pencil"></i> Contact</h4></a>

               <div class="sidebar">
                  <div class="box">
                     <div class="text-box">
                        <a href="#" class="text"><i class="fa fa-envelope"></i>{{ (!empty(($seeker_detail->email))) ? ($seeker_detail->email)  : null }}</a>
                        <a href="#" class="text"><i class="fa fa-phone"></i>{{($seeker_detail->phone_number)  }}</a>
                     </div>
                  </div>
               </div>
               <h4> Websites</h4>
               <div class="sidebar">
                  <div class="box">
                     <div class="link-box">
                        <a href="#" class="text" data-toggle="modal" data-target="#websiteModal"><i class="fa fa-twitter"></i> Add Twitter Profile</a>
                        <a href="#" class="text" data-toggle="modal" data-target="#websiteModal"><i class="fa fa-linkedin"></i>  Add LinkedIn Profile</a>
                        <a href="#" class="text" data-toggle="modal" data-target="#websiteModal"><i class="fa fa-plus-square"></i>  Add Facebook Profile</a>
                       
                     </div>
                  </div>
               </div>
            </aside>
         </div>
       
         <div class="col-md-6 col-sm-12">
            
            <div id="content-area">
               <h4>Important details</h4>
               <div class="box">
                <a href="#" class="text" data-toggle="modal" data-target="#SummeryModal"><h4><i class="fa fa-pencil"></i> Summary</h4></a>
                  <div class="clearfix">                                       
                     <p>{{$seeker_detail->jsSeekerDetail->summary}}</p>
                  </div>
               </div>

               <div class="box">
                  <a href="#" class="text" data-toggle="modal" data-target="#expModal"><h4><i class="fa fa-pencil"></i>Add Work Experience</h4></a>
                  <div class="summary-box">
                    @foreach($seeker_detail->jsSeekerWorkExperiances as $experiance)
                    <h4><a href="#" class="text" data-toggle="modal" data-target="#expModal{{$experiance->id}}"><h4><i class="fa fa-pencil"></i>Edit</h4></a></h4>
                     <div class="outer">
                        <strong class="title">{{ $experiance->job_title }} <b></b></strong>
                        <div class="col">
                           <span>{{ Carbon::parse($experiance->statrt_date)->format('Y M')  }} - {{  Carbon::parse($experiance->end_date)->format('Y M') }}</span>
                           <p>{{ $experiance->summary }}. </p>
                        </div>
                     </div>
                     @endforeach
                     <div class="outer">
                        <strong class="title">Chief Software Analyst</strong>
                        <div class="col">
                           <span>2007 - 2009</span>
                           <p>Etiam luctus lobortis massa in pulvinar. Maecenas nunc odio, faucibus in malesuada a, dignissim at odio. Aenean eleifend urna. Duis ac augue sit amet ex blandit facilisis sit amet ut dui. </p>
                        </div>
                     </div>
                     {{-- <div class="outer padd-none">
                        <strong class="title">Cyber Development Manager</strong>
                        <div class="col">
                           <span>2003- 2006</span>
                           <p>Etiam luctus lobortis massa in pulvinar. Maecenas nunc odio, faucibus in malesuada a, dignissim at odio. Aenean eleifend urna. Duis ac augue sit amet ex blandit facilisis sit amet ut dui. Nulla pharetra fermentum mollis. Duis in tempor tortor. Suspendisse vitae nisl diam. Proin eu erat vestibulum, suscipit quam et, cursus ante.</p>
                        </div>
                     </div> --}}
                  </div>
               </div>
                
               <div class="box">
                  <a href="#" class="text" data-toggle="modal" data-target="#eduModal"><h4><i class="fa fa-pencil"></i> Qualifications</h4></a>
                  <div class="summary-box">
                    
                     <div class="outer">
                        <strong class="title">Master In Multimedia and 3D Animation Production</strong>
                        <div class="col">
                           <span>2010 - 2014</span>
                           <p>Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Donec sollicitudin molestie malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                     </div>
                     <div class="outer">
                        <strong class="title">Post Graduate</strong>
                        <div class="col">
                           <span>2007 - 2009</span>
                           <p>Etiam luctus lobortis massa in pulvinar. Maecenas nunc odio, faucibus in malesuada a, dignissim at odio. Aenean eleifend urna. Duis ac augue sit amet ex blandit facilisis sit amet ut dui. </p>
                        </div>
                     </div>
                     <div class="outer padd-none">
                        <strong class="title">Massachusetts Institute of Technology</strong>
                        <div class="col">
                           <span>2003- 2006</span>
                           <p>Etiam luctus lobortis massa in pulvinar. Maecenas nunc odio, faucibus in malesuada a, dignissim at odio. Aenean eleifend urna. Duis ac augue sit amet ex blandit facilisis sit amet ut dui. Nulla pharetra fermentum mollis. Duis in tempor tortor. Suspendisse vitae nisl diam. Proin eu erat vestibulum, suscipit quam et, cursus ante.</p>
                        </div>
                     </div>
                  </div>
               </div>
               
               
               <div class="box">
                  <div class="skills-box">
                     <h4>Skills</h4>
                     <div class="progress-box">
                        <strong class="title">Adobe Photoshop</strong>
                        <div class="progress">
                           <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 70%;"> <span> 70%</span> </div>
                        </div>
                     </div>
                     <div class="progress-box">
                        <strong class="title">Adobe Illustrator</strong>
                        <div class="progress">
                           <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 49%;"> <span> 49%</span> </div>
                        </div>
                     </div>
                     <div class="progress-box">
                        <strong class="title">WordPress</strong>
                        <div class="progress">
                           <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 85%;"> <span> 85%</span> </div>
                        </div>
                     </div>
                     <div class="progress-box">
                        <strong class="title">Development</strong>
                        <div class="progress">
                           <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 60%;"> <span> 60%</span> </div>
                        </div>
                     </div>
                     <div class="progress-box">
                        <strong class="title">HTML</strong>
                        <div class="progress">
                           <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 80%;"> <span> 80%</span> </div>
                        </div>
                     </div>
                  </div>
               </div>
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
                  <div class="sidebar">
                     <div class="box">
                        <div class="text-box">
                           <li style="list-style-type: none">
                              <div class="material-switch pull-right">
                                 <input checked id="someSwitchOptionSuccess" name="someSwitchOption001" type="checkbox"/>
                                 <label for="someSwitchOptionSuccess" class="label-success"></label>
                              </div>
                              Let employers find you
                              Public: Your profile is visible to anyone.
                           </li>
                        </div>
                     </div>
                  </div>
                  <div class="sidebar">
                     <div class="box">
                        <div class="text-box">
                           <li style="list-style-type: none">
                              I'm willing to relocate!
                              <div class="material-switch pull-right">
                                 <input checked id="someSwitchOptionSuccess1" name="someSwitchOption001" type="checkbox"/>
                                 <label for="someSwitchOptionSuccess" class="label-success"></label>
                              </div>
                           </li>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar">
                  <div class="box">
                     <div class="link-box">
                        <button type="button" class="btn btn-success openBtn"><i class="fa fa-plus-square"></i> Add Achivements</button>
                        <a href="#" class="text"><i class="fa fa-plus-square"></i> Add Certificate Licence</a>
                        <a href="#" class="text"><i class="fa fa-plus-square"></i> Add Associations</a>
                     </div>
                  </div>
               </div>
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
</section>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal with Dynamic Content</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



@stop 
@section('scripts')
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
   $('.openBtn').on('click',function(){
    
    $('.modal-body').load('content.html',function(){
        $('#myModal').modal({show:true});
    });
   });
   
</script>

 @stop