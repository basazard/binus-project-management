<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class InboxController extends Controller
{
    public function index()
    {
        $tasks = Task::where('user_id', auth()->user()->id)
        ->whereNot('status', 'Completed')
        ->paginate(5);

        return view('inbox.index', compact(['tasks']));
    }
}
