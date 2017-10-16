<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet"   href="{{ asset('css/newKanban.css') }} ">
        <link rel="stylesheet"   href="{{ asset('css/kanban.css') }} ">
        <link rel="stylesheet"   href="{{ asset('css/nav.css') }} ">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
        @include('nav') 
                                <div class-"container-fluid">
                                                
                                    <div class="col-md-12 text-center">
                                         <img src="image/kanban.png"  height="40px" width="40px" alt="">
                                            <p id="kanban_title">New Task</p>
                                            <p id="keep">Keep a constant workflow on independent tasks</p>
                                        </div>

                                        <div class="col-md-12">



        {!! Form::model($task, ['route' => ['task.update', $task->id], 'method' => 'PUT']) !!}
        <div class="form-group">
				{{ Form::label('name', 'Task name:'  ) }}
				{{ Form::text('name', $task->name , array('class' => 'form-control', 'required' => '', 'maxlength' => '255' )) }}
        </div>
        <div class="form-group">
				{{ Form::label('desciption', "Task Description:") }}
				{{ Form::text('desciption',$task->desciption  , array('class' => 'form-control')) }}
        </div> 


        <div class="form-group">
        {{ Form::label('state', 'state:'  ) }}
         {{ Form::select('state', array( 'planifie' => 'planifie' ,'encours' => 'encours' , 'compelte' => 'compelte' , 'annule' => 'annule'), $task->state, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
				{{ Form::label('comment', 'comment:'  ) }}
				{{ Form::text('comment', $task->comment, array('class' => 'form-control', 'required' => '', 'maxlength' => '255' )) }}
        </div>

         <div class="form-group">
				{{ Form::label('execution_date', 'Date Execution:'  ) }}
                {{ Form::date('execution_date', /*\Carbon\Carbon::now()*/  $task->execution_date ) , array('class' => 'form-control', 'required' => '' )  }}
        </div>

        <div class="form-group">
				{{ Form::label('delay', 'Delay:'  ) }}
				{{ Form::text('delay',  $task->delay , array('class' => 'form-control', 'required' => '', 'maxlength' => '255' )) }}
        </div>


         <div class="form-group">
				{{ Form::label('project_id', 'project_id:'  ,  array('class' => 'hidden')  ) }}
				{{ Form::text('project_id', $task->project_id, array('class' => 'form-control  hidden', 'required' => '', 'maxlength' => '255'  )) }}
        </div>


        <div class="form-group" >
        <label>Assigned :</label>
            <select name="emp[]" class="form-control" multiple>
             @foreach ( $users as  $u)
               <option value="{{ $u->id }}">{{ $u->name }}</option>
              @endforeach
            </select>
            <small><b>Hold Shift + Ctrl<b></small>
        </div>
      
      
        {{ Form::reset('BACK', array('class' => 'col-md-3  btn_submit')) }}
				{{ Form::submit('Update Task', array('class' => 'col-md-7 col-md-offset-2  btn_submit')) }}
		   	{!! Form::close() !!}



          </div>
        </div>
    </body>
</html>