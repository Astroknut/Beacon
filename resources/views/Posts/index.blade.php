@extends ('layouts.app')


@section('content')

	<div class="col-sm-6 feed-main">
		
		@foreach ($posts as $post)
			@include('Posts.post')
		@endforeach

	</div><!-- /.feed-main -->

	@include('layouts.beacon')

@endsection