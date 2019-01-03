@extends('web.master')
@section('styles')
<link href="{{ asset('public/assets/css/editor.css') }}" type="text/css" rel="stylesheet" />

  <link href="{{ asset('public/assets/css/timeline.css') }}" type="text/css" rel="stylesheet" /> 

@stop
@section('web.banner')
@stop
@section('web.main')
<section class="resum-form padd-tb">
   <div class="container">
       <div class="onrampNav for_modal">
         <div class="simple-checkout-top">
            <ul class="progress-indicator">
               <li class="completed">
                  <span class="line"></span>
                  <span class="bubble"></span>
                  <span class="step_txt">Company Details</span>
               </li>
               <li class="completed last">
                  <span class="line"></span>
                  <span class="bubble"></span>
                  <span class="step_txt">Employer Details</span>
               </li>
               <li>     
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
      <form action="#">
         <div class="row">
            <div class="col-md-2 col-sm-1">
            </div>
            <div class="col-md-8 col-sm-10">
               <div class="col-md-12 col-sm-12">
                  <label>Job Title*</label>
                  <input type="text" placeholder="Enter Job Title">
               </div>
               <div class="col-md-12 col-sm-12">
                  <label>Job Location*</label>
                  <input type="text" placeholder="Zip or City, State">
               </div>
               <div class="col-md-12 col-sm-12">
                  <label>Job Category*</label>
                  <div class="selector">
                     <select class="full-width">
                        <option value="1">Choose a Category</option>
                        <option value="2">Choose a Category</option>
                        <option value="3">Banking</option>
                        <option value="4">Engineering</option>
                     </select>
                     <span class="custom-select full-width">-Select Job Category-</span>
                  </div>
               </div>
               <div class="col-md-12 col-sm-12">
                  <label>Employment Type*</label>
                  <div class="selector">
                     <select class="full-width">
                        <option value="1">Full Time</option>
                        <option value="2">Part Time</option>
                        <option value="3">Contractor</option>
                        <option value="4">Temporary</option>
                     </select>
                     <span class="custom-select full-width">Choose a Category</span>
                  </div>
               </div>
               <div class="col-md-12 col-sm-12">
                  <label>Job Description*</label>
                  <div class="text-editor-box">
                     <div class="row-fluid Editor-container">
                        <div id="menuBarDiv" class="row-fluid">
                           <div class="btn-group">
                              <div class="btn-group" title="Fonts" style="cursor: pointer;"></div>
                              <div class="btn-group" title="Paragraph Format" style="cursor: pointer;"></div>
                              <div class="btn-group" title="Font Size" style="cursor: pointer;"></div>
                           </div>
                           <div class="btn-group"><a href="javascript:void(0)" class="btn btn-default" title="Bold" style="cursor: pointer;"><i class="fa fa-bold"></i></a><a href="javascript:void(0)" class="btn btn-default" title="Italics" style="cursor: pointer;"><i class="fa fa-italic"></i></a></div>
                           <div class="btn-group"><a href="javascript:void(0)" class="btn btn-default" title="Insert/Remove Numbered List" style="cursor: pointer;"><i class="fa fa-list-ol"></i></a><a href="javascript:void(0)" class="btn btn-default" title="Insert/Remove Bulleted List" style="cursor: pointer;"><i class="fa fa-list-ul"></i></a></div>
                           <div class="btn-group"><a href="javascript:void(0)" class="btn btn-default" title="Toggle Screen" style="cursor: pointer;"><i class="fa fa-arrows-alt"></i></a></div>
                        </div>
                        <div class="Editor-editor" contenteditable="true" style="overflow: auto;"></div>
                        <div id="statusbar" class="row-fluid" unselectable="on"></div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 col-sm-12">
                  <label>Why Work at This Company?: *</label>
                  <input type="text" placeholder="Lots of opportunity to growth">
               </div>
               <div class="col-md-12 col-sm-12">
                  <label>Salary Package</label>
                  <input type="text" placeholder="e.g. $7000 - 9000">
               </div>
               
               <div class="col-md-12 col-sm-12">
                  <label>Benefits*</label>
                  <div class="check-filter">
                     <ul>
                        <li>
                           <div class="checkboxArea" id="myCheckbox0"></div>
                           <input id="id1" type="checkbox" class=" outtaHere">
                           <label>Medical</label>
                        </li>
                        <li>
                           <div class="checkboxArea" id="myCheckbox1"></div>
                           <input id="id2" type="checkbox" class=" outtaHere">
                           <label>Dental</label>
                        </li>
                        <li>
                           <div class="checkboxArea" id="myCheckbox2"></div>
                           <input id="id3" type="checkbox" class=" outtaHere">
                           <label>Insurance</label>
                        </li>
                        <li>
                           <div class="checkboxArea" id="myCheckbox3"></div>
                           <input id="id4" type="checkbox" class=" outtaHere">
                           <label>Travel</label>
                        </li>
                        
                        <li>
                           <div class="checkboxArea" id="myCheckbox6"></div>
                           <input id="id7" type="checkbox" class=" outtaHere">
                           <label>Temporary</label>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="btn-col">
                     <a href="{{ url('/employer/pay_plan') }}">
                     <input type="" value="Save and Continue">
                     </a>
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
@stop