@extends('layouts.app')


@section('content')

<div class="row justify-content-center">
	<div class="col-md-8">
		<h1 class="display-4 fw-bold my-5">Edit {{ $task->name}} task</h1>
		<div class="card card-default">
			<div class="card-header">
				Edit {{$task->name}} task
			</div>
			<div class="card-body">
				<form action="/tasks/{{ $task->id }}/update-task" method="POST">
					@csrf
					<div class="form-group">
						<div class="mb-3">
  							<label for="name" class="form-label">Task Name</label>
 		    				<input type="text" id="name" class="@error('name') is-invalid @enderror form-control"  name="name" value="{{ $task->name }}">

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
  							<textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="4">{{$task->description}}</textarea>
  							@error('description')
								<div class="invalid-feedback">
        							{{ $message }}
      							</div>
 		    				@enderror
						</div>
					</div>
					<div class="form-group">
						<div class="d-grid gap-2">
 							<button class="btn btn-primary" name="submit" type="submit">Update Task</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


@endsection