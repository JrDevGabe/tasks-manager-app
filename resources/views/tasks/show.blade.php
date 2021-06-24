@extends('layouts.app')

@section('content')

		<h1 class="display-4 fw-bold my-5">{{ $task->name}}</h1>
		<div class="row justify-content-center">
			<div class="col-md-8-offset-2">
				<div class="card card-default">
					<div class="card-header">
						{{ $task->name}}
					</div>
					<div class="card-body">
						<p>{{ $task->description }}</p>
					</div>

					 <div class="card-footer">
					 	<div class="col-sm-2 float-end d-flex justify-content-between">
					 		<a href="/tasks/{{ $task->id }}/edit" class="link-primary text-decoration-none fs-5" >Edit</a>
					 		<a href="/tasks/{{ $task->id }}/delete" class="link-danger text-decoration-none fs-5">Delete</a>
					 	</div>
					 </div>
				</div>
			</div>
		</div>
	
@endsection