@extends('templates.cland.master')
@section('title')
	Tin tức
@endsection
@section('content')
<div class="clearfix content">
	<div class="content_title"><h2>Tin tức</h2></div>
	<div class="clearfix single_work_container">
		@foreach($getAllNews as $allNews)
		@php
			$name = $allNews->name;
			$preview = $allNews->preview_text;
		@endphp
		<div class="clearfix single_work">
			<img class="img_top" src="/templates/cland/images/work1.png" alt=""/>
			<img class="img_bottom" src="/templates/cland/images/work_bg2.png" alt=""/>
			<h2>{{ $name }}</h2>
			<a href=""><p class="caption">{{ $preview }}</p></a>
		</div>
		@endforeach

		<div class="clearfix work_pagination">
			<nav>
				<a class="newer floatleft" href=""> < -- Trang trước</a>
				<a class="older floatright" href="">Trang kế -- ></a>
			</nav>
		</div>

	</div>
</div>

</div>
@endsection
