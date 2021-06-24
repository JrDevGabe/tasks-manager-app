<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TaskManagerController extends Controller
{
    public function index(){

    	$tasks = Task::all();
    	return view('tasks.index')->with('tasks',$tasks);
    }
    public function show(Task $task){

    	return view('tasks.show')->with('task',$task);
    }

    //CRUD
    public function create(){
    	return view('tasks.create');
    }


    public function edit(Task $task){
       
        return view('tasks.edit')->with('task', $task);
    }

    public function update(Task $task){
        
        $this->validate(request(), [
        'name' => 'required|min:6|max:50',
        'description' => 'required'
       ]); 

        $data = request()->all();
        $task->name = $data['name'];
        $task->description = $data['description'];

        $task->save();
        session()->flash('success', 'Tasks was update successfully');

        return redirect('/tasks');


    }    

    public function destroy(Task $task){

        $task->delete();
        session()->flash('success', 'Tasks was deleted successfully');
        return redirect('/tasks');

    }

    //End of CRUD

    public function store(){

       $this->validate(request(), [
        'name' => 'required|min:6|max:50',
        'description' => 'required'
       ]); 
        $data = request()->all();
        $task = new Task();

        $task->name = $data['name'];
        $task->description = $data['description'];
        $task->completed = false;

        $task->save();

        session()->flash('success', 'Tasks was created successfully');

        return redirect('/tasks');
    }

    public function complete(Task $task){
        $task->completed = true;

        $task->save();
        session()->flash('success', 'Tasks was completed successfully');
    }

}
