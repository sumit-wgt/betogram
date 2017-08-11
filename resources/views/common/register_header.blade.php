@if(Session::has('user_id'))
<script>$("body").removeClass("unregister");</script>
@endif
<!-- Page header top -->
            <nav class="navbar navbar-default navbar-xs top_nav">
             <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <!-- <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
                    -->
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left ">
                  <li class="top_bar_logo">
                   <a href="{{url(login)}}">
                      <img src="{{asset('assets/front_end/images/logo.png')}}">
                   </a>
                  </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li class="header_search">
                      <form role="search">
                      <div class="input-group">
                          <div class="input-group-btn">
                              <i class="fa fa-search"></i>
                          </div>
                          <input type="text" class="form-control" placeholder="Search for people..." name="SearchUsername" onkeyup="SearchByUsername(this.value)"/>
                      </div>
                      </form>    
                  </li>
                  @if(Session::has('user_id'))
                  <li class="top_icon"><a href="#"><img src="{{asset('assets/front_end/images/notification.png')}}"></a></li>
                  <li class="top_icon"><a href="#"><img src="{{asset('assets/front_end/images/messages.png')}}"></a></li>
                  <li class="dropdown profile_drop">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    <img src="{{asset('assets/front_end/images/settings.png')}}">
                    </a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#"><i class="fa fa-tachometer" aria-hidden="true"></i>User Dashboard</a></li>
                      <li><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i>Edit Profile </a></li>
                      <li><a href="{{url('change-password')}}"><i class="fa fa-key" aria-hidden="true"></i></i>Change Password </a></li>
                      <li><a href="{{url('logout')}}"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
                    </ul>
                  </li>
                  @endif
                </ul>
              </div><!-- /.navbar-collapse -->
             </div>
            </nav>
            <div class="nav_hight"></div>
          <!-- Page header end -->
<script>
function SearchByUsername(username)
{
    if(username !='')
    {
        $.ajax({
            type: "POST",
            url: "{{url('search-username')}}",
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {'username':username},
            success: function(result)
            {
                console.log(result);
            }
        });
    }   
}
</script>