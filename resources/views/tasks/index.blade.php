@extends('layouts.app')

@section('content')


		<h1 class="display-2 fw-bold my-5 text-center">Task Manager</h1>
		<div class="row justify-content-center">
			<div class="col-md-8-offset-2">
				<div class="card">
					<div class="card-header">
						Tasks
					</div>
					<div class="card-body">
						<ul class="list-group">
							@foreach($tasks as $task)
								<li class="list-group-item">
									{{ $task->name }}
									<div class="float-end col-md-2 d-flex justify-content-evenly">
										<a class="float-end text-decoration-none" href="/tasks/{{ $task->id}}">View Task</a>

										@if(!$task->completed)
										<a class="float-end text-decoration-none link-info" href="/tasks/{{ $task->id}}/complete">Complete</a>
										@endif
									</div>
									
								</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
@endsection