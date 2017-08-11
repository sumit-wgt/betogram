<?php
use App\Users;
?>

@if(Session::has('user_id'))
<!-- Sidebar -->
        <nav id="leftbar" class="navbar sidenav navbar-inverse showhide">
            <ul class="nav sidebar-nav">
                <div class="user_images">
                  <img src="{{asset('assets/front_end/images/avatar.jpg')}}" class="img-responsive">
                  <?php
                  $userId = Session::get('user_id');
                  $userData = Users::find($userId);
                  //dd($userData);
                  ?>
                  <a href="javascript:void(0);">{{ $userData->name }}</a>
                </div>

                <div class="sidebar_pages">
                  <ul>
                    <li class="active">
                     <a href="{{url('home')}}">
                       <img src="{{asset('assets/front_end/images/home.png')}}">
                       <span>Home</span>
                     </a>
                    </li>
                     <li class="">
                     <a href="#">
                       <img src="{{asset('assets/front_end/images/leaderboard.png')}}">
                       <span>leaderboard </span>
                     </a>
                    </li>
                     <li class="">
                     <a href="#">
                       <img src="{{asset('assets/front_end/images/academy.png')}}">
                       <span>academy</span>
                     </a>
                    </li>
                     <li class="">
                     <a href="#">
                       <img src="{{asset('assets/front_end/images/shop.png')}}">
                       <span>shop</span>
                     </a>
                    </li>
                    <div class="divider"></div>

                    <li class="">
                       <a href="#">
                         <img src="{{asset('assets/front_end/images/football.png')}}">
                         <span>football</span>
                       </a>
                    </li>
                    <li class="">
                       <a href="#">
                         <img src="{{asset('assets/front_end/images/hockey.png')}}">
                         <span>hockey </span>
                       </a>
                    </li>
                    <li class="">
                       <a href="#">
                         <img src="{{asset('assets/front_end/images/basketball.png')}}">
                         <span>basketball</span>
                       </a>
                    </li>
                    <li class="">
                       <a href="#">
                         <img src="{{asset('assets/front_end/images/boxing.png')}}">
                         <span>boxing</span>
                       </a>
                    </li>
                    <li class="">
                       <a href="#">
                         <img src="{{asset('assets/front_end/images/american-football.png')}}">
                         <span>amarican football</span>
                       </a>
                    </li>
                    <li class="">
                       <a href="#">
                         <img src="{{asset('assets/front_end/images/golf.png')}}">
                         <span>golf</span>
                       </a>
                    </li>
                    <li class="">
                       <a href="#">
                         <img src="{{asset('assets/front_end/images/baseball.png')}}">
                         <span>baseball</span>
                       </a>
                    </li>
                    <li class="">
                       <a href="#">
                         <img src="{{asset('assets/front_end/images/tennisball.png')}}">
                         <span>tennis</span>
                       </a>
                    </li>

                  </ul>

                </div>

                

        </nav>
        <!-- sidebar-wrapper -->
@endif