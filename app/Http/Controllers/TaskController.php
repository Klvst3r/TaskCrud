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
                'descripcion' =>'required',
                'tipo' =>'required',
                'atencion' => 'required',
            ]);

            $task = Task::create($request->all());
            return redirect()->route('tasks.index');
        }
}
