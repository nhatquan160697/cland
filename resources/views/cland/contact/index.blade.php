@extends('templates.cland.master')
@section('title')
	Liên hệ với chúng tôi
@endsection
@section('content')
<div class="clearfix content">
						
	<div class="contact_us">
	
		<h1>Liên hệ với chúng tôi</h1>
		
		<p>
		TRUNG TÂM ĐÀO TẠO LẬP TRÌNH VINAENTER EDU<br />
		Trụ sở: 154 Phạm Như Xương, Liên Chiểu, Đà Nẵng<br />
		Web: <a href="http://vinaenter.edu.vn" title="">www.vinaenter.edu.vn</a>
		</p>
		
		<form>
			<p><input type="text" class="wpcf7-text" placeholder="Họ tên *"/></p>
			<p><input type="text" class="wpcf7-email" placeholder="Email *"/></p>
			<p><input type="text" class="wpcf7-text" placeholder="Chủ đề *"/></p>
			<p><textarea class="wpcf7-textarea" placeholder="Nội dung *"></textarea></p>
			<p><input type="Submit" class="wpcf7-submit" value="Gửi liên hệ"/></p>
		</form>
		
	</div>
	
</div>
@endsection
