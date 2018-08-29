@extends('templates.cland.master')
@section('title')
	Chi tiết tin
@endsection
@section('content')
<div class="clearfix content">
		@foreach($findNews as $detailNews)
		<h1> {{ $detailNews->name }} </h1>
		<div class="clearfix post-meta">
			<p><span><i class="fa fa-clock-o"></i> Địa chỉ: Phạm Như Xương - Đà Nẵng</span> <span><i class="fa fa-folder"></i> Diện tích: 100m2</span></p>
		</div>

		<div class="vnecontent">
			<p>{{ $detailNews->detail_text }}</p>
		</div>
		@endforeach
		<a class="btn" href="">Bài trước</a>
		<a class="btn" href="">Bài kế</a>

	</div>

		<div class="more_themes">
			<h2>Bất động sản liên quan <i class="fa fa-thumbs-o-up"></i></h2>
			<div class="more_themes_container">
				@foreach($relatedNews as $news)
				@php
					$name = $news->name;
					$id = $news->story_id;
					$slug_name = str_slug($name);
					$url = route('cland.news.detail',['slug'=> $slug_name, 'id'=> $id]);
				@endphp
				<div class="single_more_themes floatleft">
					<img src="http://dummyimage.com/220x150/000/fff&text=Thumbnail" alt=""/>
					<a href="{{ $url }}"><h2>{{ $name }} </h2></a>
				</div>
				@endforeach
			</div>
		</div>
</div>
@endsection
