<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Project;
use App\Models\Employee;
use App\Models\ProjectEmployee;

class EmployeeProjects extends Component
{

    public function changeStatus($status, $id) {
        Project::where("id", $id)->update([
            'project_status' => $status,
        ]);
        
        return redirect('/dashboard/employees');
    }

    public function deleteProject($id) {
        
        $project = Project::find($id);
        // dd($project);
        // exit;
        
        $project->delete();
    }

    public function render()
    {
        $projects = Project::where('company_id', Auth::user()->id)->get();
        $employees = Employee::where('company_id', Auth::user()->id)->get();
        $project_employees = ProjectEmployee::all();
        $checker = 0;
        $colors = ["bg-indigo-200", "bg-indigo-300", "bg-indigo-400", "bg-indigo-500", "bg-indigo-600", "bg-purple-200", "bg-purple-300", "bg-purple-400", "bg-purple-500", "bg-indigo-600", "bg-blue-400", "bg-blue-500", "bg-blue-600"];

        return view('livewire.employee-projects', [
            'projects' => $projects,
            'employees' => $employees,
            'colors' => $colors,
        ]);
    }
}
