<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::all();
        return view("tasks.index", ['task'=>$tasks]);

    }

    public function create() {
        return view('tasks.create');
    }

    public function store(Request $request){
        $request->validate([
            'descrip_task' =>'required',
            'tipo_task' =>'required',
            'personal_task' => 'required',
        ]);

        $task = Task::create($request->all());
        return redirect()->route('tasks.index');
    }

    public function edit($task) {
         $task = Task::find($task);
         return view('tasks.edit',['task'=>$task]);
    }

    public function update(Request $request, Task $task) {
        $request->validate([
            'descrip_task' =>'required',
            'tipo_task' =>'required',
            'personal_task' => 'required',
        ]);

        $task->update($request->all());
        return redirect()->route('tasks.index');
    }



}
