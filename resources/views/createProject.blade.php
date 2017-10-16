<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"   href="{{ asset('css/createProject.css') }} ">
    <link rel="stylesheet"   href="{{ asset('css/nav.css') }} ">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
    
       @include('nav') 

<div class="container-fluid">

    <div class="col-md-12 text-center">
         <h2 class="title ">   CREATE PROJECT  </h2>
        <h4 class="subtitle"> Which template fits your project better? </h4>
    </div>



    <div class="col-md-8 col-md-offset-2 project_type">


        <div class="col-md-12">
            <hr/>
        </div>

      <div class="project_kind ">
        <div class="col-md-12">
          <a href="/newKanban" style="color:black">
          <span class="col-md-1"><img  src="{{ asset('image/kanban.png') }}"  alt="" class="img_createProject"></span>
            <span class="col-md-11">
                
                <h4>Kanban</h4>
                     create Your Project and Tasks
            </span>
          </a>
        </div>
      </div>

      <div class="col-md-12">
          <hr/>
      </div>


      <div class="project_kind ">
          <div class="col-md-12">
            
            <span class="col-md-1"><img  src="{{ asset('image/duplicate.png') }}" alt="" class="img_createProject"></span>
            <a href="/Duplicateproject" style="text-decorstion:none;color:black;">
              <span class="col-md-11">
                  
                  <h4>DUPLICATE</h4>
                 Start Clean and Keep your Configuration
              </span>
             </a> 
          </div>
        </div>


        <div class="col-md-12">
            <hr/>
        </div>



          <div class="project_kind ">
              <div class="col-md-12">
                <a href="/exportProject" style="text-decorstion:none;color:black;">
                <span class="col-md-1"><img src="{{ asset('image/export.png') }}"    halt="" class="img_createProject"></span>
                  <span class="col-md-11">
                      
                      <h4>EXPORT</h4>
                      Import Your Project And Save Your Personal Version 
                  </span>
                  </a>
              </div>
            </div>
  
              <div class="col-md-12">
              <hr/>
          </div>

          <!--
          ////////////////////////////////
          -->
        
          <div class="project_kind ">
              <div class="col-md-12">
                <a href="/project" style="text-decorstion:none;color:black;">
                <span class="col-md-1"><img src="{{ asset('image/import.png') }}"    halt="" class="img_createProject"></span>
                  <span class="col-md-11">
                      
                      <h4>Our Projects</h4>
                     show ower last project 
                  </span>
                  </a>
              </div>
            </div>
  
              <div class="col-md-12">
              <hr/>
          </div>
  
       
    
    
 </div>


</div>


<script>
</script>

</body>
</html>