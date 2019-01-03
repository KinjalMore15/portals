@extends('web.master')
<style type="text/css">
   .for_modal.onrampNav {
   background: #fff;
   display: table;
   width: 100%;
   padding: 10px 21px 0;
   border-top-right-radius: 5px;
   border-top-left-radius: 5px;
   color: #000;
   text-align: center;
   border: 0;
   font-size: 100%;
   font: inherit;
   vertical-align: baseline;
   }
   div {
   margin: 0;
   padding: 0;
   border: 0;
   font-size: 100%;
   font: inherit;
   vertical-align: baseline;
   }
   .for_modal.onrampNav .path_title {
   margin: .5em 0;
   font-size: 1.7em;
   }
   .for_modal.onrampNav .progress-indicator {
   margin-bottom: 0;
   }
   .flexer, .progress-indicator {
   display: flex;
   }
   .progress-indicator {
   margin: 0;
   padding: 0;
   text-transform: uppercase;
   margin-bottom: 1em;
   }
   .progress-indicator>li .line:before {
   display: block;
   position: absolute;
   top: 9px;
   width: 50%;
   height: 3px;
   content: '';
   background-color: #cbcfd0;
   }
   .progress-indicator>li .line:after{
   right: 0;
   display: block;
   position: absolute;
   top: 9px;
   width: 50%;
   height: 3px;
   content: '';
   background-color: #cbcfd0;
   }
   .progress-indicator>li.completed .line:before {
   background-color: #71af05;
   z-index: 10;
   }
   ul {
   list-style: none;
   }
   .progress-indicator>li.completed, .progress-indicator>li.completed:hover {
   color: #71af05;
   }
   .progress-indicator>li.completed {
   color: #71af05;
   }
   .progress-indicator>li {
   color: #cbcfd0;
   }
   .progress-indicator>li {
   list-style: none;
   text-align: center;
   width: auto;
   padding: 0;
   margin: 0;
   position: relative;
   text-overflow: ellipsis;
   color: #bdc1c3;
   display: block;
   }.progress-indicator>li.completed, .progress-indicator>li.completed:hover {
   color: #71af05;
   }
   .progress-indicator>li.completed {
   color: #71af05;
   }
   .progress-indicator>li {
   color: #cbcfd0;
   }
   .progress-indicator>li {
   list-style: none;
   text-align: center;
   }
   .progress-indicator>li.completed .bubble {
   background-color: #71af05;
   color: #71af05;
   }
   .progress-indicator>li .bubble {
   display: inline-block;
   z-index: 11;
   position: absolute;
   left: 46.5%;
   background-color: #cbcfd0;
   border-radius: 1000px;
   width: 14px;
   height: 14px;
   background-color: #bdc1c3;
   display: block;
   margin: .3em auto .5em auto;
   font-size: .8em;
   }
   ul, menu, dir {
   display: block;
   list-style-type: disc;
   margin-block-start: 1em;
   margin-block-end: 1em;
   margin-inline-start: 0px;
   margin-inline-end: 0px;
   padding-inline-start: 40px;
   }
   .progress-indicator>li .step_txt {
   padding-top: 24px;
   display: block;
   }
   .progress-indicator .step_txt {
   font-size: .9em;
   }
   div{
   margin: 0;
   padding: 0;
   border: 0;
   font-size: 100%;
   font: inherit;
   vertical-align: baseline;
   }
   .progress-indicator>li {
   color: #cbcfd0;
   list-style: none;
   text-align: center;
   width: auto;
   padding: 0;
   margin: 0;
   position: relative;
   text-overflow: ellipsis;
   display: block;
   }
   .progress-indicator>li {
   flex: 1;
   }
   .section {
   line-height: 1.5;
   }
   span{
   margin: 0;
   padding: 0;
   border: 0;
   font-size: 100%;
   font: inherit;
   vertical-align: baseline;
   }
</style>
@section('web.banner')
<div class="banner-outer">
   <div id="banner" class="element"> <img src="{{ asset('public/assets/images/banner-img-1.png') }}" alt="banner"> </div>
   <div class="caption">
      <div class="holder">
         <div class="banner-menu">
            <ul>
               <li><a href="#">San Francisco</a></li>
               <li><a href="#">Palo Alto</a></li>
               <li><a href="#">Mountain View</a></li>
               <li><a href="#">Sacramento</a></li>
               <li><a href="#">New York</a></li>
               <li><a href="#">United Kindom</a></li>
               <li><a href="#">Asia Pacific</a></li>
            </ul>
         </div>
      </div>
   </div>
   <div class="browse-job-section">
      <div class="container">
         <div class="holder"> <a href="jobs.html" class="btn-brows">post Jobs</a> <strong class="title"></strong> </div>
      </div>
   </div>
