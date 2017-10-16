<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Project;
use App\Task;
use PDF;


class PdfController extends Controller
{
    
    public function pdf_Projects(){
        $projects = Project::all();
        //$pdf=PDF::loadView('pdf',['projects' => $projects]);
        return view('pdf')->withProjects($projects);
        /*$k="";
        foreach($projects as $p){
            $k .= $p->name."  ";
        }
        return $k;*/
    }

    public function pdf_ProjectTask($id){
        $project =  Project::find($id);
        $tasks = DB::table('tasks')->where('project_id','=',$id)->get();
        //$pdf =PDF::loadView('pdftasks',['tasks' => $tasks]);
        $x= array("tasks" => $tasks , "project" =>  $project);
        return view('pdftasks')->withTasks($x);
        //return $pdf->download('tasks.pdf');
        
    }
}
