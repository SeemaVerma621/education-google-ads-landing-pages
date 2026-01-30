<div id="form">
    <!-- <center><p class="ads">Admisssion Open 2023</p></center> -->
    <div class="frm-heading">
		<h5><strong><span class="blue">&nbsp;Enquire Now </span> <br></strong></h5>
        <p>Academic Experts will assist you!
        </p>
		
    </div>
	<hr>

    <!-- <center><p>Have Doubt? Talk FREE to Our Expert</p></center> -->
    <form action="mail.php" method="post" name="form" id="myForm">

        <!-- <label>Name<span class="required">*</span></label> -->
        <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Enter Your Name" required>
<!-- 
        <label>Email ID <span class="required">*</span></label> -->
        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email" required>

        <!-- <label>Phone <span class="required">*</span></label> -->
        <input type="tel" name="phone" id="phone" pattern="[0-9]{10}" maxlength="10" class="form-control"
            placeholder="Enter 10-digit Mobile Number" required>

       

        <!-- <label>Course <span class="required">*</span></label> -->
        <select name="course" class="form-control" id="course" required style="margin-top:10px;">
            <option value="" selected disabled>Select Your Course</option>
            <option value="BBA">BBA - Bachelor of Business Administration</option>
            <option value="BCA">BCA - Bachelor of Computer Application</option>
		
            <option value="MBA">MBA - Master of Business Administration</option>
            <option value="MCA">MCA - Master of Computer Application</option>
			 
            
            </select>

        <!-- <label>State <span class="required">*</span></label> -->
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

        <input type="hidden" name="source" id="source" class="form-control" value="Sharda" required>
        <input type="hidden" name="form_name" id="form_name" class="form-control" value="Home">
        <input type="hidden" name="sub_source" id="sub_source" class="form-control" value="">
        <input type="hidden" name="utm_source" id="utm_source" class="form-control" value="">
        <input type="hidden" name="utm_campaign" id="utm_campaign" class="form-control" value="">
        <input type="hidden" name="utm_medium" id="utm_medium" class="form-control" value="">
        <input type="hidden" name="utm_term" id="utm_term" class="form-control" value="">
        <input type="hidden" name="page_url" id="page_url" class="form-control" value="">

        <center><button type="submit" name="submit" value="submit" class="sub-btn" id="button">Submit</button></center>
    </form>
</div>