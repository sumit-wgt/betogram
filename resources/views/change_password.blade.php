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
            @if (session('status'))
            <div class="alert alert-danger">
                {{ session('status') }}
            </div>
            @endif
            
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
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
                  <h3>Change your password</h3>
                    <form class="change_password col-md-8 col-md-offset-2" id="changePasswordForm" name="changePasswordForm" action="javascript:void(0);" method="post" autocomplete="off" onsubmit="ChangePasswordFormSubmit()">
                       <div class="form-group">
                          <input type="password" name="oldPassword" name="oldPassword" class="form-control validate[required]" placeholder="Enter your old password" name="old_password"/>
                       </div>
                       <div class="form-group">
                          <input type="password" name="newPassword" id="newPassword" class="form-control validate[required,minSize[5],maxSize[15]]" placeholder="Enter your new password" name="new_password"/>
                       </div>
                       <div class="form-group">
                          <input type="password" name="confirmPassword" id="confirmPassword" class="form-control validate[required,equals[newPassword]]" placeholder="Enter confirm password" name="confirm_password"/>
                       </div>
                       <button type="submit" class="change_password_button" id="changepass_btn">Save</button>
                    </form>
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
   });
   
   
function ChangePasswordFormSubmit()
{
    var valid = $("#changePasswordForm").validationEngine('validate');
    if (valid == true) 
    {
        $("#changepass_btn").prop('disabled', 'true');
        $.ajax({
                type: "POST",
                url: "{{url('change-password-data')}}",
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: $("#changePasswordForm").serialize(),
                success: function(result)
                {
                    //console.log(result);
                    if(result == 'success')
                    {
                        window.location.href = "{{url('home')}}";
                    }
                    if(result == 'error')
                    {
                        location.reload();
                    }
                }
        });
    } else {
        $('#changepass_btn').removeAttr('disabled');
        $("#changePasswordForm").validationEngine();
    }
}

$(document).ready(function(){
	setTimeout(function() {
		$('.alert-danger').fadeOut('fast');
        $('.alert-success').fadeOut('fast');
	}, 4000);
});

</script>