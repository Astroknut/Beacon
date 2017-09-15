@extends ('layouts.app')

@section ('content')

	<div class="col-sm-8">
		<h1>Create A New Beacon</h1>

		<hr>

		<form method="POST" action="/posts">
			
			{{ csrf_field() }}

			<div class="form-group">
				<label for="title">Title:</label>
				<input type="text" class="form-control" id="title" name="title" required>
			</div>
			<div class="form-group">
				<label for="body">Beacon</label>
				<textarea name="body" id="body" class="form-control" required></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Broadcast</button>
			</div>
		</form>
	</div>

@endsection