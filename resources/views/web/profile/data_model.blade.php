
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Remote file for Bootstrap Modal</title>  
</head>
<body>@extends('web.master')
@section('styles')
<style type="text/css">
.sidebar .box {
    float: left;
    width: 100%;
    background: #fff;
    box-shadow: 1px 2px 2px 0 rgba(0, 0, 0, .15);
    -moz-box-shadow: 1px 2px 2px 0 rgba(0, 0, 0, .15);
    -webkit-box-shadow: 3px 5px 5px 5px rgba(0, 0, 0, .15);
    border-radius: 4px;
    margin: 0 0 40px;
}
.sidebar h4 {
    margin: 13px 220px 15px;
    position: relative;
    }
.sidebar .box .thumb:before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    background: #fff;
}
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
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
body {
    font-family: helvetica neue,Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;   
    background-color: #fff;
}
.sidebar .box .thumb {
    float: left;
    border: 2px solid #73AD21;
    padding: 0px;
    width: 100%;
    overflow: hidden;
    background: #fff;
    position: relative;
    border-radius: 150px;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.sidebar .box .thumb:before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    opacity: .4;
    background: #fff;
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
            <h3>About Me</h3>            
          
            <aside>
               <div class="sidebar">
                  <div class="box">
                    <h4><button type="button" class="btn  btn-sm addProjectModal" data-toggle="modal"  data-target="#yourModal">
    Edit</button></h4>
    
    
                     <div class="thumb"> <a href="#"><img src="{{ asset('public/assets/images/companies/companies-img-2.jpg') }}" alt="img"></a>
                        
                     </div>
                     <div class="text-box">
                        
                        <h4><a href="#">Life Insurance LLC</a></h4>
                        <a href="#" class="text"><i class="fa fa-globe"></i>http://www.cfstaffing.com/</a>
                        
                  </div>
                  
               </div>
            </aside>
         </div>
         <div class="col-md-6 col-sm-8">
            <div id="content-area">
               <div class="box">
                  <div class="modal fade" id="yourModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                     <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title">Modal title</h4>
            </div>      <!-- /modal-header -->
            <div class="modal-body">
            <p>11111111111Excitavit hic ardor milites per municipia plurima, quae isdem conterminant, dispositos et castella, sed quisque serpentes latius pro viribus repellere moliens, nunc globis confertos, aliquotiens et dispersos multitudine superabatur ingenti.</p>
            </div>      <!-- /modal-body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>  
                    </div>
                  </div>
                </div>
                  <div class="text-col">
                     <h2><a href="#">Creative Financial Staffing</a></h2>

                      <div class="clearfix">
                           <strong><i class="fa fa-map-marker"></i> Mountain View, CA </strong>&nbsp &nbsp
                           <strong><a href="#"><i class="fa fa-globe"></i> https://www.jobinn.com</a></strong>
                      </div>
                     
                     <ul class="clearfix">
                        <li><strong>Company Type:</strong> Private</li>
                        <li><strong>Industry Type:</strong> Employment - Recruiting - Staffing</li>
                       
                     </ul>
                     <div class="company-social">
                           <ul>
                              
                              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                           </ul>
                        </div>                      
                    
                  </div>
                  <div class="clearfix">
                     <h4>Overview</h4>
                     <p>Life Insurance LLC. In marketing communications, we dream it and create it. All of the company’s promotional and communication needs are completed in-house by these “creatives” in an advertising agency-based set-up. This includes everything from advertising, promotions and print production to media relations, exhibition coordination and website maintenance. Everyone from artists, writers, designers, media buyers, event coordinators, video producers/editors and public relations specialists work together to bring campaigns and product-centric promotions to life.</p>
                     <p>If you’re a dreamer, gather up your portfolio and show us your vision. Garmin is adding one more enthusiastic individual to our in-house Communications expert team.</p>
                     <h4>Business Details</h4>
                     <p>Minimum of 5 years creative experience in a graphic design studio or advertising ad agency environment is required. Qualified candidates for this role will possess the following education, experience and skills:</p>
                     <ul>
                        <li><i class="fa fa-check-square-o"></i>Demonstrated strong and effective verbal, written, and interpersonal communication skills</li>
                        <li><i class="fa fa-check-square-o"></i>Must be team-oriented, possess a positive attitude and work well with others</li>
                        <li><i class="fa fa-check-square-o"></i>Ability to prioritize and multi-task in a flexible, fast paced and challenging environment</li>
                     </ul>
                     <h4>Benefits</h4>
                     <ul>
                        <li><i class="fa fa-check-square-o"></i>Must have minimum of 3 years experience running, maneuvering, driving, and navigating equipment such as bulldozer, excavators, rollers, and front-end loaders.</li>
                        <li><i class="fa fa-check-square-o"></i>Strongly prefer candidates with High School Diploma</li>
                        <li><i class="fa fa-check-square-o"></i>Must be able to perform physical activities that require considerable use of your arms and legs and moving your whole body, such as climbing, lifting, balancing, walking, stooping, and handling of materials.</li>
                     </ul>
                    
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-3 col-sm-4">            
            <h3>Recommended at Creative Financial Staffing</h3>
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
@stop


<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

<script type="text/javascript">


   $(window).load(function() {
    $('#yourModal').modal('show');
    
});
   $(document).click(function(e){
  
    window.location.href="{{ url('/candidate_profile') }}";
})
</script>




</body>
</html>