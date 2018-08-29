@extends('templates.cland.master')
@section('title')
	Trang chủ
@endsection
@section('content')
<div class="clearfix slider">
	<ul class="pgwSlider">
		<li><img src="/templates/cland/images/thumbs/megamind_07.jpg" alt="Paris, France" data-description="Eiffel Tower and Champ de Mars" data-large-src="/templates/cland/images/slides/megamind_07.jpg"/></li>
		<li><img src="/templates/cland/images/thumbs/wall-e.jpg" alt="Montréal, QC, Canada" data-large-src="/templates/cland/images/slides/wall-e.jpg" data-description="Eiffel Tower and Champ de Mars"/></li>
		<li>
			<img src="/templates/cland/images/thumbs/up-official-trailer-fake.jpg" alt="Shanghai, China" data-large-src="/templates/cland/images/slides/up-official-trailer-fake.jpg" data-description="Shanghai ,chaina">
		</li>


	</ul>
</div>

<div class="clearfix content">
	<div class="content_title"><h2>Bài viết mới</h2></div>
	@foreach($getAllNews as $allNews)
	@php
		$name = $allNews->name;
		$preview = $allNews->preview_text;
	@endphp
	<div class="clearfix single_content">
		<div class="clearfix post_date floatleft">
			<div class="date">
				<h3>27</h3>
				<p>Tháng 3</p>
			</div>
		</div>
		<div class="clearfix post_detail">
			<h2><a href="">{!! $name !!}</a></h2>
			<div class="clearfix post-meta">
				<p><span><i class="fa fa-clock-o"></i> Địa chỉ: Phạm Như Xương - Đà Nẵng</span> <span><i class="fa fa-folder"></i> Diện tích: 100m2</span></p>
			</div>
			<div class="clearfix post_excerpt">
				<img src="/templates/cland/images/thumb.png" alt=""/>
				<p>{!! $preview !!}</p>
			</div>
			<a href="">Đọc thêm</a>
		</div>
	</div>
	@endforeach
</div>

<div class="pagination">
	<nav>
		<ul>
			<li><a href=""> << </a></li>
			<li><a href="">1</a></li>
			<li><a href="">2</a></li>
			<li><a href="">3</a></li>
			<li><a href="">4</a></li>
			<li><a href=""> >> </a></li>
		</ul>
	</nav>
</div>
</div>
@endsection
