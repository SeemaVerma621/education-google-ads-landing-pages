<style>
	#error-message{display:none;}
</style>

<div id="form">
	<h2 class="frm-heading">Cost Free Consultation</h2>
	<p>From Higher Experience Counselor</p>
	<hr>
	<form action="mail.php" method="post" name="form" id="enquiry-form">

		<input type="text" name="full_name" id="full_name" placeholder="Enter Your Name" class="form-control" required>

		<input type="email" name="email" id="email" placeholder="Enter Your Email" class="form-control" style="margin-bottom:15px!important;" required>
		
			<input type="tel" id="phone" name="phone" class="form-control" placeholder="Enter Your Number" required>
			<div id="error-message">Invalid phone number</div>
		
		<select name="course" class="form-control" id="course" required>
			<option value="" hidden>Select Your Course</option>
    
                 <option value="MBA">MBA</option>
				<option value="MCA">MCA</option>
                 <option value="MA">MA</option>
                 <option value="BBA">BBA</option>
                 <option value="BCOM">BCOM</option>
			<option value="BCA">BCA</option>
			 	

		</select>


		<select name="state" class="form-control" id="state" required>
			<option value="" hidden>Select Your State</option>
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
		<br>
		<!-- <input type="checkbox" name="disclaimer" style="position:absolute;"><p style="text-align:left; padding-left:15px; font-size:10px!important; line-height:1.2;"> I concent to receive university update via email and mobile number.</p> -->
<div id="checkboxWrapper" style="display: flex; flex-direction: column; gap: 5px;">
  <div style="display: flex; align-items: center; gap: 8px;">
    <input type="checkbox" id="disclaimer" name="disclaimer" />
    <span style="font-size: 10px; line-height:1;">I consent to receive university updates via email and mobile number. <span class="disclaimer_popup" onclick="disclaimerModal()">Disclaimer</span></span>
  </div>
  <span class="checkbox-error" style="color: red; font-size: 13px; display: none;"></span>
</div>

		
		<input type="hidden" name="source" id="source" placeholder="Enter your source" class="form-control" value="Shoolini" required>
	
		<br>
		<input type="hidden" name="sub_source" id="sub_source" class="form-control" value="">
		<input type="hidden" name="utm_source" id="utm_source" class="form-control" value="">
		<input type="hidden" name="utm_campaign" id="utm_campaign" class="form-control" value="">
		<input type="hidden" name="utm_medium" id="utm_medium" class="form-control" value="">
		<input type="hidden" name="utm_term" id="utm_term" class="form-control" value="">
		<input type="hidden" name="page_url" id="page_url" class="form-control" value="">
		<center><button type="submit" name="submit" value="Send" class="sub-btn">Submit</button> </center>    
	</form>
</div>
