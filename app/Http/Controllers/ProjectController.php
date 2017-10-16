<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Project;
use App\Task;
use App\Risk;
use App\User;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     /*   this is for auth*/
     public function __construct()
     {
        // $this->middleware('auth');
     }  
     /*   this is for auth*/

    public function index()
    {
        
        $projects= Project::all();
        return view('MyProject')->withProjects($projects);

        //show all projects
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //return view('newKanban');
        return view('createProject');

        //create project
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        
        $project = new Project();
        $project->name = $request->name;
        $project->description = $request->description;
        $project->state = 'working_on';
        $project->save();
        return redirect('project');//view('timeline')->withProject($project);

        //save project
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $project = Project::find($id);
        $tasks = $project->tasks;
        $risks = $project->risks;
        
        $x = array( 'project' => $project , 'tasks'=> $tasks , 'risks'=> $risks);
        return  view('kanban')->withProject($x);

        //show project by id

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        //edit project by i
        $p= Project::find($id);
        return view('editProject')->withProject($p);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $project = Project::find($id);
        $project->name = $request->name;
        $project->description = $request->description;
        $project->state = $request->state;
        $project->save();
       
      return redirect('project');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $p = Project::find($id); 
        $p -> delete(); 
        //Session::flash('success', 'The post was successfully deleted.');
        //return redirect()->route('posts.index');
        return redirect()->back(); 
    }



    public function project_AddTasks($projectId)
    {

        /*

             $project =  Project::find(1);
               $t= new Task();
                $task = new Task();
                $task->name ='task 2';
                $task->desciption = 'hello world description';
                $task->state ='encours';
                $task->comment = 'this is task 2 comment';
                $task->execution_date = '2017-09-17';
                $task->delay =3;
                $task->project_id =3;
                $project->tasks()->save($t);
         */
            $u = User::all();
            $Users_projectIdCollection= array("users" => $u , 'projectid' => $projectId );
            return view('createTask')->withColl($Users_projectIdCollection);
    }
    public function project_AddRisk($projectId){
            return view('createRisk')->withProjectid($projectId);
    }

    public function project_ShowTasks($projectId){
        return  'hello';
    }
    

    public function duplicate_load(){
        $p = Project::all();
        return view('duplicate')->withProjects($p);
    }


    public function Duplicate($id){
        $p=Project::find($id);
        $project = new Project();
        $project->name = $p->name.'"';
        $project->description = $p->description;
        $project->state = 'working_on';
        $project->save();
        //$project->tasks = $p->tasks;
        //duplicate tasks
        foreach( $p->tasks as  $t){
            $tt = new Task();
            $tt = $t;
            $tt->project_id = $project->id;
            $tt->save();
        }
        //$project->risks = $p->risks;
        //duplicate Risks
        foreach( $p->risks as  $r){
            $rr = new Risk();
            $rr = $r;
            $rr->project_id = $project->id;
            $rr->save();
        }

        
        
        return redirect('project');
        
    }
    

    public function timeline(){
        $projects=Project::all();
        $pworkingon = array();
        $pClosed = array(); 
        foreach( $projects as  $p ){
             if( $p->state == 'closed'){
                $pClosed[$p->id]= $p; 
             }
             else{
                $pworkingon[$p->id]= $p;
             }
        }
        $tab = array( "workingon" => $pworkingon , "closed" => $pClosed );
        return view('timeline')->withTab($tab);
    }
    public function Project_export_load(){
        $projects= Project::all();
        return view('exportProjects')->withProjects($projects);

    }

    public function Gantt($id){ 
        $T = DB::table('tasks')->where('project_id','=',$id)->get();
        $tasks = array();
        $x='';
        foreach($T as $t ){
            if( $T[count($T)-1]->id !=  $t->id ){
               /* $tasks[]["id"] = $t->id;
                $tasks[]["name"] = $t->name;
                $tasks[]["start_date"] = date('Y-m-d', strtotime($t->created_at));
                $tasks[]["duration"] = $t->delay;
                $tasks[]["progress"] = 0.6;
                $tasks[]["open"] = "true";*/

                $tasks[] = array("id" => $t->id , "text" => $t->name, "start_date" =>  date('d-m-Y', strtotime($t->created_at)) , "duration" => $t->delay , "progress" => 0.6 ,  "open" => "true"  );

              //$tasks[] = '{id:'.$t->id.',text:"'.$t->name.'",start_date:'.date('Y-m-d', strtotime($t->created_at)).',duration:4,progress:0.6,open:true}';
             // $x .=$tasks[$t->id] ;
            }else{
                //$tasks[] = '{id:'.$t->id.',text:'.$t->name.',start_date:'.date('Y-m-d', strtotime($t->created_at)).',duration:4,progress:0.6,open:true}';
                //$x .=$tasks[$t->id] ;
            }
           
        }
        //return $x;
        //htmlspecialchars($tasks);
        return view('Gantt.myGantt')->withTasks($tasks);
    }

    public function web(){
        //$p = Project::find(4);
        $p=  Project::all();
        //return view('web')->withP($p);
        return response()->json($p);
    }



    public function projectfinded($id){
        //$p = Project::find(4);
        //$p=  Project::all();
        //return view('web')->withP($p);
        //return response()->json($p);
        $p=Project::find($id);
        $t= $p->tasks;
        return response()->json($t);
    }

    public function projectRiskfinded($id){
        $p=Project::find($id);
        $r= $p->risks;
        return response()->json($r);

    }
    
    



}
