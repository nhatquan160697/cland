<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<title>CLand | VinaEnter Edu</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--Oswald Font -->
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="/templates/cland/css/tooltipster.css" />
		<!-- home slider-->
		<link href="/templates/cland/css/pgwslider.css" rel="stylesheet">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="/templates/cland/css/font-awesome.min.css">
		<link href="/templates/cland/style.css" rel="stylesheet" media="screen">	
		<link href="/templates/cland/responsive.css" rel="stylesheet" media="screen">		
	</head>

	<body>
	
		<section id="header_area">
			<div class="wrapper header">
				<div class="clearfix header_top">
					<div class="clearfix logo floatleft">
						<a href="index.html"><h1><span>C</span>Land</h1></a>
					</div>
					<div class="clearfix search floatright">
						<form>
							<input type="text" placeholder="Search"/>
							<input type="submit" />
						</form>
					</div>
				</div>
				<div class="header_bottom">
					<nav>
						<ul id="nav">
							<li><a href="{{ route('cland.index.index') }}">Trang chủ</a></li>
							<li id="dropdown"><a href="{{ route('cland.news.index') }}">Bất động sản</a>
								<ul>
									@foreach($getAllCat as $allCats)
									@php
										$cid = $allCats->cat_id;
										$name = $allCats->name;
										$slug_name = str_slug($name);
										$url = route('cland.news.cat',['slug'=>$slug_name,'cid'=>$cid])
									@endphp
									<li><a href="{{ $url }}">{{ $allCats->name }}</a></li>
									@endforeach
								</ul>
							</li>
							<li><a href="{{ route('cland.single.index') }}">Giới thiệu</a></li>
							<li><a href="{{ route('cland.contact.index') }}">Liên hệ</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</section>