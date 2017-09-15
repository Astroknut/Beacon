@extends ('layouts.app')


@section('content')

	<div class="col-sm-8 feed-main">
		<a href="/posts/create"><button>New Beacon</button></a>
		@foreach ($posts as $post)
			@include('Posts.post')
		@endforeach
	</div><!-- /.feed-main -->

@endsection