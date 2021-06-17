<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Employee;
use App\Models\User;
use App\Models\ProjectEmployee;
use App\Models\Work;

class UserProjects extends Component
{
    public $Project = "all";
    public function changeProject($project) {
        if($project == 'all'):
            $this->Project = $project;
        else:
            $this->Project = $project['project_name'];
        endif;
    }


    public function render()
    {
        $projectsColumns = ProjectEmployee::where("employee_email", Auth::user()->email)->get();

        $projects = [];
        $projectIds = [];
        for($i=0; $i<count($projectsColumns); $i++) {
            $TMP = Project::find(intval($projectsColumns[$i]->project_id));
            array_push($projects, $TMP);
            array_push($projectIds, $TMP->id);
        }

        if($this->Project != 'all'):
            $works = Work::where([
                'project' => $this->Project,
                'user_email' => Auth::user()->email,
            ])->get();
        else:
            $works = Work::where([
                'user_email' => Auth::user()->email,
            ])->get();
        endif;


        // dd($works);
        // exit;

        return view('livewire.user-projects', [
            'projects' => $projects,
            'projectIds' => $projectIds,
            'works' => $works,
            'Project' => $this->Project,
        ]);
    }
}
