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
        $project_count = [];
        $projectIds = [];
        for($i=0; $i<count($projectsColumns); $i++) {
            $TMP = Project::find(intval($projectsColumns[$i]->project_id));
            $TMP1 = ProjectEmployee::where('project_id', intval($projectsColumns[$i]->project_id))->get();
            array_push($projects, $TMP);
            array_push($project_count, count($TMP1));
            array_push($projectIds, $TMP->id);
        }

        // dd($project_count);
        // exit;

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
            'project_count' => $project_count,
            'projectIds' => $projectIds,
            'works' => $works,
            'Project' => $this->Project,
        ]);
    }
}
