        <!-- Page header top -->
            <nav class="navbar navbar-default navbar-xs top_nav">
             <div class="container">
               <div class="row">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                  <li class="logo_font">
                    <a href="login.php" title="betogram.com">
                      <img src="{{asset('assets/front_end/images/logo.png')}}" class="img-responsive">
                    </a>
                  </li>
                  <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      Gambling 
                      <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Gambling</a></li>
                      <li><a href="#">Gambling </a></li>
                      <li><a href="#">Gambling</a></li>
                    </ul>
                  </li>
                  <li><a href="#">About us </a></li>
                  <li><a href="#">How it works</a></li>
                  <li><a href="#">Jobs</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right register_link">
                  <li class=""><a href="{{url('login')}}">Login</a></li>
                  <li class=""><a href="{{url('register')}}">Registration</a></li>
                  <li class="dropdown languages">
                     <span>
                       <a href=""><img src="{{asset('assets/front_end/images/en.png')}}"></a>
                     </span> 
                     <span>
                       <a href=""><img src="{{asset('assets/front_end/images/sk.png')}}"></a>
                     </span>
                     <select class="languages_select" >
                       <option>ENG</option>
                       <option>SEK</option>
                     </select>
                  </li>
                </ul>
              </div><!-- /.navbar-collapse -->
             </div>
            </div> 
            </nav>
          <!-- Page header end -->  