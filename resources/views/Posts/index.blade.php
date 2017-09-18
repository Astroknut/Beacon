@extends ('layouts.app')


@section('content')

	<div class="col-sm-6 feed-main">
		<div id="logo">
			<img src="/img/beacon.png">
			<h2 class="navy">Broadcast Feed</h2>
		</div>
		
		@foreach ($posts as $post)
			@include('Posts.post')
		@endforeach

	</div><!-- /.feed-main -->

	@include('layouts.beacon')

@endsection