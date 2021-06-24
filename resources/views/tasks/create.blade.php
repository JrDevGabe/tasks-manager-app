@extends('layouts.app')


@section('content')

<div class="row justify-content-center">
	<div class="col-md-8">
		<h1 class="display-4 fw-bold my-5">Create A New Task</h1>
		<div class="card card-default">
			<div class="card-header">
				Create a new task
			</div>
			<div class="card-body">
				<!-- @if($errors->any())
					<div class="alert alert-danger" role="alert">
 						 <ul class="list-group">
 						 	@foreach($errors->all() as $error)
 						 		<li class="list-item">
 						 			{{ $error }}
 						 		</li>
 						 	@endforeach
 						 </ul>
					</div>
				@endif -->
				<form action="/create-task" method="POST">
					@csrf
					<div class="form-group">
						<div class="mb-3">
  							<label for="name" class="form-label">Task Name</label>
 		    				<input type="text" id="name" class="@error('name') is-invalid @enderror form-control"  name="name">

 		    				@error('name')
								<div class="invalid-feedback">
        							{{$message}}
      							</div>
 		    				@enderror
						</div>
					</div>
					<div class="form-group">
						<div class="mb-3">
  							<label for="description" class="form-label">Task Description</label>
  							<textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="4"></textarea>
  							@error('description')
								<div class="invalid-feedback">
        							{{ $message }}
      							</div>
 		    				@enderror
						</div>
					</div>
					<div class="form-group">
						<div class="d-grid gap-2">
 							<button class="btn btn-primary" name="submit" type="submit">Create A New Task</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


@endsection