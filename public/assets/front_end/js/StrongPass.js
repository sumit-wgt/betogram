function passwordStrength(password)
{
	var desc = new Array();
	desc[0] = "Very Weak";
	desc[1] = "Weak";
	desc[2] = "Better";
	desc[3] = "Medium";
	desc[4] = "Strong";
	desc[5] = "Strongest";

	var score   = 0;
    var passError = '';

	//if password bigger than 6 give 1 point
	if (password.length > 6) {
	   score++;
	} 

	//if password has both lower and uppercase characters give 1 point	
	if ( ( password.match(/[a-z]/) ) && ( password.match(/[A-Z]/) ) ) {
	   score++;
	} 

	//if password has at least one number give 1 point
	if (password.match(/\d+/)) {
	   score++;
	}

	//if password has at least one special caracther give 1 point
	if ( password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) ) {
	   score++;
	}	

	//if password bigger than 12 give another 1 point
	if (password.length > 12) {
	   score++;
	}

	 document.getElementById("passwordDescription").innerHTML = desc[score];
	 document.getElementById("passwordStrength").className = "strength" + score;
     
     // checking to show error message if password don't have 1 uppercase ,1 number and at least 8 character
     if ( password.match(/[A-Z]/) ) {
        passError = '';
 	 } else {
        passError = 'Password must contain 1 uppercase letter';
 	 }
     if (password.match(/\d+/)) {
	    passError += '';
	 } else {
	    passError += ' Password must contain 1 number';
	 }
     if (password.length < 8) {
        if(passError != '') {
            passError += '<br /> Password must contain 8 characters';
        } else {
            passError += ' Password must contain 8 characters';
        }
        
	 } else {
	    passError += '';
	 }
          
     if(passError != '') {
        $('#userPassError').html(passError).fadeIn('slow');
        $("#register").prop('disabled', 'true');
     } else if (passError == '') {
        $('#userPassError').html('').fadeOut('slow');
        $('#register').removeAttr('disabled');
     }
     if(password == '') {
        $('#userPassError').html('').fadeOut('slow');
        $('#register').removeAttr('disabled');
     }
     
     // for click to see the text password
     /*if(password != '') {
        $("#individualPass").show();
     } else {
        $("#individualPass").hide();
     }*/
     
     /*$("#individualPass").mousedown(function(){
        $("#bundle_creoyouadminbundle_creoyouindividualuser_password").attr('type','text');
     }).mouseup(function(){
        $("#bundle_creoyouadminbundle_creoyouindividualuser_password").attr('type','password');
     }).mouseout(function(){
        $("#bundle_creoyouadminbundle_creoyouindividualuser_password").attr('type','password');
     });*/
}