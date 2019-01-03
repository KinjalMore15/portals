@extends('web.master')
@section('styles')
<link href="{{ asset('public/assets/css/intro.css') }}" rel="stylesheet" type='text/css'>

@stop
@section('web.banner')

<section id="inner-banner">
	<div class="container">
		<h1>Homer Simpson</h1>
	</div>
</section>

@stop
@section('web.main')
<section class="resumes-section padd-tb">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="resumes-content">
					


					
					<div class="summary-box">
						<h4>Qualifications</h4>
						<div class="outer col-md-4" data-step="1" data-intro="text step 1" data-position='bottom'> <strong class="title">Master In Multimedia and 3D Animation Production</strong>
							<div class="col"> <span>2010 - 2014</span>
								<p>Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Donec sollicitudin molestie malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
							</div>
						</div>
						<div class="outer col-md-4"data-step="2" data-intro="text step 2" data-position='bottom'> <strong class="title">Post Graduate</strong>
							<div class="col"> <span>2007 - 2009</span>
								<p>Etiam luctus lobortis massa in pulvinar. Maecenas nunc odio, faucibus in malesuada a, dignissim at odio. Aenean eleifend urna. Duis ac augue sit amet ex blandit facilisis sit amet ut dui. </p>
							</div>
						</div>
						<div class="outer col-md-4" data-step="3" data-intro="text step 3" data-position='bottom'> <strong class="title">Massachusetts Institute of Technology</strong>
							<div class="col"> <span>2003- 2006</span>
								<p>Etiam luctus lobortis massa in pulvinar. Maecenas nunc odio, faucibus in malesuada a, dignissim at odio. Aenean eleifend urna. Duis ac augue sit amet ex blandit facilisis sit amet ut dui. Nulla pharetra fermentum mollis. Duis in tempor tortor. Suspendisse vitae nisl diam. Proin eu erat vestibulum, suscipit quam et, cursus ante.</p>
							</div>
						</div>
					</div>
					<div class="flexcontainer">
						<button type="button" class="btn btn-success">start</button>
					</div>

					
				</div>
			</div>
			
		</div>
	</div>
</section>
@stop

@section('scripts')

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="{{ asset('public/assets/js/intro.js') }}"></script>
<script type="text/javascript">
$("button").on("click", function(){
	introJs().start(); 
})
</script>
@stop


