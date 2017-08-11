@include('common/header_link')
<script type="text/javascript">
$(document).ready(function(){
	setTimeout(function() {
		$('.alert-danger').fadeOut('fast');
        $('.alert-success').fadeOut('fast');
	}, 4000);
});
</script>
<!-- Page body content -->
	<div class="login_wrap">
		<div class="container">
	      <div class="row">	
			<div class="col-md-12">
			    <div class="login_header">
			    	<div class="logo_holder">
			    		<img src="{{asset('assets/front_end/images/logo.png')}}">
			    	</div>
			    	<h3>For professional betters </h3>
			    </div>
				<div class="login_content">
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
				  <div class="row">
				  	 <div class="col-md-6">
				  	   <div class="login_content_left">
				  	 	<p>Create your account and experience the best platform for betters</p>
				  	 	<a href="javascript:void(0);" data-toggle="modal"  onclick="openform()"> Create Account</a>
				  	   </div> 	
				  	 </div>
				  	 <div class="col-md-6">
				  	 	<div class=" row login_content_right">
				  	 	  <p>Already a  member? Log in here </p>
				  	 	   <div class="login_form col-md-8 col-md-offset-2">
				              <form id="login" action="javascript:void(0);" method="post" autocomplete="off" onsubmit="loginFormSubmit()">
				                  <div class="form-group">
				                    <label>Username</label>
				                    <input class="form-control validate[required]" type="text" placeholder="Enter Username " name="user_name"/>
				                  </div>
				                  <div class="form-group">
				                    <label>Password</label>
				                    <input class="form-control validate[required]" type="Password" placeholder="Enter Password" name="password"/>
				                  </div>
				                  <button id="login_button" class="btn-block" type="submit">Login </button>
				                  <a href="javascript:void(0);" data-toggle="modal" data-target="#forgotpasswordmodal">Forgot Password?</a>
				              </form>
				           </div>
				           <div class="clearfix"></div>
					   	   <div class="social_login">
					   	   	  <div class="col-md-6 col-sm-6">
					   	   	  	<a class="facebook" href="#">
					   	   	  	Log in with Facebook
					   	   	  	<i class="fa fa-facebook-official" aria-hidden="true"></i>
					   	   	  	</a>
					   	   	  </div>
					   	   	  <div class="col-md-6 pull-rihgt col-sm-6 ">
					   	   	  	<a class="googleplus" href="#">
					   	   	  	Login with Google
					   	   	  	<i class="fa fa-google-plus" aria-hidden="true"></i>
					   	   	  	</a>
					   	   	  </div>
					   	   </div> 
				  	 	</div>
				  	 </div>
				  </div>
				</div>
				<div class="login_footer">
					<ul>
					   <li><a href="{{url('service')}}">Our Service</a></li>
					    <li><a href="{{url('about-us')}}">About Us</a></li>	 
					     <li><a href="{{url('contact')}}">Contact</a></li>	 
					      <li><a href="{{url('faq')}}">FAQ</a></li>	 	 
					</ul>
				</div>
			</div>
		  </div>	
		</div>
	</div>
