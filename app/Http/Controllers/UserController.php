<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Employee;
use App\Models\User;
use App\Models\ProjectEmployee;

class UserController extends Controller
{
    public function work() {
        $projectsColumns = ProjectEmployee::where("employee_email", Auth::user()->email)->get();

        $projects = [];
        $projectIds = [];
        for($i=0; $i<count($projectsColumns); $i++) {
            $TMP = Project::find(intval($projectsColumns[$i]->project_id));
            array_push($projects, $TMP);
            array_push($projectIds, $TMP->id);
        }

        $user = Employee::where('email', Auth::user()->email)->first();
        $employeeCompany = $user->company_id;

        $teammates = Employee::where('company_id', $employeeCompany)->get();

        // dd($teammates);
        // exit;

        return view('work', [
            'projects' => $projects,
            'projectIds' => $projectIds,
            'teammates' => $teammates,
        ]);
    }
}
