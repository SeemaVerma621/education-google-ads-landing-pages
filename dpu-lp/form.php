<div id="form">
	<h3 class="frm-heading">Get 100% FREE Expert Counseling</h3>
	<p class="sub-form-p">Academic Experts will assist you!</p><br>
	<form action="mail.php" method="post" name="form" id="enquiry-form">
		
		<input type="text" name="full_name" id="full_name" class="form-control" placeholder="Enter your name" required>


		<input type="email" name="email" id="email" class="form-control"  placeholder="Enter your email" required>

		
	 <input type="tel" id="phone" name="phone" class="form-control" placeholder="Enter your phone number" required>
    <div id="error-message">Invalid phone number</div>
    
    
	
		<select name="course" class="form-control" id="course" required style="margin-top:10px!important;">
		  <option value="" selected>Select Your Course</option>
			<option value="BBA">BBA</option>
			<option value="MBA">MBA</option>
		
		</select>

		
		<select name="state" class="form-control" id="state" required>
			  <option value="" selected>Select Your State</option>
			<option value="Andhra Pradesh">Andhra Pradesh</option>
			<option value="Arunachal Pradesh">Arunachal Pradesh</option>
			<option value="Assam">Assam</option>
			<option value="Bihar">Bihar </option>
			<option value="Chhattisgarh">Chhattisgarh</option>
			<option value="Delhi">Delhi</option>
			<option value="Goa">Goa</option>
			<option value="Gujarat">Gujarat </option>
			<option value="Haryana">Haryana</option>
			<option value="Himachal Pradesh">Himachal Pradesh</option>
			<option value="Jharkhand">Jharkhand </option>
			<option value="Karnataka">Karnataka</option>
			<option value="Kerala">Kerala</option>
			<option value="Madhya Pradesh">Madhya Pradesh </option>
			<option value="Maharashtra">Maharashtra</option>
			<option value="Manipur">Manipur</option>
			<option value="Meghalaya">Meghalaya </option>
			<option value="Mizoram">Mizoram</option>
			<option value="Nagaland">Nagaland</option>
			<option value="Odisha">Odisha </option>
			<option value="Punjab">Punjab</option>
			<option value="Rajasthan">Rajasthan</option>
			<option value="Sikkim">Sikkim </option>
			<option value="Tamil Nadu">Tamil Nadu</option>
			<option value="Telangana">Telangana</option>
			<option value="Tripura">Tripura </option>
			<option value="Uttar Pradesh">Uttar Pradesh</option>
			<option value="Uttarakhand">Uttarakhand </option>
			<option value="West Bengal">West Bengal </option>
		</select>
		
		<input type="hidden" name="source" id="source" class="form-control" value="DPU">
		<input type="hidden" name="form_name" id="form_name" class="form-control" value="">
		<input type="hidden" name="utm_source" id="utm_source" class="form-control" value="">
		<input type="hidden" name="utm_campaign" id="utm_campaign" class="form-control" value="">
		<input type="hidden" name="utm_medium" id="utm_medium" class="form-control" value="">
		<input type="hidden" name="utm_term" id="utm_term" class="form-control" value="">
		<input type="hidden" name="page_url" id="page_url" class="form-control" value="">
<br>
		<center><button type="submit" name="submit" value="send" class="sub-btn" id="button">Submit</button> </center>    
	</form>
</div>

<script>
	const form = document.getElementById('enquiry-form');
	const submitButton = document.querySelector('.sub-btn');

	form.addEventListener('submit', function (event) {
	    /*Check if reCAPTCHA is validated
	    if (grecaptcha.getResponse() === "") {
	        alert("Please verify that you are not a robot.");
	        event.preventDefault();
	        return;
	    }*/
	    submitButton.disabled = true; // Disable the button
	    submitButton.textContent = 'Processing...'; // Change button text
	});
</script>
<script src="assets/phone-script.js"></script>
<!--end of form-->