<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content1">
        <span class="close1" onclick="closePopup()" id="closeButton">&times;</span>
        <?php include "form.php"; ?>
    </div>
</div>

<div id="downloadbrochuremodal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closedownloadbrochure()" id="closeButton">&times;</span>
        <div class="splz-form-container">
            <div id="form">
                
                <br>
                <form action="mail.php" method="post" name="form" id="enquiry-form">
                <div class="frm-heading" style="border-left: 2px solid #ff6600;">
                    <h5><strong> Download Brochure</strong></h5>
                </div>
                    <div>
                        <label>Name<span class="required">*</span></label>
                        <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Enter Your Name" required>
                    </div>

                    <div>
                        <label>Email ID <span class="required">*</span></label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email" required>
                    </div>

                    <div>
                        <label>Phone <span class="required">*</span></label>
                        <input type="tel" name="phone" id="phone" class="form-control" placeholder="Enter Mobile Number" required>
                    </div>

                    <div>
                        <label>Course <span class="required">*</span></label>
                        <select name="course" class="form-control" id="courseSelect" required>
                            <option value="" selected disabled>Select Your Course</option>
                           <option value="BBA">BBA - Bachelor of Business Administration</option>
			<option value="BCA">BCA - Bachelor of Computer Application</option>
			 <option value="BCOM">BCOM - Bachelor of Commerce</option>  
            <option value="MBA">MBA - Master of Business Administration</option>
			<option value="MCA">MCA - Master of Computer Application</option>
			<option value="MA">MA - Master of Arts</option>
			<option value="DIPLOMA">Diploma in Professional Arabic (DPA)</option>
			<option value="DIPLOMA">Diploma in Bakery and Confectionery Technology (DBCT)</option>
			<option value="DIPLOMA">Advanced Diploma in Drug Regulatory Affairs (ADDRA)</option>
			<option value="DIPLOMA">Advanced Diploma in Dietetics and Therapeutics Nutrition (ADDTN)</option>
			<option value="DIPLOMA">Advanced Diploma in Medical Record Technology (ADMRT)</option>
			<option value="CERTIFICATE">Certificate - Modern Persian Language Course CMPL</option>
                        </select>
                    </div>

                    <div>
                        <label>State <span class="required">*</span></label>
                        <select name="state" class="form-control" id="state" required>
                            <option value="" hidden>Select Your State</option>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                            <option value="Assam">Assam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Chhattisgarh">Chhattisgarh</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Goa">Goa</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Manipur">Manipur</option>
                            <option value="Meghalaya">Meghalaya</option>
                            <option value="Mizoram">Mizoram</option>
                            <option value="Nagaland">Nagaland</option>
                            <option value="Odisha">Odisha</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Telangana">Telangana</option>
                            <option value="Tripura">Tripura</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="Uttarakhand">Uttarakhand</option>
                            <option value="West Bengal">West Bengal</option>
                        </select>
                    </div>

                    <input type="hidden" name="source" id="source" value="Jamia LP">
                    <input type="hidden" name="form_name" id="form_name" value="Download Brochure">
                    <input type="hidden" name="sub_source" id="sub_source" value="">
                    <input type="hidden" name="utm_source" id="utm_source" value="">
                    <input type="hidden" name="utm_campaign" id="utm_campaign" value="">
                    <input type="hidden" name="utm_medium" id="utm_medium" value="">
                    <input type="hidden" name="utm_term" id="utm_term" value="">
                    <input type="hidden" name="page_url" id="page_url" value="">
                    <br>
                    <center>
                        <button type="submit" name="submit" value="send" class="sub-btn" id="downloadbrochurebtn">Submit</button>
                    </center>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Popup open/close functionality
    function openPopup() {
        document.getElementById('myModal').style.display = 'block';
    }

    function closePopup() {
        document.getElementById('myModal').style.display = 'none';
    }

    function downloadbrochure() {
        document.getElementById('downloadbrochuremodal').style.display = 'block';
    }

    function closedownloadbrochure() {
        document.getElementById('downloadbrochuremodal').style.display = 'none';
    }

    // Handle form submission
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.querySelector('#myModal form');
        const submitButton = form.querySelector('.sub-btn');

        form.addEventListener('submit', function (event) {
            submitButton.disabled = true;
            submitButton.textContent = 'Processing...';
        });
    });

</script>
<script>
    // Handle form submission
    document.addEventListener('DOMContentLoaded', function () {
        const submitBtn = document.getElementById('downloadbrochurebtn');
        const courseSelect = document.getElementById('courseSelect');
        const courseForm = document.getElementById('enquiry-form');

        submitBtn.addEventListener('click', function (event) {
            const selectedCourse = courseSelect.value;

            // Validate if the course is selected
            if (!selectedCourse) {
                alert('Please select a course before submitting the form.');
                event.preventDefault(); // Prevent form submission
                return;
            }

            // Open the corresponding PDF
            const pdfFileName = `images/brochure/jamia_${selectedCourse}.pdf`;
            window.open(pdfFileName, '_blank');

            // Form submits to mail.php automatically because there is no `event.preventDefault()` here
        });

        // Ensure the form submits to mail.php
        courseForm.setAttribute('action', 'mail.php');
    });
</script>

