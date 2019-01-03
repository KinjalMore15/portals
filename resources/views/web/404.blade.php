@extends('web.master')

@section('styles')
   <link href="{{ asset('public/assets/css/jsprofile.css') }}" rel="stylesheet" type='text/css'>
   </link>
   
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

@section('web.banner')

@stop 
@section('web.main')
<section class="recent-row padd-tb job-detail">
   <h2 style="text-align: center;">404 Page Not Found</h2>
</section>
<!-- Modal -->

@stop 
@section('scripts')
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>

@stop