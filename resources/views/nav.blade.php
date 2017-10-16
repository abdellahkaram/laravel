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


                    <li><a href="/project/create" style="color:white"><i class="fa fa-calendar" aria-hidden="true"></i></a></li>

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
                     
                          <li>
                           
                         </li>

                      
                          <li class="dropdown">
                          <img src="{{ asset('image/profile.png') }}" alt="..."  height="40px" width="40px" style="margin-top:5px;" class="img-circle">
                            <br>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:white">  <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                 <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>

                                <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                  </li>
                                </ul>
                         </li>
                         
                    </ul>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>