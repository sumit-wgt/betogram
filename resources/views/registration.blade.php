<script src="{{asset('assets/front_end/css/Style.css')}}" type="text/javascript"></script>
<script type="text/javascript">
/*$(document).ready(function(){
	setTimeout(function() {
		$('#mydiv').fadeOut('fast');
	}, 4000);
	setTimeout(function() {
		$('.alert-success').fadeOut('fast');
	}, 4000);
	setTimeout(function() {
		$('#robot_verification').fadeOut('fast');
	}, 3000);
});*/
</script>
@include('header_link')
@include('unregister_header')
<!-- Page body content -->
<div class="logincontant">
   <div class="container ">
      <div class="row">
         <div class="login_wrap">
            <div class="registration_form">
               <h3>Please Create Your Betogram Account</h3>
               <div class="col-md-8 col-md-offset-2">
                  <div class="row">
                    @if (session('status'))
                        <div class="alert alert-danger">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ url('getRegister')}}" method="post" autocomplete="on" id="registration">
                        <div class="col-md-6">
                           <div class="form-group">
                              <input class="form-control validate[required,custom[onlyLetterSp]]" type="text" placeholder="Name" name="name"/>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <input class="form-control" type="text" placeholder="Username" name="user_name"/>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <input class="form-control validate[required,custom[email]]" type="Email" placeholder="Email" name="email"/>
                           </div>
                           <div class="row">
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <select class=" AgeGroup selectpicker" name="age_group">
                                       <option>Age</option>
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
                                    <input type="radio" value="Male"  name="gender"/>
                                    <span></span>
                                    <abbr> Male </abbr>
                                    </bdo>
                                    <bdo>
                                    <input type="radio" value="Female"  name="gender"/>
                                    <span></span>
                                    <abbr> Female </abbr>
                                    </bdo>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <input class="form-control validate[required]" type="Password" placeholder="Password" name="password" onkeyup="passwordStrength(this.value);"/>
                           </div>
                           <div class="form-group">
                              <input class="form-control validate[required,equals[password]]" type="Password" placeholder="Confirm Password" name="cpassword"/>
                           </div>
                        </div>
                        <!--div class="col-md-6"--> 
							<div class="passwordMeter" style="margin-bottom:20px;">
								<div id="passwordDescription">Password not entered</div>
								<div id="passwordStrength" class="strength0"></div>
							</div>
						<!--/div-->
                        <div class="clearfix"></div>
                        <div class="col-md-6">
                           <div class="row">
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <select class=" AgeGroup selectpicker" name="country_code">
                                       <option>Code</option>
                                       <option value="+91">+91</option>
                                       <option value="+001">+001</option>
                                       <option value="+117">+117</option>
                                       <option value="+0088">+0088</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-8 paddingLeftLess">
                                 <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Mobile Number" name="contact_no" max="10">
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <input class="form-control" type="text" placeholder="Your Interests" name="interest">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <select class=" AgeGroup selectpicker" name="security_question">
                                 <?php if(isset($records)) 
                                 { 
                                     foreach ($records as $rec)
                                     {
                                     ?>
                                        <option value="<?php echo $rec->id;?>"><?php echo $rec->question;?></option>
                                     <?php
                                     }
                                 } 
                                 ?>
                              </select>
                           </div>
                           <div class="form-group">
                              <input class="form-control" type="text" placeholder="Your Answer" name="security_answer">
                           </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <div class="radioButton">
                                 <label> Select Your Currency : </label>
                                 <bdo>
                                 <input type="radio" value="GBP"  name="currency">
                                 <span></span>
                                 <abbr> GBP </abbr>
                                 </bdo>
                                 <bdo>
                                 <input type="radio" value="SEK"  name="currency">
                                 <span></span>
                                 <abbr> SEK </abbr>
                                 </bdo>
                              </div>
                           </div>
                           <div class="form-group">
                              <select class=" AgeGroup selectpicker">
                                 <option value="India">India</option>
                                 <option value="Australia">Australia</option>
                                 <option value="USA">USA</option>
                                 <option value="UK">UK</option>
                                 <option value="Germany">Germany</option>
                              </select>
                           </div>
                           <div class="form-group">
                              <input class="form-control" type="text" placeholder="City" name="city">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <div class="checkbox">
                                 <input id="checkbox1" type="checkbox">
                                 <label for="checkbox1">
                                 I am at least 18 years old and have read & accept the Terms and Conditions, Privacy Policy, Betting Rules & Responsible Gaming.
                                 </label>
                              </div>
                           </div>
                           <div class="form-group nocaptcha">
                              <!--img src="{{asset('assets/front_end/images/nocaptcha.gif')}}"-->
                              <div class="g-recaptcha" data-sitekey="6LdugSgUAAAAAEgPCG1COHHLqZljonv9dw0UEAs-"></div>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        <p><button type="submit" onclick="check_validation()">Create Betogram Account </button></p>
                    </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Page body content -->
<script type="text/javascript">
function check_validation()
{
    //alert('sumit');
    $("#registration").validationEngine();
}
</script>
@include('footer')
@include('footer_link')