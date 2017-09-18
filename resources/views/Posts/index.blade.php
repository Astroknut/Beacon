@extends ('layouts.app')


@section('content')

	<div class="col-sm-6 feed-main">
		<div id="logo">
			<h2 class="candy-apple">Broadcast Feed</h2>
			<img src="/img/beacon.png">
		</div>
		
		@foreach ($posts as $post)
			@include('Posts.post')
		@endforeach

	</div><!-- /.feed-main -->

	@include('layouts.beacon')

@endsection