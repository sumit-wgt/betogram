<?php include "header_link.php"; ?>

    <div id="wrapper" >
        
        <!-- Sidebar -->
            <?php include "leftbar.php"; ?>
    


    <!-- Page Content -->
        <div id="page-content-wrapper">
         
          <!-- Page header top -->
              <?php include "register_header.php"; ?>
 


          <!-- Page body content -->
            <div class="container">
             <div class="edit_profile_wrap">
                <div class="row">
                  <form>
                     <div class="col-md-12">
                      
                       <div class="profileEditTop">
                        <ul>
                          <li>
                             <img src="./images/follow_img.png">
                             <a href="">Followers : 20</a>
                          </li>
                          <li>
                             <img src="./images/following.png">
                             <a href="">Followers : 20</a>
                          </li>
                          <li>
                             <img src="./images/total.png">
                             <a href="">Followers : 20</a>
                          </li>
                        </ul>
                        <hr>
                       </div> 
                     </div> 

                   <div class="userEdit registration_form"> 
                     <div class="col-md-5">
                       <h3>Personal Details</h3>

                       <img src="./images/user_edit_img.png"> 
                       <div class="editUpload form-group"> 
                        <span id="fileselector">
                            <label class="btn btn-default Browse" for="upload-file-selector">
                                <input id="upload-file-selector" type="file" hidden="">
                                Browse
                            </label>
                        </span>
                        <button class="btn btn-default upload ">Upload</button>
                        <div class="clearfix"></div>
                       </div> 

                       <div class="form-group">
                          <input class="form-control" type="text" placeholder="Name" name="">
                       </div>
                        <div class="form-group">
                          <input class="form-control" type="Email" placeholder="Email" name="" disabled="disabled">
                        </div>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-group">  
                             <select class=" AgeGroup selectpicker">
                                          <option>Age</option>
                                          <option>18-20</option>
                                          <option>21-25</option>
                                          <option>26-30</option>
                                          <option>30+</option>
                                       </select>
                                     </div>  
                          </div>
                          <div class="col-md-8 paddingLeftLess">
                            <div class="radioButton">
                           <label> Gender : </label>
                                  <bdo>
                                    <input type="radio" value="Male"  name="member">
                                      <span></span>
                                      <abbr> Male </abbr>
                                  </bdo>
                                  <bdo>
                                      <input type="radio" value="Female"  name="member">
                                      <span></span>
                                      <abbr> Female </abbr>
                                  </bdo>
                           </div>   
                          </div>
                        </div>

                       <div class="row">
                            <div class="col-md-4">
                            <div class="form-group">
                               <select class=" AgeGroup selectpicker">
                                            <option>Code</option>
                                            <option>+91</option>
                                            <option>+91</option>
                                            <option>+91</option>
                                            <option>+91</option>
                                         </select>
                                      </div>   
                            </div>
                            <div class="col-md-8 paddingLeftLess">
                             <div class="form-group">
                             <input class="form-control" type="text" placeholder="Mobile Number" name="" max="10">
                           </div>
                            </div>
                        </div>
                        <div class="form-group">
                         <input class="form-control" type="text" placeholder="Your Interests" name="">
                        </div>
                        <div class="form-group">
                          <select class=" AgeGroup selectpicker">
                                    <option>Your Secret Question</option>
                                    <option>Your Secret Question</option>
                                    <option>Your Secret Question</option>
                                    <option>Your Secret Question</option>
                                    <option>Your Secret Question</option>
                                 </select>
                        </div>
                        <div class="form-group">
                        <select class=" AgeGroup selectpicker">
                            <option>Country</option>
                            <option>Country</option>
                            <option>Country</option>
                            <option>Country</option>
                            <option>Country</option>
                         </select>
                       </div >
                        <div class="form-group">
                           <input class="form-control" type="text" placeholder="City" name="">
                         </div> 

                     </div>

                     <div class="col-md-5 col-md-offset-1">
                        <h3>Login Details</h3>

                         <div class="form-group">
                          <input disabled="disabled" class="form-control" type="text" placeholder="Username" name="">
                        </div>
                        <div class="form-group">
                          <div class="checkbox">
                                  <input id="checkbox1" type="checkbox" onclick="myFunction();">
                                  <label for="checkbox1" id="checkboxlabel">
                                     Do you want to change your current password?
                                  </label>
                              </div>
                        </div>

                        <div class="form-group">
                          <input disabled="disabled" class="form-control disableInput" type="Password" placeholder="Current Password" name="">
                        </div>
                        <div  class="form-group">
                          <input disabled="disabled" class="form-control disableInput" type="Password" placeholder="New Password" name="">
                        </div>
                         <div  class="form-group">
                          <input disabled="disabled" class="form-control disableInput" type="Password" placeholder="Confirm New Password" name="">
                        </div>

                        <button class="btn btn-default upload Update_button">Update </button>
                     </div>

                   </div> 
                  </form>              
                </div>
             </div>   
            </div>

            <!-- Page body content -->

              <!-- footer part Start -->
                 <?php include "footer.php"; ?>
              <!-- footer part end -->  

        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->


<script type="text/javascript">
  /*$("#checkboxlabel").click(function (evt) {
    alert('dfg');
      $(".disableInput").attr('disabled', false);
  });​*/

  function myFunction()
  {
      if ($('#checkbox1').is(':checked'))
      {
        $(".disableInput").attr('disabled', false);
      }else {
        $(".disableInput").attr('disabled', true);
      }
      
      
  }

</script>



<?php include "footer_link.php"; ?>