<!-- Page body content -->
<!-- Modal -->
<div id="registration_modal" data-easein="expandIn" class="modal fade registration_modal" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Create an account </h4>
      </div>
      <div class="modal-body" id="modalContent">
       <!-- Registration Content -->
        <div class="registration_form"> 
	       <div class="col-md-10 col-md-offset-1"> 
	         <div class="row"> 
             <!--script src="https://www.google.com/recaptcha/api.js" ></script-->
	           <form id="registration" action="javascript:void(0);" method="post" autocomplete="off" onsubmit="formSubmit()"> 
	           	 <div class="col-md-6">
	           	  <div class="form-group">
				    <input class="form-control validate[required,custom[onlyLetterSp]]" type="text" placeholder="Name" name="name"/>
				  </div>
	           	 </div>
	           	 <div class="col-md-6">
	           	  <div class="form-group">
    			      <input class="form-control validate[required]" type="text" placeholder="Username" name="user_name" id="user_name" onkeyup="checkUserName();"/>
                      <div class="usernameHintText" id="usernameHintText" style="display: none;">
                      <p>Please select your username carefully.<br/> You will not be able to change this again.</p>
                      </div>
                      <div class="info-text" style="display: none; cursor:pointer;"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
                      <div id='username_availability_result' class="username_availability_result" style="display:none"></div>
                      <div class="username_availability_result" id="username_valid_error" style="display: none;">Username can only be alphanumeric</div>
				  </div>
	           	 </div>
	           	 <div class="col-md-6">
	           	  <div class="form-group">
				    <input class="form-control validate[required,custom[email]]" type="Email" placeholder="Email" name="email" onkeyup="CheckUserEmail(this.value)" id="email"/>
				    <div id='email_availability_result' style="display:none" class="email_availability_result"></div>
                  </div>
				  <div class="row">
				  	<div class="col-md-4">
				      <div class="form-group">
				  		 <select class="selectpicker validate[required] AgeGroup" id="age_group" name="age_group" data-live-search="true">
                           <option value="">Age</option>
                           <option value="18-20">18-20</option>
                           <option value="21-25">21-25</option>
                           <option value="26-30">26-30</option>
                           <option value="30+">30+</option>
                         </select>
                       </div>  
				  	</div>
				  	<div class="col-md-8 paddingLeftLess">
				  	  <div class="radioButton">
						 <label> Gender : </label>
                            <bdo>
                            <input type="radio" value="Male"  name="gender" class="validate[required]"/>
                            <span></span>
                            <abbr> Male </abbr>
                            </bdo>
                            <bdo>
                            <input type="radio" value="Female"  name="gender" class="validate[required]"/>
                            <span></span>
                            <abbr> Female </abbr>
                            </bdo>
					   </div>   
				  	</div>
				  </div>
	           	 </div>
	           	 <div class="col-md-6">
	           	  <div class="form-group">
				    <input class="form-control validate[required,minSize[5],maxSize[15]]" type="Password" placeholder="Password" name="password" id="userConfPassIndividual" onkeyup="seeTextPass(this.value);"/>
				    <span id="individualPassConf" style="display: none;" class="glyphicon glyphicon-eye-open"></span>
                  </div>				  
	           	 </div>
                 <div class="col-md-6">
                   <div class="form-group">
	           	 	 <div class="radioButton">
						 <label> Select Your Currency : </label>
                         <bdo>
                         <input type="radio" value="GBP"  name="currency" class="validate[required]"/>
                         <span></span>
                         <abbr> GBP </abbr>
                         </bdo>
                         <bdo>
                         <input type="radio" value="SEK"  name="currency" class="validate[required]"/>
                         <span></span>
                         <abbr> SEK </abbr>
                         </bdo>
					   </div>  
					</div> 
                 </div>
                 <div class="clearfix"></div>
                 <div class="col-md-6">
	           	 <div class="form-group">
				  		<select class=" AgeGroup selectpicker validate[required]" name="country" id="country" onchange="SelectCountry(this.value)" data-live-search="true">
    		                 <option value="">Select Country</option>
                             <?php if(isset($get_country)) 
                             { 
                                 foreach ($get_country as $country)
                                 {
                                 ?>
                                    <option value="<?php echo $country->id;?>"><?php echo $country->name;?></option>
                                 <?php
                                 }
                             } 
                             ?>
                        </select>
	                 </div>
                     <div class="form-group">
					   <input class="form-control validate[required]" type="text" placeholder="City" name="city"/>
					 </div> 
                </div>
	           	 <div class="col-md-6">
				  <div class="row">
				  	<div class="col-md-4 col-sm-4">
                       <div class="form-group">
                         <label for="code" style="display:none" id="code">*This field is required<span class="text-error"></span></label>
				  		 <select class=" AgeGroup selectpicker required" name="country_code" id="countryCode" data-live-search="true">
                            <option>Code</option>
                             <?php if(isset($get_country)) 
                             { 
                                 foreach ($get_country as $country)
                                 {
                                 ?>
                                    <option value="<?php echo $country->id;?>"><?php echo '+'.$country->phonecode;?></option>
                                 <?php
                                 }
                             } 
                             ?>
                         </select>
                      </div>   
				  	</div>
				  	<div class="col-md-8 col-sm-8 paddingLeftLess">
				  	 <div class="form-group">
					   <input class="form-control validate[required] number-only" type="text" placeholder="Mobile Number" name="contact_no" max="15" onkeyup="unique_number(this.value)"/>
					   <div id='phoneNumber_availability_result' style="display:none" class="phoneNumber_availability_result"></div>
                     </div>
				  	</div>
				  </div>
	           	 </div>
	           	 <div class="col-md-6">
	           	 	<div class="form-group nocaptcha">
                      <div class="g-recaptcha" id="g-recaptcha" data-sitekey="6LdugSgUAAAAAEgPCG1COHHLqZljonv9dw0UEAs-" data-callback="onReturnCallback" data-theme="light"></div>
                      <span id="captcha_error" class="captcha_error" style="display:none;"></span>
                   </div>
	           	 </div>
                 <div class="term_condi col-md-12">
	           	 		<div class="checkbox">
                            <input name="checkbox1" id="checkbox1" type="checkbox" value="" class="validate[required]"/>
	                        <label for="checkbox1">
	                            I am at least 18 years old and have read & accept the Terms and Conditions, Privacy Policy, Betting Rules & Responsible Gaming.
	                        </label>
	                    </div>
	           	 	</div>
	           	 <div class="clearfix"></div>
	           	 <div class="Registration_button">
		           	 <div class="col-md-6 col-sm-6 col-xs-6">
		           	  <a href="javascript:void(0);" data-dismiss="modal" onclick="ResetForm()">Cancel</a>
		           	 </div>
                     <input type="hidden" name="_token" id="csrf_token" value="{{ csrf_token() }}"/>
		           	 <div class="col-md-6 col-sm-6 col-xs-6">
		           	  <button class="submit" type="submit" id="register">Create</button>
		             </div>
	           	 </div>
			   </form>
			  </div>  
	        </div>
	      </div>
        <div class="clearfix"></div>
        <div class="verify_email" style="display: none;">
            <img src="{{asset('assets/front_end/images/mail.png')}}"/>  
        	<p>A verification link has been sent to:</p>
        	<h3 id="UserEmailId">john.smith@betogram.se</h3>
        	<a data-dismiss="modal" class="dismiss" href="javascript:void(0);">Got it!</a>
        </div> 	
      </div>
    </div>
    <div class="loader" style="display: none;" id="body_loader">
      <img src="{{asset('assets/front_end/images/loading.gif')}}"/>
    </div>
  </div>
