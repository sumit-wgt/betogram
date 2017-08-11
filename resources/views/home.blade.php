@include('common/header_link')
    <!-- Sidebar -->
    @include('common/leftbar')
    <!-- Page Content -->
      <div class="bog_content">
          <!-- Page header top -->
              @include('common/register_header')  
            @if (session('status'))
            <div class="alert alert-danger" style="text-align:center">
                {{ session('status') }}
            </div>
            @endif
            @if (session('success'))
            <div class="alert alert-success" style="text-align:center">
                {{ session('success') }}
            </div>
            @endif
          <!-- Page body content -->
            <div class="container">
                <div class="row">
                  <div class="col-md-8 col-sm-7" id="content">
                     <div class="dashboard_left">
                     <!-- top status section -->
                      <div class="status_wrap">
                          <h3>Your Status</h3>
                          <ul class="status_content">
                            <li>
                              <h4>Pro</h4>
                              <p>Level</p>  
                            </li>
                             <li>
                              <h4>67%</h4>
                              <p>Hit rate</p>  
                            </li>
                             <li>
                              <h4>200</h4>
                              <p>GramS</p>  
                            </li>
                             <li>
                              <h4>10</h4>
                              <p>Leaderboard</p>  
                            </li>
                          </ul>
                          <div class="clearfix"></div>
                      </div>
                    <!-- top status section end -->
                    <!-- feed section start  -->
                      <div class="all_feed_wrap">
                          <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#news_feed" aria-controls="news_feed" role="tab" data-toggle="tab">News Feed</a></li>
                                <li role="presentation"><a href="#bets" aria-controls="bets" role="tab" data-toggle="tab">My Bets</a></li>
                                <li role="presentation"><a href="#leaderboard" aria-controls="leaderboard" role="tab" data-toggle="tab">Leaderboard</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="news_feed">
                                   <div class="row">
                                     <div class="col-md-6">
                                        <div class="row">
                                           <div class="col-sm-12 feed_left">
                                             <div class="feed_wrapper">
                                              <div class="feed_content_wrapper">
                                                  <div class="feed_profile_details">
                                                     <div class="feed_img">
                                                       <img src="{{asset('assets/front_end/images/user_img.png')}}">
                                                     </div>
                                                     <div class="feed_user_name">
                                                      <a href=""> 
                                                       <h4>Morkan Doe <span>2hrs. ago</span></h4>
                                                       <p>Place a bet via ladbrokers</p>
                                                      </a> 
                                                     </div>
                                                  </div>
                                                  <div class="feed_body">
                                                    <h4>Braga v Benfica</h4>
                                                    <p>Match Betting : <span>7th July | 20:30</span></p>
                                                  </div>
                                                  <div class="feed_chart">
                                                    <h3>Benfica <span>@2.80</span></h3>
                                                    <h3>Single <span>@2.80</span></h3>
                                                  </div>
                                                </div> 
                                                <div class="feed_social_wrap">   
                                                  <ul class="feed_social">
                                                     <li>
                                                       <a href="#">
                                                         4
                                                         <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                         Like
                                                       </a>
                                                     </li>
                                                     <li>
                                                       <a href="#">
                                                         1
                                                         <i class="fa fa-clone" aria-hidden="true"></i>
                                                         Copy
                                                       </a>
                                                     </li>
                                                     <li>
                                                       <a href="#">
                                                         <i class="fa fa-facebook" aria-hidden="true"></i>
                                                      </a>
                                                     </li>
                                                     <li>
                                                       <a href="#">
                                                         <i class="fa fa-twitter" aria-hidden="true"></i>
                                                      </a>
                                                     </li>
                                                     <li>
                                                       <a href="#">
                                                         <i class="fa fa-share-alt" aria-hidden="true"></i>
                                                      </a>
                                                     </li>
                                                  </ul>
                                                 </div> 
                                                  <div class="comment_section">
                                                    <input class="form-control" type="text" name="" placeholder="Add a Comment ...">
                                                  </div>
                                                  <!-- dropdown More -->   
                                                   <div class="dropdown feed_more">
                                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                      <img src="{{asset('assets/front_end/images/arrow_down.png')}}">
                                                      </a>
                                                      <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#">Demo </a></li>
                                                        <li><a href="#">Demo </a></li>
                                                        <li><a href="#">Demo</a></li>
                                                      </ul>
                                                  </div>
                                                <!-- dropdown More -->  
                                                </div>  
                                              </div>
                                          <div class="col-sm-12 feed_left win">
                                             <div class="feed_wrapper">
                                              <div class="feed_content_wrapper">
                                                  <div class="feed_profile_details">
                                                     <div class="feed_img">
                                                       <img src="{{asset('assets/front_end/images/user_img.png')}}">
                                                     </div>
                                                     <div class="feed_user_name">
                                                      <a href=""> 
                                                       <h4>Morkan Doe <span>2hrs. ago</span></h4>
                                                       <p>Place a bet via ladbrokers</p>
                                                      </a> 
                                                     </div>
                                                  </div>
                                                  <div class="feed_body">
                                                    <h4>Braga v Benfica</h4>
                                                    <p>Match Betting : <span>7th July | 20:30</span></p>
                                                  </div>
                                                  <div class="feed_chart">
                                                    <h3>Benfica <span>@2.80</span></h3>
                                                    <h3>Single <span>@2.80</span></h3>
                                                  </div>
                                                </div> 
                                                <div class="feed_social_wrap">   
                                                  <ul class="feed_social">
                                                     <li>
                                                       <a href="#">
                                                         4
                                                         <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                         Like
                                                       </a>
                                                     </li>
                                                     <li>
                                                       <a href="#">
                                                         1
                                                         <i class="fa fa-clone" aria-hidden="true"></i>
                                                         Copy
                                                       </a>
                                                     </li>
                                                     <li>
                                                       <a href="#">
                                                         <i class="fa fa-facebook" aria-hidden="true"></i>
                                                      </a>
                                                     </li>
                                                     <li>
                                                       <a href="#">
                                                         <i class="fa fa-twitter" aria-hidden="true"></i>
                                                      </a>
                                                     </li>
                                                     <li>
                                                       <a href="#">
                                                         <i class="fa fa-share-alt" aria-hidden="true"></i>
                                                      </a>
                                                     </li>
                                                  </ul>
                                                 </div> 
                                                  <div class="comment_section">
                                                    <input class="form-control" type="text" name="" placeholder="Add a Comment ...">
                                                  </div>
                                                  <!-- dropdown More -->   
                                                   <div class="dropdown feed_more">
                                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                      <img src="{{asset('assets/front_end/images/arrow_down.png')}}">
                                                      </a>
                                                      <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#">Demo </a></li>
                                                        <li><a href="#">Demo </a></li>
                                                        <li><a href="#">Demo</a></li>
                                                      </ul>
                                                  </div>
                                                <!-- dropdown More -->  
                                                </div>  
                                              </div>
                                        </div>
                                     </div>
                                     <div class="col-md-6 ">
                                        <div class="row">
                                          <div class="col-sm-12 feed_right loss">
                                             <div class="feed_wrapper">
                                              <div class="feed_content_wrapper">
                                                  <div class="feed_profile_details">
                                                     <div class="feed_img">
                                                       <img src="{{asset('assets/front_end/images/user_img.png')}}">
                                                     </div>
                                                     <div class="feed_user_name">
                                                      <a href=""> 
                                                       <h4>Morkan Doe <span>2hrs. ago</span></h4>
                                                       <p>Place a bet via ladbrokers</p>
                                                      </a> 
                                                     </div>
                                                  </div>
                                                  <div class="feed_body">
                                                    <h4>Braga v Benfica</h4>
                                                    <p>Match Betting : <span>7th July | 20:30</span></p>
                                                  </div>
                                                  <div class="feed_chart">
                                                    <h3>Benfica <span>@2.80</span></h3>
                                                    <h3>Single <span>@2.80</span></h3>
                                                  </div>
                                                </div> 
                                                <div class="feed_social_wrap">   
                                                  <ul class="feed_social">
                                                     <li>
                                                       <a href="#">
                                                         4
                                                         <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                         Like
                                                       </a>
                                                     </li>
                                                     <li>
                                                       <a href="#">
                                                         1
                                                         <i class="fa fa-clone" aria-hidden="true"></i>
                                                         Copy
                                                       </a>
                                                     </li>
                                                     <li>
                                                       <a href="#">
                                                         <i class="fa fa-facebook" aria-hidden="true"></i>
                                                      </a>
                                                     </li>
                                                     <li>
                                                       <a href="#">
                                                         <i class="fa fa-twitter" aria-hidden="true"></i>
                                                      </a>
                                                     </li>
                                                     <li>
                                                       <a href="#">
                                                         <i class="fa fa-share-alt" aria-hidden="true"></i>
                                                      </a>
                                                     </li>
                                                  </ul>
                                                 </div> 
                                                  <div class="comment_section">
                                                    <input class="form-control" type="text" name="" placeholder="Add a Comment ...">
                                                  </div>
                                              <!-- dropdown More -->   
                                                 <div class="dropdown feed_more">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                    <img src="{{asset('assets/front_end/images/arrow_down.png')}}">
                                                    </a>
                                                    <ul class="dropdown-menu" role="menu">
                                                      <li><a href="#">Demo </a></li>
                                                      <li><a href="#">Demo </a></li>
                                                      <li><a href="#">Demo</a></li>
                                                    </ul>
                                                </div>
                                              <!-- dropdown More -->   
                                             </div>  
                                          </div>
                                          <div class="col-sm-12 feed_right draw">
                                             <div class="feed_wrapper">
                                              <div class="feed_content_wrapper">
                                                  <div class="feed_profile_details">
                                                     <div class="feed_img">
                                                       <img src="{{asset('assets/front_end/images/user_img.png')}}">
                                                     </div>
                                                     <div class="feed_user_name">
                                                      <a href=""> 
                                                       <h4>Morkan Doe <span>2hrs. ago</span></h4>
                                                       <p>Place a bet via ladbrokers</p>
                                                      </a> 
                                                     </div>
                                                  </div>
                                                  <div class="feed_body">
                                                    <h4>Braga v Benfica</h4>
                                                    <p>Match Betting : <span>7th July | 20:30</span></p>
                                                  </div>
                                                  <div class="feed_chart">
                                                    <h3>Benfica <span>@2.80</span></h3>
                                                    <h3>Single <span>@2.80</span></h3>
                                                  </div>
                                                </div> 
                                                <div class="feed_social_wrap">   
                                                  <ul class="feed_social">
                                                     <li>
                                                       <a href="#">
                                                         4
                                                         <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                         Like
                                                       </a>
                                                     </li>
                                                     <li>
                                                       <a href="#">
                                                         1
                                                         <i class="fa fa-clone" aria-hidden="true"></i>
                                                         Copy
                                                       </a>
                                                     </li>
                                                     <li>
                                                       <a href="#">
                                                         <i class="fa fa-facebook" aria-hidden="true"></i>
                                                      </a>
                                                     </li>
                                                     <li>
                                                       <a href="#">
                                                         <i class="fa fa-twitter" aria-hidden="true"></i>
                                                      </a>
                                                     </li>
                                                     <li>
                                                       <a href="#">
                                                         <i class="fa fa-share-alt" aria-hidden="true"></i>
                                                      </a>
                                                     </li>
                                                  </ul>
                                                 </div> 
                                                  <div class="comment_section">
                                                    <input class="form-control" type="text" name="" placeholder="Add a Comment ...">
                                                  </div>
                                              <!-- dropdown More -->   
                                                 <div class="dropdown feed_more">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                    <img src="{{asset('assets/front_end/images/arrow_down.png')}}">
                                                    </a>
                                                    <ul class="dropdown-menu" role="menu">
                                                      <li><a href="#">Demo </a></li>
                                                      <li><a href="#">Demo </a></li>
                                                      <li><a href="#">Demo</a></li>
                                                    </ul>
                                                </div>
                                              <!-- dropdown More -->   
                                             </div>  
                                          </div>
                                        </div>  
                                     </div>
                                   </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="bets">
                                </div>
                                <div role="tabpanel" class="tab-pane" id="leaderboard">
                                </div>
                           </div>
                      </div>
                    <!-- feed section end  -->
                      <div class="clearfix"></div>
                    </div>
                  </div>  
                   <!-- rightbar part Start -->
                      @include('common/rightbar')
                    </div>
                </div>
            <!-- Page body content -->
        </div>
        <!-- page-content-wrapper -->
@include('common/footer_link')
<script>
  $(document).ready(function(){
	setTimeout(function() {
		$('.alert-danger').fadeOut('fast');
        $('.alert-success').fadeOut('fast');
	}, 4000);
  });
</script>