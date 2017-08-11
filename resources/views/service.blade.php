@include('common/header_link')
<!-- Sidebar -->
@include('common/leftbar')
<!-- Page Content -->
<div class="bog_content">
   <!-- Page header top -->
   @include('common/register_header') 
   <!-- Page body content -->
   <div class="container cmsWrap">
      <div class="row">
         <!-- left-menu -->
         @include('common/cms_leftbar') 
         <!--div class="col-md-3 col-sm-3 col-xs-12">
            <div class="left-menu">
               <ul>
                  <li class="active"><a href="{{url('service')}}"><i class="fa fa-angle-right" aria-hidden="true"></i> Our Service</a></li>
                  <li><a href="{{url('about-us')}}"><i class="fa fa-angle-right" aria-hidden="true"></i> About Us</a></li>
                  <li><a href="{{url('contact')}}"><i class="fa fa-angle-right" aria-hidden="true"></i> Contact</a></li>
                  <li><a href="{{url('faq')}}"><i class="fa fa-angle-right" aria-hidden="true"></i> FAQ</a></li>
               </ul>
            </div>
         </div-->
         <!-- left-menu -->
         <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="main-content">
               <img src="{{asset('assets/front_end/images/cms-bg.jpg')}}" class="img-responsive"/>
               <div class="desc">
                  <h2><?php if(isset($records)) { echo $records[0]->page_title; }?></h2>
                  <?php if(isset($records)) { ?>
                  <p><?php echo $records[0]->cms_page_description; ?></p>
                  <?php } ?>
                  <!--p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p-->
               </div>
            </div>
         </div>
         <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="rightPanel">
               <img src="{{asset('assets/front_end/images/bet.png')}}" class="img-responsive"/>
            </div>
         </div>
      </div>
   </div>
   <!-- Page body content -->
</div>
<!-- page-content-wrapper -->
@include('common/footer_link')
<script>
   $('.sidenav').click (function(){
     $('.sidenav').hasClass('showhide')
     $(this).toggleClass ('showhide');
   }) 
</script>