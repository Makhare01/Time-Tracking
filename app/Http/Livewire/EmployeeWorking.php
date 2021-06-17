<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Project;
use App\Models\ProjectEmployee;
use App\Models\Work;
use App\Models\Employee;
use App\Models\User;
use Carbon\Carbon;

class EmployeeWorking extends Component
{
    public $project;

    public function startWorking() {
        // dd($this->project);
        // exit;

        if((Employee::where("email", Auth::user()->email)->first())->exists()):
            $user = Employee::where("email", Auth::user()->email)->first();
        else:
            $user = null;
        endif;

        Work::create([
            'user_id' => Auth::user()->id,
            'user_email' => Auth::user()->email,
            'company_id' => $user->company_id,
            'project' => $this->project,
            'startedAt' => Carbon::now(),
            'status' => 'working',
            'total_time' => 0,
        ]);

        Employee::where('email', Auth::user()->email)->update([
            'status' => "working",
        ]);

        User::where('email', Auth::user()->email)->update([
            'status' => "working",
        ]);

        return redirect('/dashboard/work');
    }

    public function pauseWorking() {
        $work = Work::where('user_email', Auth::user()->email)->orderBy('updated_at', 'desc')->first();
        $total_time = $work->total_time;

        // if($work->total_time != 0):
        //     $finish_time = $work->total_time;
        // else:
        $finish_time = Carbon::now();
        // endif;

        $startTime = Carbon::parse($work->startedAt);
        $finishTime = Carbon::parse($finish_time);

        $totalDuration = $finishTime->diffInSeconds($startTime);

        $total_time += $totalDuration;

        $work->update([
            'total_time' => $total_time,
            'status' => 'resting',
        ]);

        // $totalDuration = $startTime->diff($finishTime)->format('%H:%I:%S');

        Employee::where('email', Auth::user()->email)->update([
            'status' => "resting",
        ]);

        User::where('email', Auth::user()->email)->update([
            'status' => "resting",
        ]);

        return redirect('/dashboard/work');
    }

    public function resumeWorking() {
        $work = Work::where('user_email', Auth::user()->email)->orderBy('updated_at', 'desc')->first();

        $work->update([
            'status' => 'working',
            'startedAt' => Carbon::now(),
        ]);

        Employee::where('email', Auth::user()->email)->update([
            'status' => "working",
        ]);

        User::where('email', Auth::user()->email)->update([
            'status' => "working",
        ]);

        return redirect('/dashboard/work');
    }

    public function endWorking() {
        $work = Work::where('user_email', Auth::user()->email)->orderBy('updated_at', 'desc')->first();
        $total_time = $work->total_time;

        $finish_time = Carbon::now();

        $startTime = Carbon::parse($work->startedAt);
        $finishTime = Carbon::parse($finish_time);

        $totalDuration = $finishTime->diffInSeconds($startTime);
        $total_time += $totalDuration;

        // dd($total_time);
        // exit;

        $work->update([
            'total_time' => $total_time,
            'status' => 'Ended',
            'finishedAt' => Carbon::now(),
        ]);

        Employee::where('email', Auth::user()->email)->update([
            'status' => "active",
        ]);

        User::where('email', Auth::user()->email)->update([
            'status' => "active",
        ]);

        return redirect('/dashboard/work');
    }

    public function render()
    {
        $projectsColumns = ProjectEmployee::where("employee_email", Auth::user()->email)->get();

        $projects = [];
        for($i=0; $i<count($projectsColumns); $i++) {
            $TMP = Project::find(intval($projectsColumns[$i]->project_id));
            array_push($projects, $TMP);
        }

        return view('livewire.employee-working', [
            'projects' => $projects,
        ]);
    }
}
