<div class="feed-post">
	
	<h2 class="feed-post-title">
		<a href="/posts/{{ $post->id }}">
			{{$post->title}}
		</a>
	</h2>

	{{ $post->body }}
	
	<p class="feed-post-meta">
		{{ $post->user->name }} at {{ $post->created_at->toFormattedDateString() }}
	</p>
</div><!-- /.feed-post -->
