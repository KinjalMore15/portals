@extends('web.master') 
@section('styles')

<link href="{{ asset('public/assets/css/jobs.css') }}" rel="stylesheet" type="text/css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
</link>
<style type="text/css" media="screen">

.hoverWrapper a {
 display: visible;
 color: #FFF;
 float: right;
}

.hoverWrapper:hover a {
 display: block;
 color: #cbcfd0;
 
}
.description{
  display: block; /* or inline-block */
  text-overflow: ellipsis;
  word-wrap: break-word;
  overflow: hidden;
  max-height: 5em;
  line-height: 5em;
}
.btn-apply {
        background-color: #8ca930;
    display: table;
    margin: 0  -18px;
    padding: 12px 30px;
    font: 900 13px/13px 'Roboto', sans-serif;
    color: #fff;
    text-decoration: none;
    text-transform: uppercase;
    border-radius: 3px;
}
</style> 

@stop
@section('web.banner')
<section class="candidates-search-bar">

    <form method="post" action="{{ url('jobs-lists/search') }}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
            <div class="col-md-6">
                <input type="text" name="search" placeholder="Enter Job Title, Skills or Company">
            </div>
            <div class="col-md-5">
                <select class="full-width getLocation" name="zip" required value="{{ old('zip') }}" >
               </select>
            </div>           
            <div class="col-md-1">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </form>

</section>

@stop @section('web.main')
<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-4">
            <h2>Related People</h2>
            <aside>
                <div class="sidebar-jobs">
                    <ul>
                        <li>
                            <a href="#">Job By Location</a>
                            <div class="checkboxAreaChecked" id="myCheckbox0"></div>
                            <input id="id1" type="checkbox" class=" outtaHere">
                            <label>Charlotte, NC</label>
                            <br>
                            <div class="checkboxArea" id="myCheckbox0"></div>
                            <input id="id1" type="checkbox" class=" outtaHere">
                            <label>Chicago, IL</label>
                            <br>
                            <div class="checkboxAreaChecked" id="myCheckbox0"></div>
                            <input id="id1" type="checkbox" class=" outtaHere">
                            <label>Dallas, Texas</label>
                            <br>
                            <div class="checkboxArea" id="myCheckbox0"></div>
                            <input id="id1" type="checkbox" class=" outtaHere">
                            <label>Greensboro, NC</label>
                            <br>
                        </li>
                        <li>
                            <a href="#">Job By Experience</a>
                            <div class="checkboxAreaChecked" id="myCheckbox0"></div>
                            <input id="id1" type="checkbox" class=" outtaHere">
                            <label>Less than 1 Year</label>
                            <br>
                            <div class="checkboxArea" id="myCheckbox0"></div>
                            <input id="id1" type="checkbox" class=" outtaHere">
                            <label>1 to 2 Years</label>
                            <br>
                            <div class="checkboxArea" id="myCheckbox0"></div>
                            <input id="id1" type="checkbox" class=" outtaHere">
                            <label>2 to 3 Years</label>
                            <br>
                            <div class="checkboxArea" id="myCheckbox0"></div>
                            <input id="id1" type="checkbox" class=" outtaHere">
                            <label>3 to 5 Years</label>
                            <br>
                        </li>
                        <li>
                            <a href="#">Job Type</a>
                            <div class="checkboxArea" id="myCheckbox0"></div>
                            <input id="id1" type="checkbox" class=" outtaHere">
                            <label>Full Time</label>
                            <br>
                            <div class="checkboxArea" id="myCheckbox0"></div>
                            <input id="id1" type="checkbox" class=" outtaHere">
                            <label>Part Time</label>
                            <br>
                            <div class="checkboxArea" id="myCheckbox0"></div>
                            <input id="id1" type="checkbox" class=" outtaHere">
                            <label>permanant</label>
                            <br>
                            <div class="checkboxAreaChecked" id="myCheckbox0"></div>
                            <input id="id1" type="checkbox" class=" outtaHere">
                            <label>Contaract</label>
                            <br>
                        </li>

                    </ul>
                </div>
            </aside>
        </div>
        <div class="col-md-7 col-sm-8">
            <div class="jobs-content">               
                <h1>Showing All Jobs</h1>
                @foreach($jobs as $job)
                  <div class="box">
                    <div class="text-box" style="float: right;">                    
                    </div>
                        <h3 class="hideOverflow"><a href="{{ URL::to('/job_detail/'.$job->id) }}" style="text-decoration:none;">{{ $job->job_title }}</a></h3>
                       
                        <div class="clearfix"> 
                        @if(!empty($job->designation))
                        <i class="fa fa-briefcase"></i><b style="padding: 3px">{{ $job->designation }}</b> 
                        @endif
                        @if(!empty($job->city))
                        <i class="fa fa-map-marker"></i><b style="padding: 3px">{{ $job->city }}, {{ $job->state }}</b>
                        @endif
                        @if(!empty($job->min_salary))
                        <i class="fa fa-money"></i><b style="padding: 3px">${{ $job->min_salary }} - ${{ $job->max_salary }}</b>
                        @endif
                        </div>
                        <div class="description">
                        <p>{{ $job->job_description }} 
                        </p>
                        </div>
                        <span >Posted on:<i class="fa fa-calendar">{{$job->created_at}}</i> </span>

                    <div class="hoverWrapper">
                        <a href="{{ URL::to('/job_detail/'.$job->id) }}" class="btn-apply">apply</a>
                    </div>
                    </div>

                    @endforeach
                 
                </div>             
                {{ $jobs->appends(\Request::except('page'))->render() }}
                 
            </div>
        </div>
        
        <div class="col-md-3 col-sm-3">
        </div>
    </div>
</div>

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