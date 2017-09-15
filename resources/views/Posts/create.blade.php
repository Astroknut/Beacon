@extends ('layouts.app')

@section ('content')

	<div class="col-sm-6">
		<h1>Create A New Beacon</h1>

		<hr>

		<form method="POST" action="/posts">
			
			{{ csrf_field() }}

			<div class="form-group">
				<label for="title">Title:</label>
				<input type="text" class="form-control" id="title" name="title" placeholder="Enter Your Beacon's Headline" required>
			</div>
			<div class="form-group">
				<label for="body">Beacon</label>
				<textarea name="body" id="body" class="form-control" rows="10" placeholder="What Would You Like to Broadcast?" required></textarea>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Broadcast</button>
			</div>
		</form>
	</div>

@endsection