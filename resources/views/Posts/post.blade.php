<div class="feed-post">
	
	<h2 class="feed-post-title">
		<a href="/posts/{{ $post->id }}">
			{{$post->title}}
		</a>
	</h2>

	<p class="feed-post-meta">
		{{ $post->user->name }} at {{ $post->created_at->toFormattedDateString() }}
	</p>

	{{ $post->body }}
</div><!-- /.feed-post -->
