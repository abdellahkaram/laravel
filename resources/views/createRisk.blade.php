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
        <link rel="stylesheet"   href="{{ asset('css/createRisk.css') }} ">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
    
      
         @include('nav') 

    


                                <div class-"container-fluid">
                                                
                                    <div class="col-md-12 text-center">
                                         <img src="image/kanban.png"  height="40px" width="40px" alt="">
                                           <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> 
                                           </br>
                                            <p id="kanban_title">New Risk </p>
                                            <p id="keep"></p>
                                        </div>

                                        <div class="col-md-12">







        {!! Form::open(array('route' => 'Risk.store', 'data-parsley-validate' => '' , 'class'=>'col-md-8 col-md-offset-2')) !!}
        <div class="form-group">
				{{ Form::label('name', 'Risk name:'  ) }}
				{{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255' )) }}
        </div>
        <div class="form-group">
				{{ Form::label('desciption', "Risk Description:") }}
				{{ Form::text('desciption','default desc ' , array('class' => 'form-control')) }}
        </div> 


        <div class="form-group">
        {{ Form::label('state', 'Risk level:'  ) }}
         {{ Form::select('state', array( 'faible' => 'faible' ,'moyenne' => 'moyenne' , 'forte' => 'forte'), null, array('class' => 'form-control')) }}
        </div>

         <div class="form-group">
				{{ Form::label('project_id', 'project_id:'  ,  array('class' => 'hidden')  ) }}
				{{ Form::text('project_id', $projectid, array('class' => 'form-control  hidden', 'required' => '', 'maxlength' => '255'  )) }}
        </div>



        {{ Form::reset('BACK', array('class' => 'col-md-3  btn_submit x')) }}
				{{ Form::submit('Create Risk', array('class' => 'col-md-7 col-md-offset-2  btn_submit x')) }}
			{!! Form::close() !!}











          </div>
    </div>
    </body>
</html>