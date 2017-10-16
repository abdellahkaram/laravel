<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet"   href="{{ asset('css/nav.css') }} ">
    <link rel="stylesheet"   href="{{ asset('css/timeline.css') }} ">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

@include('nav') 


<div class="container-fluid">

              <div class="col-md-9">
                      <div class="title col-md-12 text-center">Project Dashboard</div>
                
                       <div class="space col-md-12">
                                  <div  class="subtitle">Working On</div>
                                 <div class="project_space">
                                              <ul class="media-list">
                                                    @foreach ($tab as $t)
                                                      @foreach ($tab['workingon'] as $p)
                                                                <li class="media">
                                                                      <div class="media-left">
                                                                        <a href="#">
                                                                          <img class="media-object prjimg {{ $p->state }}" src="image/project-logo-05.png" height="45px" width="45px"  alt="...">
                                                                        </a>
                                                                      </div>

                                                                      <div class="media-body">
                                                                        <h4 class="media-heading"> {{ $p->name }}</h4>
                                                                          <span class="project_id">#{{ $p->id }}</span>
                                                                          <span class="project_description"> {{ $p->description }} </span>
                                                                          </br>
                                                                          <small>{{ $p->created_at  }}</small>
                                                                      </div>
                                                              </li>
                                                        @endforeach
                                                            @break
                                                    @endforeach
                                            </ul>
                                  </div>




                                  <br/>



                   <div class="space col-md-12">
                                  <div  class="subtitle">Closed Project</div>
                                 <div class="project_space">
                                              <ul class="media-list">
                                                    @foreach ($tab as $t)
                                                      @foreach ($tab['closed'] as $p)
                                                                <li class="media">
                                                                      <div class="media-left">
                                                                        <a href="#">
                                                                          <img class="media-object prjimg {{ $p->state }}" src="image/project-logo-04.png" height="45px" width="45px"  alt="...">
                                                                        </a>
                                                                      </div>

                                                                      <div class="media-body">
                                                                        <h4 class="media-heading"> {{ $p->name }}</h4>
                                                                          <span class="project_id">#{{ $p->id }}</span>
                                                                          <span class="project_description"> {{ $p->description }} </span>
                                                                          </br>
                                                                          <small>{{ $p->created_at  }}</small>
                                                                      </div>
                                                              </li>
                                                        @endforeach
                                                        @break
                                                    @endforeach
                                            </ul>
                                  </div>
                      </div>            



             </div>
                        
  </div>


 





  <!--/////////////////////////////////////////////////////////////////////////////////////////-->

<!--
  <a href="{{ route('sendEmail') }}">Send Email</a>
--> 
<!--
  <div class="col-md-3 col-sm-12">
        <div style="height:50px;"></div>

        <ul class="media-list">
                <li class="media spaceRight">
                    <div class="media-left">
                         <a href="#">
                               <img class="media-object prjimgR" src="image/project-logo-02.png" height="45px" width="45px"  alt="...">
                        </a>
                      </div>
                    <div class="media-body">
                    <h4 class="media-heading">Project Title <i class="fa fa-certificate" style='color:lightgreen;' aria-hidden="true"></i></h4>
                        <span class="project_id">#1</span>
                        <span class="project_description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum tempore facilis recusandae voluptatem minus voluptatibus temporibus voluptates deserunt quos placeat, omnis alias officiis quas voluptate dolore qui commodi minima vitae! </span>
                    </div>
                    <span class="col-md-12" style="color:darkorange">
                        <i class="fa fa-users col-md-offset-10" aria-hidden="true"></i>(10)
                    </span>
                </li>


                <li class="media spaceRight">
                        <div class="media-left">
                             <a href="#">
                                   <img class="media-object prjimgR" src="image/project-logo-04.png" height="45px" width="45px"  alt="...">
                            </a>
                          </div>
                        <div class="media-body">
                        <h4 class="media-heading">Project Title <i class="fa fa-certificate" style='color:lightgreen;' aria-hidden="true"></i></h4>
                            <span class="project_id">#1</span>
                            <span class="project_description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum tempore facilis recusandae voluptatem minus voluptatibus temporibus voluptates deserunt quos placeat, omnis alias officiis quas voluptate dolore qui commodi minima vitae! </span>
                        </div>
                        <span class="col-md-12" style="color:darkorange">
                            <i class="fa fa-users col-md-offset-10"  aria-hidden="true"></i>(10)
                        </span>
                    </li>
        </ul>
    </div>
-->

    <!--////////////////////////////////////////////////////////////////////////////-->



</body>

</html>