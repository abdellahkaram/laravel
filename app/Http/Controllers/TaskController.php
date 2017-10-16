<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request; 
use App\Project; 
use App\Task; 
use App\User; 
use Mail;
use App\Mail\MailingUsers;
use Auth;

class TaskController extends Controller {
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function index() {
//
/* $p=Project::find(1);
        $n = $p->tasks[1]->name;
        */
//$ts=Project::find(1)->task;
/*
        $t=new Task();
        $t->name='Task 1';
        $t->description='this Task is about testing first task to the project';
        $t->state='encours';
        $t->delay=2;
        $t->comment='Comment Task 1';
        $t->project_id=1;
        */
//$task = Task::find(1); 


/*
        $t= new Task();
        $t->name='Task 1';
        $t->description='this Task is about testing first task to the project';
        $t->state='encours';
        $t->delay=2;
        $t->comment='Comment Task 1';
        $t->project_id=1;
        */
$p = Project::find(1); 
$t = Task::find(1); 
$x = array('project' => $p, 'task' => $t ); 
return  view('kanban')->withX($x); 
}

/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
public function create() {
//
// Project::all();


return view('createTask'); 
}

/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
public function store(Request $request) {
//


$task = new Task(); 
$task -> name = $request -> name; 
$task -> desciption = $request -> desciption; 
$task -> state = $request -> state; 
$task -> comment = $request -> comment; 
$task -> execution_date = $request -> execution_date; 
$task -> delay = $request -> delay; 
$task -> project_id = $request -> project_id; 

$task -> save();

$t=Task::orderBy('id', 'desc')->first();
foreach ($request->emp as $userid){
   $t->users()->attach($userid);  
   Mail::to(User::find($userid)->email)->send(new MailingUsers());   
}
return redirect('/project/'.$task->project_id );


//return $request->emp['0'].'  '.$request->emp['1'].'  '.$request->emp['2'];
}

/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function show($id) {
//
}

/**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function edit($id) {
//
$t = Task::find($id);
$user = User::all();
 return view('editTask')->withTask($t)->withUsers($user); 

}

/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function update(Request $request, $id) {
//

  $task=Task::find($id);
  $task->name =$request->name; 
  $task->desciption=$request->desciption; 
  $task->state=$request->state; 
  $task->comment=$request->comment; 
  $task->execution_date=$request->execution_date; 
  $task->delay=$request->delay; 
  $task->project_id=$request->project_id; 

foreach( $task->users()->get() as $u){
        $task->users()->detach($u->id);
}
  
  foreach ($request->emp as $userid){
        $task->users()->attach($userid);
        Mail::to(User::find($userid)->email)->send(new MailingUsers());
     }
     
     $task->save(); 

  


  return redirect('/project/'.$task->project_id);

}

/**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function destroy($id) {
//     
$t = Task::find($id); 
$t -> delete(); 
//Session::flash('success', 'The post was successfully deleted.');
//return redirect()->route('posts.index');
return redirect()->back(); 
}
}
