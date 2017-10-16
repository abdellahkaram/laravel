<!DOCTYPE html>
<html>
<head>
   <title>How to Start with dhtmlxGantt</title>
   <script src="{{ asset('codebase/dhtmlxgantt.js') }}"></script>   
   <link href="{{ asset('codebase/dhtmlxgantt.css') }}" rel="stylesheet">   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"   href="{{ asset('css/nav.css') }} ">
    <link rel="stylesheet"   href="{{ asset('css/gantt.css') }} ">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <style type="text/css" media="screen">
    html, body{
        margin:0px;
        padding:0px;
        height:100%;
        overflow:hidden;

    }
    </style>
   
   </style>
</head>
<body >
    @include('nav') 
    
    
    <span id="c" style="display:none;">
                     @foreach($tasks as $t)
                           {{ $t['text'] }}    
                    @endforeach           
    </span>

    <br>
    
    
    <div class="col-md-12 all">
            <div class="title text-center"><i class="fa fa-cubes" aria-hidden="true"></i>  Gantt Diagram</div>
            <div class="col-md-12 content">
            <div id="gantt_here" style='width:1080px;' class="cont"></div>
            </div>
    <div>
  
 
  
   
    <script type="text/javascript">
            // alert(document.getElementById('c').innerHTML);
            var v=document.getElementById('c').textContent;
                                x=v;
                                //alert('hello');
                                var tasks = {
                                    data: {!! json_encode($tasks) !!} 
                                        ,
                                        links:[
                                            {id:1, source:1, target:2, type:"1"},
                                            {id:2, source:1, target:3, type:"1"},
                                            {id:3, source:3, target:4, type:"1"},
                                            {id:4, source:4, target:5, type:"0"},
                                            {id:5, source:5, target:6, type:"0"}
                                        ]
                                    };

                                    gantt.init("gantt_here");
                                    gantt.parse (tasks);
                                    //alert(document.getElementById('c').innerHTML);
                              

                


    </script>


</body>
</html>