</div>
@stop
@section('web.main')
<section class="resum-form padd-tb">
   <div class="container">
      <section class="resume-process padd-tb">
         <div class="container">
            <h2>Post your Resume &amp; Apply Online for Jobs in all over the World</h2>
            <strong>Create your professional resume with online resume builder and start applying for best jobs in all over the World</strong>
            <div class="row">
               <div class="col-md-3 col-sm-6">
                  <div class="option-box">
                     <div class="icon-box icon-colo-1"><i class="fa fa-files-o"></i></div>
                     <h4>Create Your Resume</h4>
                     <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusant.</p>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="option-box">
                     <div class="icon-box icon-colo-2"><i class="fa fa-bell"></i></div>
                     <h4>Get Daily Job Alerts</h4>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="option-box">
                     <div class="icon-box icon-colo-3"><i class="fa fa-paper-plane-o"></i></div>
                     <h4>Apply for Your Jobs</h4>
                     <p>Duis autem vel eum iriure dolor in hendre in vulputate velit esse molestie.</p>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="option-box">
                     <div class="icon-box icon-colo-4"><i class="fa fa-check-square-o"></i></div>
                     <h4>Get Hired</h4>
                     <p>Dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="account-option">
         <div class="container">
            <div class="inner-box">
               <div class="text-box">
                  <h4>Have an Account?</h4>
                  <p>If you don’t have an account you can create one below by entering your email address.
                     A password will be automatically emailed to you. 
                  </p>
               </div>
               <a href="#" class="btn-style-1"><i class="fa fa-sign-in"></i>Post Job Now</a> 
            </div>
         </div>
      </section>
   </div>
</section>
<button type="button" class="btn btn-info btn-lg" id="myBtn"  data-toggle="modal" data-target="#myModal">Open Modal</button>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h2>Create Your Free Employer Account</h2>
            <div class="onrampNav for_modal">
               <div class="simple-checkout-top">
                  <ul class="progress-indicator">
                     <li class="completed last">
                        <span class="line"></span>
                        <span class="bubble"></span>
                        <span class="step_txt">About You</span>
                     </li>
                     <li>
                        <span class="line"></span>
                        <span class="bubble"></span>
                        <span class="step_txt">Job Details</span>
                     </li>
                     <li>
                        <span class="line"></span>
                        <span class="bubble"></span>
                        <span class="step_txt">Free Trial</span>
                     </li>
                     <li>
                        <span class="line"></span>
                        <span class="bubble"></span>
                        <span class="step_txt">Candidates</span>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="modal-body">
            <div class="resum-form padd-tb">
               <div class="">
                  <div class="row">
                     <div class="col-md-12 col-sm-12">
                        <form action="http://html.crunchpress.com/jobinn/contact-form.php" method="post">
                           <div class="row">
                              <div class="col-md-12">
                                 <input name="name" required="" pattern="[a-zA-Z ]+" type="text" placeholder="Your Name">
                              </div>
                              <div class="col-md-12">
                                 <input name="email" required="" pattern="^[a-zA-Z0-9-\_.]+@[a-zA-Z0-9-\_.]+\.[a-zA-Z0-9.]{2,5}$" type="text" placeholder="Email">
                              </div>
                              <div class="col-md-12">
                                 <input name="password" required="" pattern="[a-zA-Z ]+" type="text" placeholder="Your password">
                              </div>
                              <div class="col-md-12">
                                 <input name="subject" required="" type="text" placeholder="Phone Number">
                              </div>
                              <div class="col-md-12">
                                 <div class="selector">
                                    <select class="full-width">
                                       <option value="1">Choose a Category</option>
                                       <option value="2">Choose a Category</option>
                                       <option value="3">Paris</option>
                                       <option value="4">Singapor</option>
                                    </select>
                                    <span class="custom-select full-width">Choose a Category</span>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <input name="subject" required="" type="text" placeholder="Company Name">
                              </div>
                              <div class="col-md-12">
                                 <input name="subject" required="" type="text" placeholder="Zip Code">
                              </div>
                              <div class="col-md-12">
                                 <input name="subject" required="" type="text" placeholder="Company website">
                              </div>
                              <div class="col-md-12">
                                 <textarea name="comments" required="" cols="10" rows="10" placeholder="Comments"></textarea>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
         </div>
      </div>
   </div>
</div>
@stop