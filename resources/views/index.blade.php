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
    <link rel="stylesheet"    href="{{ asset('css/index.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
    
</head>
<body>
    <nav class="navbar" >

                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header" >
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>  
                    <a class="navbar-brand "  href="/project/create" > <img src="{{ asset('image/logo.png') }}"  class="logo"/>
                    </a>
                    <a class="navbar-brand "  href="#" style="color:white">| MechantsManagments</i>                     
                    </a>

                  </div>
              
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                   
                    <ul class="nav navbar-nav navbar-right">


                    <li><a href="/timeline" style="color:white"><i class="fa fa-calendar" aria-hidden="true"></i></a></li>

                      <li><a href="/timeline" style="color:white"><i class="fa fa-globe" aria-hidden="true"></i></a></li>



                      <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white"> <i class="fa fa-folder" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Project1</a></li>
                                    <li><a href="#">Project 2</a></li>
                                <li><a href="/project">Manage Project</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a  href="/project/create">Create Project</a></li>
                                </ul>
                         </li>
                     

                      
                         

                    </ul>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>   
<!--
  /*********************************/
-->
<div class="discover col-md-12">


     <h1 class="text-center">DISCOVER PROJECTS</h1>
     <h4 class="text-center">35048 public projects to discover</h4>


     <form class="col-md-4  center ">
            <div class="input-group">
                 <input placeholder="looking For project ... " type="text" class="form-control form_search">
            <span class="input-group-btn">
                    <button class="btn btn-default form_search" type="button">
                            <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
            </span>
          </div>
                  
     </form>

</div>



<div class="col-md-12 body_search">

<div class="col-md-6">
    <div class="col-md-12">
            <div class="top-parag">
                   
                    <h2>  <i class="fa fa-heart" aria-hidden="true"></i> Most liked</h2>
            </div>
            <div class="bottom-parag">
                    

                    <ul class="media-list">
                            <li class="media">
                              <div class="media-left">
                                <a href="#">
                                  <img class="media-object" src="image/project-logo-02.png" alt="..." height="64px" width="64px">
                                </a>
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading">Media heading</h4>
                                    <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit totam repudiandae cupiditate explicabo voluptatibus unde omnis, impedit maxime quos dolore magnam aspernatur libero quia praesentium mollitia architecto, enim nobis cum.    </p>
                              </div>
                            </li>
                          </ul>
            </div>
            <hr>

            <div class="col-md-12">
                    

                    <div class="bottom-parag">
                            <ul class="media-list">
                                    <li class="media">
                                      <div class="media-left">
                                        <a href="#">
                                          <img class="media-object" src="image/project-logo-04.png" alt="..." height="64px" width="64px">
                                        </a>
                                      </div>
                                      <div class="media-body">
                                        <h4 class="media-heading">Media heading</h4>
                                            <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit totam repudiandae cupiditate explicabo voluptatibus unde omnis, impedit maxime quos dolore magnam aspernatur libero quia praesentium mollitia architecto, enim nobis cum.    </p>
                                      </div>
                                    </li>
                                  </ul>
                    </div>
                    <hr>
        
            </div>

            <div class="col-md-12 para">
                    
                    <div class="bottom-parag">
                            <ul class="media-list">
                                    <li class="media">
                                      <div class="media-left">
                                        <a href="#">
                                          <img class="media-object" src="image/project-logo-05.png" alt="..." height="64px" width="64px">
                                        </a>
                                      </div>
                                      <div class="media-body">
                                        <h4 class="media-heading">Media heading</h4>
                                            <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit totam repudiandae cupiditate explicabo voluptatibus unde omnis, impedit maxime quos dolore magnam aspernatur libero quia praesentium mollitia architecto, enim nobis cum.    </p>
                                      </div>
                                    </li>
                                  </ul>
                    </div>
                    <hr>
        
                  </div>

    </div>
    <button  class="form-control col_btn">View More</button>
</div>





<div class="col-md-6">
        <div class="col-md-12">
                <div class="top-parag">
                        <h2><i class="fa fa-line-chart" aria-hidden="true"></i>  Most Active</h2>
                </div>

                <div class="bottom-parag">
                        <ul class="media-list">
                                <li class="media">
                                  <div class="media-left">
                                    <a href="#">
                                      <img class="media-object" src="image/project-logo-05.png" alt="..." height="64px" width="64px">
                                    </a>
                                  </div>
                                  <div class="media-body">
                                    <h4 class="media-heading">Media heading</h4>
                                        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit totam repudiandae cupiditate explicabo voluptatibus unde omnis, impedit maxime quos dolore magnam aspernatur libero quia praesentium mollitia architecto, enim nobis cum.    </p>
                                  </div>
                                </li>
                              </ul>
                </div>
                <hr>
            </div>



                 <div class="col-md-12 para">
                
                <div class="bottom-parag">
                        <ul class="media-list">
                                <li class="media">
                                  <div class="media-left">
                                    <a href="#">
                                      <img class="media-object" src="image/project-logo-04.png" alt="..." height="64px" width="64px">
                                    </a>
                                  </div>
                                  <div class="media-body">
                                    <h4 class="media-heading">Media heading</h4>
                                        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit totam repudiandae cupiditate explicabo voluptatibus unde omnis, impedit maxime quos dolore magnam aspernatur libero quia praesentium mollitia architecto, enim nobis cum.    </p>
                                  </div>
                                </li>
                              </ul>
                </div>
                <hr>
    
              </div>

              <div class="col-md-12 para">
                    
                    <div class="bottom-parag">
                            <ul class="media-list">
                                    <li class="media">
                                      <div class="media-left">
                                        <a href="#">
                                          <img class="media-object" src="image/project-logo-02.png" alt="..." height="64px" width="64px">
                                        </a>
                                      </div>
                                      <div class="media-body">
                                        <h4 class="media-heading">Media heading</h4>
                                            <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit totam repudiandae cupiditate explicabo voluptatibus unde omnis, impedit maxime quos dolore magnam aspernatur libero quia praesentium mollitia architecto, enim nobis cum.    </p>
                                      </div>
                                    </li>
                                  </ul>
                    </div>
                    <hr>
        
                  </div>
    
        


                    <button  class="form-control col_btn">View More</button>
      
        </div>



        
        
    </div>
    
    






</div>  



           




 




            </body>
</html>