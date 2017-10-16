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
    <style>
            .btn_submit{
            margin-top:20px;
            background: #5b8200;
            height: 40px;
            color:white;
            font-size: 16px;
            font-weight: 200;
            letter-spacing: 1px;
            border: none;
            transition: 0.3s;
            text-decoration : none;
            padding-top:7px;
            }
              .btn_submit:hover{
                  color : orange;
                  text-decoration: none;
           
            }
    </style>
</head>
<body>
    
       @include('nav') 

<div class="container-fluid">

    <div class="col-md-12 text-center">
         <h2 class="title ">   Select Your PROJECT  </h2>
        <h4 class="subtitle"> Export your project From MechantManagmant  </h4>
    </div>



    <div class="col-md-8 col-md-offset-2 project_type">


        <div class="col-md-12">
            <hr/>
        </div>

      
          <!--
          ////////////////////////////////
          -->
  
  
        <div class="project_kind ">
            <div class="col-md-12">
              
              <span class="col-md-1"></span>
                <span class="col-md-11"> 
                <h4>Project</h4>
                 <div>
                      <select class="form-control"  onchange="change(this.value)">
                      <option value="">Choose A project To Export </option>
                      @foreach( $projects as $p )
                         <option value="{{ $p->id }}">{{ $p->name }}</option>
                     @endforeach
                      </select>
                  <div>
                  <a class="col-md-5 col-md-offset-3 btn_submit text-center" href="#" id="selectOne" > Duplicate Project  </a>
                </span>
            </div>
          </div>


          <div class="col-md-12">
              <hr/>
          </div>
    
    
 </div>


</div>


<script>
        

    function change(id) {
           document.getElementById("selectOne").href="/Duplicateproject/"+id;
           //alert(num);
    }
   
   


</script>

</body>
</html>