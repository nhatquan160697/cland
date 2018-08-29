@include('templates.cland.header')
<section id="content_area">
	<div class="clearfix wrapper main_content_area">
		<div class="clearfix main_content floatleft">
			@yield('content')
			@include('templates.cland.rightbar')
		</div>
	</div>
</section>
@include('templates.cland.footer')