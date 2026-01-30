<div id="form">

                <h3 class="frm-heading">Get A Free Counseling</h3>
            <center> <p style="margin-top: -8px;"> in India's Finest University</p></center> 
                <hr>
     <form action="mail.php" method="post" name="form" id="enquiry-form">
                
        <input type="text" name="full_name" id="full_name" placeholder="Enter Your Name" class="form-control" required>

        <input type="email" name="email" id="email" placeholder="Enter Your Email" class="form-control" required>


       <input type="tel" name="phone" value="" pattern="[0-9]{10}" id="phone" placeholder="Enter Mobile No." class="form-control" required>

      
             <select name="course" class="form-control" id="ddl" onchange="configureDropDownLists(this,document.getElementById('ddl2'))" required>
                      <option value="" selected hidden>Select Your Course</option>
                    <option value="BBA">BBA</option>
                    <option value="BCOM">BCOM</option>
                    <option value="MBA">MBA</option>
                   
                    <option value="MCOM">MCOM</option>
                    <option value="MCA">MCA</option>
				 <option value="MA">MA</option>
                    </select>

                    <select id="ddl2" class="form-control" name="specialization" placeholder="Select Your Specialization" style="display:none;" >
                     <option value="" disabled selected hidden>Select your Specialization</option>
                        
                      
                    </select>

            <select name="state" class="form-control" id="state" required>
                      <option value="" selected hidden>Select Your State</option>
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
		 <input type="hidden" name="form_name" id="form_name" class="form-control" value="Home">
                  
    <input type="hidden" name="source" id="source" placeholder="Enter your source" class="form-control" value="Jain LP" required>
        <input type="hidden" name="sub_source" id="sub_source" class="form-control" value="">
        <input type="hidden" name="utm_source" id="utm_source" class="form-control" value="">
        <input type="hidden" name="utm_campaign" id="utm_campaign" class="form-control" value="">
        <input type="hidden" name="utm_medium" id="utm_medium" class="form-control" value="">
        <input type="hidden" name="utm_term" id="utm_term" class="form-control" value="">
        <input type="hidden" name="page_url" id="page_url" class="form-control" value="">
		 
        <center><button type="submit" name="submit" value="Send" class="sub-btn">Submit</button> </center>    
                 </form>
                  </div>
             