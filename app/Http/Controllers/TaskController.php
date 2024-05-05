<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::where('user_id', auth()->user()->id)
        ->where('status', 'Completed')
        ->paginate(5);

        return view('tasks.index', compact(['tasks']));
    }

    public function create()
    {
        $projects = Project::latest()->get(); 

        return view('tasks.create', compact('projects'));
    }

    public function store(Request $request)
    {
        $task = Task::create([
            'project_id' => $request->project_id,
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => $request->status,
        ]);


        return redirect()->route('tasks.index');
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $task->update([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => $request->status,
        ]);

        return redirect()->route('tasks.index');
    }

}
