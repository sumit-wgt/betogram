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
                  <li><a href="{{url('service')}}"><i class="fa fa-angle-right" aria-hidden="true"></i> Our Service</a></li>
                  <li><a href="{{url('about-us')}}"><i class="fa fa-angle-right" aria-hidden="true"></i> About Us</a></li>
                  <li><a href="{{url('contact')}}"><i class="fa fa-angle-right" aria-hidden="true"></i> Contact</a></li>
                  <li class="active"><a href="{{url('faq')}}"><i class="fa fa-angle-right" aria-hidden="true"></i> FAQ</a></li>
               </ul>
            </div>
         </div-->
         <!-- left-menu -->
         <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="main-content">
               <img src="{{asset('assets/front_end/images/cms-bg.jpg')}}" class="img-responsive"/>
               <div class="desc">
                  <h2>FAQ</h2>
                    <div class="panel-group faq_acco" id="mrAccordion" role="tablist" aria-multiselectable="true">
                        <?php if(isset($records)) { foreach($records as $recordKey => $value) { ?>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading<?php echo $recordKey; ?>">
                                <a role="button" data-toggle="collapse" data-parent="#mrAccordion" href="#collapse<?php echo $recordKey; ?>" aria-expanded="false" aria-controls="collapseOne">
                                    <h4 class="panel-title"><?php echo strip_tags($value['question']); ?></h4>
                                </a>
                            </div>
                            <div id="collapse<?php echo $recordKey; ?>" class="panel-collapse collapse <?php if($recordKey == 0) { echo "in"; } ?>" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body"><?php echo strip_tags($value['answer']); ?></div>
                            </div>
                        </div>
                        <?php } } ?>
                    </div><!-- panel-group -->
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