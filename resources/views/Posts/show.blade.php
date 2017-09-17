@extends ('layouts.app')

@section('content')

	<div class="col-sm-6 feed-main">
		
		<h1>{{ $post->title }}</h1>
		<h5>by {{ $post->user->name }} from {{ $post->user->zip }}</h5>

		{{ $post->body }}

		<hr>

		<div class="comments">
			<ul class="list-group">
				@foreach ($post->comments as $comment)
					<li class="list-group-item list-group-item-info">
						<strong>
							{{ $comment->created_at->diffForHumans() }}: &nbsp;
						</strong>
							{{ $comment->body }}
					</li>
				@endforeach
			</ul>
		</div>

		<div class="card">
			<div class="card-block">
				<form method="POST" action="/posts/{{ $post->id }}/comments">
					{{ csrf_field() }}

					<div class="form-group">
						<textarea name="body" id="body" placeholder="Enter Your Comment Here" cols="40" rows="5" required></textarea>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary">Add Comment</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	@include('layouts.beacon')

@endsection