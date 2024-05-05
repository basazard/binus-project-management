<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $project = Project::count();
        $completed = Task::where('user_id', auth()->user()->id)
            ->where('status', 'Completed')
            ->count();
        $uncompleted = Task::where('user_id', auth()->user()->id)
            ->whereNot('status', 'Completed')
            ->count();

        $projectYearly = Project::select(DB::raw("COUNT(*) as count"))
            ->whereYear('start_date', date('Y'))
            ->groupBy(DB::raw("Month(start_date)"))
            ->pluck('count');

        return view('dashboard', compact(['project', 'completed', 'uncompleted','projectYearly']));
    }
}
