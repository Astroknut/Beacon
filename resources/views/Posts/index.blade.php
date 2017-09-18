@extends ('layouts.app')


@section('content')

	<div class="col-sm-6 feed-main">
		<div class="logo">
			<a href="/posts/create"><button class="btn btn-primary">Broadcast a New Beacon</button></a>
			<h2 class="navy">Broadcast Feed</h2>
		</div>
		
		@foreach ($posts as $post)
			@include('Posts.post')
		@endforeach

	</div><!-- /.feed-main -->

@endsection