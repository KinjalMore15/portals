@extends('web.master')
@section('styles')
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
                     <div class="thumb"> <a href="#"><img src="{{ asset('public/assets/images/companies/companies-img-3.jpg') }}" alt="img"></a>
                        
                     </div>
                     <div class="text-box">
                        
                        <h4><a href="#">{{ $company_detail->company_name }}</a></h4>
                        <a href="#" class="text"><i class="fa fa-globe"></i>http://www.cfstaffing.com/</a>
                        
                  </div>
                  
               </div>
            </aside>
         </div>
         <div class="col-md-6 col-sm-8">
            <div id="content-area">
               <div class="box">
                  
                  <div class="text-col">
                     <h2><a href="#">{{ $company_detail->company_name }}</a></h2>

                      <div class="clearfix">
                           <strong><i class="fa fa-map-marker"></i> {{ $company_detail->company_city }}, {{ $company_detail->company_state   }} </strong>&nbsp &nbsp
                           <strong><a href="#"><i class="fa fa-globe"></i> https://www.jobinn.com</a></strong>
                      </div>
                     
                     <ul class="clearfix">
                        <li><strong>Company Type:</strong>  {{ $company_detail->company_city }}</li>
                        <li><strong>Industry Type:</strong> {{ $owner_type[$company_detail->company_type] }}</li>
                       
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
                     <p>{{ $company_detail->company_description }} </p>
                                        
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

@section('scripts')


@stop


