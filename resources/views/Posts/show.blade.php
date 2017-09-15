@extends ('layouts.app')

@section('content')

	<div class="col-sm-8 feed-main">
		
		<h1>{{ $post->title }}</h1>

		{{ $post->body }}

		<hr>
	</div>

@endsection