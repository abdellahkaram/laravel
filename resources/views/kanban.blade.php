<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"   href="{{ asset('css/kanban.css') }} ">
    <link rel="stylesheet"   href="{{ asset('css/nav.css') }} ">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="addTask text-center"><a href= " /project/{{$project['project']->id}}/tasks/ " ><i class="fa fa-plus" aria-hidden="true"></i></a></div>
    
         @include('nav') 

                          
                          
                <div class="col-nd-12 text-center m"><h1>{{  $project['project']->name }}</h1></div>
                

                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading"><i class="fa fa-tasks"  style="font-size:35px;"  aria-hidden="true"></i> <span style="font-size:28px;"> &nbsp   Project Tasks </span> </div>
                    <div class="panel-body">
                        <p>{{  $project['project']->description }}</p>
                    </div>


                    <div class=" text-center">
                            <span class="mar">Planifie  <i class="fa fa-circle" style="color:rgb(000, 000, 000)" aria-hidden="true"></i></span>
                            <span class="mar">En Cours  <i class="fa fa-circle" style="color:#0BAFAF" aria-hidden="true"></i></span>
                            <span class="mar">Complète  <i class="fa fa-circle" style="color:rgb(15, 221, 29)" aria-hidden="true"></i></span>
                            <span class="mar">Annulè    <i class="fa fa-circle" style="color:#C51414" aria-hidden="true"></i></span>
                    </div>
   



                 <hr>
                    <div class="risk">
                                            <!--
                                            <div class="addTask text-center"><a href= " {{$project['project']->id}}/tasks/ " ><i class="fa fa-plus" aria-hidden="true"></i></a></div>
                                            -->
                                            <a href="/project/{{$project['project']->id}}/tasks/ " class="btn btn-success col-md-5  col-md-offset-3 text-center">Adding Task to the project</a>
                    </div>
                  


                <br/>
                <br/>


                    
                    <!-- Table -->
                    <table class="table table-inverse text-left">
                        <thead class="thead-default">
                            <tr >
                                    <th>Tache  </th>
                                    <th>Description de Tache </th>
                                    <th>Quand</th>
                                    <th>Duree</th>
                                    <th>Personne Assigne</th>
                                    <th>Commentaire </th>
                                    <th style="letter-spacing:1px;">Status</th>
                                    <th style="text-center"><center><i class="fa fa-retweet" aria-hidden="true"></i></center></th>
                            </tr>
                        </thead>

           
           

                                @foreach ( $project['tasks'] as $t)
                                    <tr class="trdesc">
                                                            
                                                                <td>{{ $t->name }}</td>
                                                                    <td class="tddesc">{{ $t->desciption }}</td>
                                                                    <td>{{ $t->execution_date }}</td>
                                                                    <td>{{ $t->delay }}</td>
                                                                    <td>
                                                                         @foreach ( $t->users as $u)
                                                                            {{ $u->name  }};
                                                                         @endforeach
                                                                     </td>
                                                                    <td>{{ $t->comment }}</td>
                                                                    <td class="text-center"><i class="fa fa-circle {{  $t->state  }}"  aria-hidden="true"></i></td>
                                                                    <td class="text-center">
                                                                             
                                                                             
                                                                             
                                                                            {!! Form::open(['route' => ['task.destroy', $t->id], 'method' => 'DELETE'  ]) !!}
                                                                                <!-- {!! Form::submit('delete', ['class' => '']) !!}  -->
                                                                                <a href="http://localhost:8000/task/{{ $t->id }}/edit" data-toggle="tooltip" title="Edit!" class="ico b"> <i class="fa  fa-pencil-square-o" aria-hidden="true"></i> </a>
                                                                                  
                                                                                <button type="submit" class="b ico"  data-toggle="tooltip" title="Remove!" ><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                                            {!! Form::close() !!}

                                                                            
                                                                            
                                                                    </td>
                                    </tr>  
                                @endforeach
            
                                
                    </table>
                    </div>




<br>
<br>
<br>
<br>
<br>




                                  <div class="panel panel-default">
                                        <!-- Default panel contents -->
                                        <div class="panel-heading "><i class="fa fa-exclamation-triangle" style="font-size:35px;" aria-hidden="true"></i> <span style="font-size:28px;"> &nbsp   Project Risk </span> </div>
                                        <div class="panel-body">
                                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum blanditiis ipsum in necessitatibus explicabo suscipit debitis ab sit quo! Voluptatem ullam natus tempora officiis quas dolorum explicabo, nihil hic vitae.</p>
                                        </div>
                                        
                                        <div class="col-nd-12 text-center">
                                            
                                                <span class="mar ">Faible <i class="fa fa-circle faible"  aria-hidden="true"></i></span>
                                                <span class="mar ">Moyenne  <i class="fa fa-circle moyenne"  aria-hidden="true"></i></span>
                                                <span class="mar ">Forte <i class="fa fa-circle forte"  aria-hidden="true"></i></span>
                                            
    
                                        <!-- Table -->
                                        <hr>
                                        <br>

                                        <div class="risk">
                                            <!--
                                            <div class="addTask text-center"><a href= " {{$project['project']->id}}/tasks/ " ><i class="fa fa-plus" aria-hidden="true"></i></a></div>
                                            -->
                                            <a href=" /project/{{ $project['project']->id }}/Risks/ " class="btn btn-danger col-md-5  col-md-offset-3 text-center">Adding Risk to the project</a>
                                        </div>

                                        <br/>
                                        <br/>
                                        
                                        

                                        <table class="table  text-left">
                                         <thead class="thead-default">
                                            <tr>
                                                <th>libelle Risque</th>
                                                <th>Description risque</th>
                                                <th class="text-center">Status</th>
                                                <th >Remove</th>
                                            </tr>
                                            </thead>
                                                @foreach ( $project['risks'] as $r)
                                                <tr>
                                                        <td>{{ $r->name }}</td>
                                                        <td>{{ $r->desciption }}</td>
                                                        <td class="text-center"><i class="fa fa-circle {{ $r->state  }}" aria-hidden="true"></i> </td>
                                                        <th style="text-center">
                                                                               {!! Form::open(['route' => ['Risk.destroy', $r->id], 'method' => 'DELETE'  ]) !!}
                                                                                <!-- {!! Form::submit('delete', ['class' => '']) !!}  -->
                                                                                   <button type="submit" class="b ico "  data-toggle="tooltip" title="Remove!" ><i class="fa fa-trash-o" style="font-size:20px;margin-left:0px auto;" aria-hidden="true"></i></button>
                                                                                {!! Form::close() !!}
                                                                            
                                                        </th>
                                                </tr>
                                                @endforeach  
                                        </table>

                                      </div>

          





<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>




    

</body>
</html>