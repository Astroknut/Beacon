@extends ('layouts.app')


@section('content')

	<div class="col-sm-8 feed-main">
		@foreach ($posts as $post)
			@include('posts.post')
		@endforeach
	</div><!-- /.feed-main -->

@endsection