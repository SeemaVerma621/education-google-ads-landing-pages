<div id="form">
    <div class="frm-heading">
        <h5><strong> Admission Open <br></strong></h5>
        <p>Take a step towards
            your success today</p><br>
    </div>

    <form action="mail.php" method="post" name="form" id="myForm">
        <!-- <label>Name<span class="required">*</span></label> -->
       <div> <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Enter Your Name" required> </div>

        <!-- <label>Email ID <span class="required">*</span></label> -->
       <div> <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email" required> </div>

        <!-- <label>Phone <span class="required">*</span></label> -->
      <div> <input type="tel" name="phone" id="phone" class="form-control" placeholder="Enter Mobile Number" required> </div>

        <!-- <label>Course <span class="required">*</span></label> -->


      <div>  <select name="course" class="form-control" id="specialization" style="margin-top:10px!important;" required>
            <option value="" selected disabled>Select Your Course</option>
            <option value="BBA">BBA</option>
            <option value="BCOM">BCOM</option>
<option value="MA">MA</option>
            <option value="BCA">BCA</option>
            <option value="MBA">MBA</option>
            <option value="MCOM">MCOM</option>
            <option value="MJMC">MJMC</option>
            <option value="MCA">MCA</option>

        </select>
		   </div>
        <!-- <label>State <span class="required">*</span></label> -->
       <div> <select name="state" class="form-control" id="state" required>
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
		  </div>
	<div id="checkboxWrapper" style="display: flex; flex-direction: column; gap: 5px;">
  <div style="display: flex; align-items: center; gap: 8px;">
    <input type="checkbox" id="disclaimer" name="disclaimer" />
    <span style="font-size: 10px; line-height:1;">I consent to receive university updates via email and mobile number. <span class="disclaimer_popup" onclick="disclaimerModal()">Disclaimer</span></span>
  </div>
  <span class="checkbox-error" style="color: red; font-size: 13px; display: none;"></span>
</div>

        <input type="hidden" name="source" id="source" class="form-control" value="Manipal" required>
        <input type="hidden" name="form_name" id="form_name" class="form-control" value="Home">
        <input type="hidden" name="sub_source" id="sub_source" class="form-control" value="">
        <input type="hidden" name="utm_source" id="utm_source" class="form-control" value="">
        <input type="hidden" name="utm_campaign" id="utm_campaign" class="form-control" value="">
        <input type="hidden" name="utm_medium" id="utm_medium" class="form-control" value="">
        <input type="hidden" name="utm_term" id="utm_term" class="form-control" value="">
        <input type="hidden" name="page_url" id="page_url" class="form-control" value="">


        <button type="submit" name="submit" value="submit" class="sub-btn" id="button">Submit</button>
    </form>
</div>
