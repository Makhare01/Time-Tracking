<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Employee;
use App\Models\User;
use App\Models\ProjectEmployee;
use App\Models\Work;
use Illuminate\Support\Facades\Auth;


class CompanyController extends Controller
{
    public function employees() {
        $projects = Project::where('company_id', Auth::user()->id)->get();
        $employees = Employee::where('company_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
        $project_employees = ProjectEmployee::all();
        $works = Work::where('company_id', Auth::user()->id)->get();
        $checker = 0;
        $colors = ["bg-indigo-200", "bg-indigo-300", "bg-indigo-400", "bg-indigo-500", "bg-indigo-600", "bg-purple-200", "bg-purple-300", "bg-purple-400", "bg-purple-500", "bg-indigo-600", "bg-blue-400", "bg-blue-500", "bg-blue-600"];

        return view("employees", [
            'projects' => $projects,
            'employees' => $employees,
            'project_employees' => $project_employees,
            'works' => $works,
            'checker' => $checker,
            'colors' => $colors,
        ]);
    }

    public function addProject(Request $request) {
    
        $request->validate([
            'project_name' => 'string|required|max:255',
            'description' => 'string',
        ]);

        if($request->project_status):
            Project::create([
                'project_name' => $request->project_name,
                'description' => $request->description,
                'project_status' => $request->project_status,
                'company_id' => Auth::user()->id,
            ]);
        else:
            Project::create([
                'project_name' => $request->project_name,
                'description' => $request->description,
                'company_id' => Auth::user()->id,
            ]);
        endif;

        


        return redirect('dashboard/employees');
    }

    public function deleteUser($id) {
        $employee = Employee::findOrFail($id);
        $user_id = User::where('email', $employee->email)->first();
        $user = User::findOrFail($user_id->id);

        $projects = ProjectEmployee::where('employee_email', $employee->email)->get();
        if($projects):
            foreach ($projects as $key => $value) {
                $value->delete();
            }
        endif;
        
        $user->delete();
        $employee->delete();

        return redirect('/dashboard/employees');
    }

    public function deleteUserFormProject($id, $project_id) {

        $user_project = ProjectEmployee::where("employee_email", $id)->where("project_id", $project_id)->first();
        $employee = Employee::where("email", $id)->first();
        
        $user_project->delete();

        $employee_projects = [];
        foreach($employee->project_id as $project) {
            if($project != $project_id) array_push($employee_projects, $project);
        }

        Employee::where("email", $id)->update([
            "project_id" => $employee_projects,
        ]);

        return redirect('dashboard/employees');
    }

    public function editUser($id) {
        $projects = ProjectEmployee::where('employee_email', request('email'))->get();
        if($projects):
            foreach ($projects as $key => $value) {
                $value->delete();
            }
        endif;

        Employee::where("id", $id)->update([
            "first_name" => request('first_name'),
            "last_name" => request('last_name'),
            "project_id" => request('project_id'),
            // "email" => request('email'),
        ]);

        User::where('email', request('email'))->update([
            "first_name" => request('first_name'),
            "last_name" => request('last_name'),
            // "email" => "testemail",
        ]);

        $project_id = request('project_id');

        if($project_id):
            foreach($project_id as $value):
                ProjectEmployee::create([
                    'project_id' => $value,
                    'employee_email' => request('email'),
                ]);
            endforeach;
        endif;

        return redirect('/dashboard/employees');
    }

    public function calendar() {
        return view("calendar");
    }

    public function statistics() {
        return view("statistics");
    }
}
