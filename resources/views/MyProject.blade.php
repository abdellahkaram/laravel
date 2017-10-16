<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"   href="{{ asset('css/Myproject.css') }} ">
    <link rel="stylesheet"   href="{{ asset('css/nav.css') }} ">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
    
      @include('nav') 


        <div class="container-fluid">
            <div class="col-md-10 col-md-offset-1 top-bar">
                    <div class="col-md-6">
                        <span class="title">MY PROJECTS</span>
                    </div>

                    <div class="col-md-6 ">
                        <a href="/project/create">
                            <span class=" col-md-3  col-md-offset-6 btnn ">create project</span>
                        </a>
                    </div>
            </div>
            


<div class="col-md-11 col-md-offset-1">

    @foreach( $projects as $p)
            <div class="col-md-3  bg">
                    <div class="col-md-11 text-right bgtools">
                                     {!! Form::open(['route' => ['project.destroy', $p->id], 'method' => 'DELETE'  ]) !!}
                                                                <a href="/project/{{ $p->id }}/edit"><i class="fa fa-pencil" aria-hidden="true" data-toggle="tooltip" title="Edit Project!"></i></a>
                                                              <button type="submit" class="b ico"  data-toggle="tooltip" title="Remove Project!" ><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                     {!! Form::close() !!}
                                       
                    </div>
            
            
                    <div class="Gantt text-center ">
                        <a href="/Gantt/{{ $p->id }}" class="chart"  data-toggle="tooltip" title="Gannt Chart!">
                            <span class="text-left"><i class="fa fa-bar-chart"  style="font-size:20px;" aria-hidden="true"></i></span>
                        <a>
                    </div>

                    
            
            
                    



             <a href='{{ "/project/".$p->id  }}' >
                        <div class="log-project col-md-offset-3 text-center">
                           <span class="glyphicon glyphicon-grain"></span>
                        </div>
                        <div class="col-xs-4 col-md-12 t text-center" style="margin-bottom:8px">
                          {{ $p->name }}  
                        <br/>
                        <small>{{   Carbon\Carbon::parse($p->created_at)->format('d/m/Y')  }}</small>
                        </div>

                        <div class="col-md-12" >
                             {{  $p->description }}
                        </div>     
                  
              <br/>

             
                
             </div>
              

           
             
    @endforeach

             

             


             

            

            </div >

            








<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>






</body>

</html>