</div>
<!--forgot password modal start-->
<!-- Modal -->
<div id="forgotpasswordmodal" data-easein="expandIn" class="modal fade registration_modal forgotpasswordmodal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Recover Credentials</h4>
      </div>
      <div class="modal-body" id="modalContent">
       <!-- Registration Content -->
        <div class="registration_form"> 
	       <div class="col-md-8 col-md-offset-2"> 
	         <div class="row"> 
             <!--script src="https://www.google.com/recaptcha/api.js" ></script-->
	           <form id="forgotPass" action="javascript:void(0);" method="post" autocomplete="off" onsubmit="ForgotPasswordFormSubmit()"> 
	           	 <div class="col-md-12">
	           	  <div class="form-group">
                    <!--label for="agegroup" style="display:none" id="agegroup">*Please select your agegroup<span class="text-error"></span></label-->
			  		 <select class="selectpicker validate[required] AgeGroup" id="recovery_email" name="recovery_email">
                       <option value="">Choose recovery type</option>
                       <option value="username">Recover username</option>
                       <option value="password">Recover password</option>
                     </select>
                   </div>
	           	 </div>
	           	 <div class="col-md-12">
	           	  <div class="form-group">
				    <input class="form-control validate[required,custom[email]]" type="Email" placeholder="Email" name="forgotEmail" onkeyup="CheckUserEmailForForgotPass(this.value)" id="UserEmail"/>
				    <div id='email_availability_result_forgot_pass' style="display:none" class="email_availability_result"></div>
                  </div>
	           	 </div>
	           	 <div class="clearfix"></div>
	           	 <div class="Registration_button">
		           	 <div class="col-md-6 col-sm-6 col-xs-6">
		           	  <a href="javascript:void(0);" data-dismiss="modal" onclick="ResetFormForgotPassword()">Cancel</a>
		           	 </div>
                     <input type="hidden" name="_token" id="csrf_token" value="{{ csrf_token() }}"/>
		           	 <div class="col-md-6 col-sm-6 col-xs-6">
		           	  <button class="submit" type="submit" id="forgotpass_btn">Submit</button>
		             </div>
	           	 </div>
			   </form>
			  </div>  
	        </div>
	      </div>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="loader" style="display: none;" id="loader_forgotPass_modal">
      <img src="{{asset('assets/front_end/images/loading.gif')}}"/>
    </div>
  </div>
</div>
<!--forgot password modal end-->
@include('common/footer_link')
<script type="text/javascript">
$(document).ready(function(){
	setTimeout(function() {
		$('#success_message').fadeOut('fast');
	}, 3000);
    setTimeout(function() {
		$('.alert-success').fadeOut('fast');
	}, 4000);
});
function openform(){
	$('#registration_modal').modal('show');
}
/*function check_validation()
{
    $('#registration').validationEngine();
    $('.selectpicker').selectpicker();
}*/
$('.number-only').on('input', function (event) {
    this.value = this.value.replace(/[^0-9]/g, '');
});
function checkUserName()
{
    var user_name = $("#user_name").val();
    if(user_name == '')
    {
        $('#username_availability_result').html('').hide();
    }
    else
    {
        if(/^[0-9]+$/.test(user_name)) 
        {
       		$('#username_valid_error').fadeIn('slow');
     		$('#register').prop("disabled", true);
        } else {
            if((/^[A-Za-z]+$/.test(user_name)) || (/^[0-9a-zA-Z]+$/.test(user_name)))
            {
                //var csrf_token = $("#csrf_token").val();
                $.ajax({
                    type: "POST",
                    url: "{{url('CheckUserName')}}",
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {'userName':user_name},
                    success: function(result)
                    {
                        //console.log(result);
                        $('#username_valid_error').fadeOut('slow');
                        if(result == "has")
                        {
                            $('#username_availability_result').html(user_name + ' is not Available').show();
    						$("#register").prop('disabled', 'true');
    					}else{
    						$('#username_availability_result').html('').hide();
    						$('#register').removeAttr('disabled');
    					}
                    }
                });
            } else {
       				$('#username_valid_error').fadeIn('slow');
       				$('#register').prop("disabled", true);
            }
        }
    }       
}
function SelectCountry(country_id)
{
    $.ajax({
        type: "POST",
        url: "{{url('getCountryCode')}}",
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {'countryId':country_id},
        success: function(result)
        {
            //console.log(result);
            $("#countryCode").html(result);
            $('.selectpicker').selectpicker('refresh');
        }
    });
}
function CheckUserEmail(emailid)
{
    if(emailid !='')
    {
        var GetIndex = emailid.indexOf("@");
        if(GetIndex > 0)
        {
            $.ajax({
                type: "POST",
                url: "{{url('checkUserEmailId')}}",
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {'emailid':emailid},
                success: function(result)
                {
                    //console.log(result);
                    if(result == "has"){
        				$('#email_availability_result').html(emailid + ' is not Available').show();
        				$("#register").prop('disabled', 'true');
        			}else{    
        				$('#email_availability_result').html('').hide();
        				$('#register').removeAttr('disabled');
        			}
                }
            });
        }
    }
    else{
        $('#email_availability_result').html('').hide();
    }
}
function unique_number(phoneNumber)
{
    if(phoneNumber == '')
    {
        $('#phoneNumber_availability_result').html('').hide();
        $("#register").prop('disabled', 'true');
    }else{
        $.ajax({
                type: "POST",
                url: "{{url('CheckPhoneNumber')}}",
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {'phoneNumber':phoneNumber},
                success: function(result)
                {
                    //console.log(result);
                    if(result == "has"){
        				$('#phoneNumber_availability_result').html(phoneNumber + ' already exist').show();
        				$("#register").prop('disabled', 'true');
        			}else{    
        				$('#phoneNumber_availability_result').html('').hide();
        				$('#register').removeAttr('disabled');
        			}
                }
            });
    }
}
function seeTextPass(password)
{
     if(password != '') {
        $("#individualPassConf").show();
     } else {
        $("#individualPassConf").hide();
     }
     $("#individualPassConf").mousedown(function(){
        $("#userConfPassIndividual").attr('type','text');
     }).mouseup(function(){
        $("#userConfPassIndividual").attr('type','password');
     }).mouseout(function(){
        $("#userConfPassIndividual").attr('type','password');
     });
} 
function ResetForm()
{
    $('#registration')[0].reset();
    $('.selectpicker').selectpicker('refresh');
    $(".formError").remove()
}
//$("#registration").submit(function(){
function formSubmit()
{
    var valid = $("#registration").validationEngine('validate');
    if (valid == true) {
        $("#register").prop('disabled', 'true');
        $("#body_loader").show();
        $.ajax({
            type: "POST",
            url: "{{url('getRegister')}}",
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: $("#registration").serialize(),
            success: function(result)
            {
                //console.log(result);
                $('#register').removeAttr('disabled');
                if(result == "success") {
                    $("#captcha_error").html('').fadeOut('slow');
                    var emaiId = $("#email").val();
                    $("#UserEmailId").html('');
                    $("#UserEmailId").html(emaiId);
                    $("#body_loader").hide();
                    openSuccessModal();
                } else if(result == "error1" || result == "error2") {
                    $("#body_loader").hide();
                    $("#captcha_error").html('Please select Re-Captcha').fadeIn('slow');
                }
            }
        });
    } else {
        $('#register').removeAttr('disabled');
        $("#registration").validationEngine();
    }
}
function loginFormSubmit()
{
    var valid = $("#login").validationEngine('validate');
    if (valid == true) {
        $("#login_button").prop('disabled', 'true');
        $.ajax({
           type: "POST",
           url: "{{url('getlogindata')}}",
           headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
           data: $("#login").serialize(), // serializes the form's elements.
           success: function(result)
           {
			   //console.log(result);
               if(result == 0)
               {
                 window.location.href = "{{url('home')}}";
               }
               else if(result == 1)
               {
                    window.location.href = "{{url('change-password')}}";
               }else if(result == 'failed')
               {
                    location.reload();
               }
			   /*if(parseInt(result)==1){
				    location.href = "<?php //echo base_url('user-home');?>";
			   }
			   else if(parseInt(result)==2){
				    $("#errorMsg").html('').fadeIn('slow');
				  $("#errorMsg").html('Block'); 
				  setTimeout(function(){
					 $("#errorMsg").fadeOut('slow');   
				  },3000);
			   }
			    else if(parseInt(result)==0){
					  $("#errorMsg").html('').fadeIn('slow');
				  $("#errorMsg").html('Please Active your account'); 
				  setTimeout(function(){
					 $("#errorMsg").fadeOut('slow');   
				  },3000);  
			   }
			   else{
				    $("#errorMsg").html('').fadeIn('slow');
				 $("#errorMsg").html('No account information found'); 
				  setTimeout(function(){
					 $("#errorMsg").fadeOut('slow');   
				  },3000);  
			   }*/
           }
       });
    } else {
        $('#login_button').removeAttr('disabled');
        $("#login").validationEngine();
    }
}
function CheckUserEmailForForgotPass(emailid)
{
    if(emailid !='')
    {
        var GetIndex = emailid.indexOf("@");
        if(GetIndex > 0)
        {
            $.ajax({
                type: "POST",
                url: "{{url('checkUserEmailId')}}",
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {'emailid':emailid},
                success: function(result)
                {
                    //console.log(result);
                    if(result == "has"){
        				$('#email_availability_result_forgot_pass').html('').fadeOut('slow');
        				$('#forgotpass_btn').removeAttr('disabled');
        			}else{    
        				$('#email_availability_result_forgot_pass').html(emailid + ' is not valid').fadeIn('slow');
        				$("#forgotpass_btn").prop('disabled', 'true');
        			}
                }
            });
        }
    }
    else{
        //$('#email_availability_result_forgot_pass').html('').fadeOut('slow');
        $("#forgotpass_btn").prop('disabled', 'true');
    }
}
function ForgotPasswordFormSubmit()
{
    var recovery_type = $("#recovery_email").val();
    var email_id = $("#UserEmail").val();
    var valid = $("#forgotPass").validationEngine('validate');
    if (valid == true) 
    {
        $("#forgotpass_btn").prop('disabled', 'true');
        $("#loader_forgotPass_modal").show();
        $.ajax({
                type: "POST",
                url: "{{url('forgot-pass-mail')}}",
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: $("#forgotPass").serialize(),
                success: function(result)
                {
                    if(result == "success")
                    {
                        $("#loader_forgotPass_modal").hide();
                        location.reload();
                    }
                }
        });
    } else {
        $('#forgotpass_btn').removeAttr('disabled');
        $("#forgotPass").validationEngine();
    }
}
function ResetFormForgotPassword()
{
    $('#forgotPass')[0].reset();
    $('.selectpicker').selectpicker('refresh');
    $(".formError").remove()
}
</script>
<!--script>
<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script-->
<!--script type="text/javascript">
var onReturnCallback = function(response) { 
    alert('g-recaptcha-response: ' + grecaptcha.getResponse()); 
    var url='proxy.php?url=' + 'https://www.google.com/recaptcha/api/siteverify';  
    $.ajax({ 'url' : url, 
               dataType: 'json',
               data: { response: response},
               success: function( data  ) {                     
                    var res = data.success.toString();
                        alert( "User verified: " + res);                    
                        if (res ==  'true') { 
                            document.getElementById('g-recaptcha').innerHTML = 'THE CAPTCHA WAS SUCCESSFULLY SOLVED'; 
                        } else {
                            document.getElementById('g-recaptcha').innerHTML = 'ERROR';
                        }
                } // end of success: 
         }); // end of $.ajax 
}; // end of onReturnCallback 
</script-->