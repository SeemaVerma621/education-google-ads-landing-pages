<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry Form</title>
</head>
<body>


<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close" onclick="closePopup()" id="closeButton">&times;</span>
		<?php include "form.php"; ?>
    </div>
</div>

<div id="myModal2" class="modal">
    <!-- Modal content -->
        <div class="modal-content">
        <span class="close" onclick="closeBrochure()" id="closeButton2">&times;</span>
		<div id="form">
    
        <div class="frm-heading">
		<h5><strong><span class="blue">&nbsp;&nbsp;Download Brochure </span><br></strong></h5>
        <p>Academic Experts will assist you!
        </p>
		<hr>
        </div>

        <form action="mail.php" method="post" name="form" id="myForm1">
        <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Enter Your Name" required>
        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email" required>

        <input type="tel" name="phone" id="phone" pattern="[0-9]{10}" maxlength="10" class="form-control"
            placeholder="Enter 10-digit Mobile Number" required>
     <select name="course" class="form-control" id="course" required>
            <option value="" selected disabled>Select Your Course</option>
            <option value="BBA">BBA - Bachelor of Business Administration</option>
            <option value="BCA">BCA - Bachelor of Computer Application</option>
            <option value="MBA">MBA - Master of Business Administration</option>
            <option value="MCA">MCA - Master of Computer Application</option>  
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

        <input type="hidden" name="source" id="source" class="form-control" value="KL LP" required>
        <input type="hidden" name="form_name" id="form_name" class="form-control" value="Home">
        <input type="hidden" name="sub_source" id="sub_source" class="form-control" value="">
        <input type="hidden" name="utm_source" id="utm_source" class="form-control" value="">
        <input type="hidden" name="utm_campaign" id="utm_campaign" class="form-control" value="">
        <input type="hidden" name="utm_medium" id="utm_medium" class="form-control" value="">
        <input type="hidden" name="utm_term" id="utm_term" class="form-control" value="">
        <input type="hidden" name="page_url" id="page_url" class="form-control" value="">

        <center><button type="submit" name="submit" value="submit" class="sub-btn" id="buttonBrochure">Download Brochure</button></center>
    </form>
    </div>
    </div>
    </div>





<!-- <script>

       document.addEventListener('DOMContentLoaded', function() {
            document.getElementById("buttonBrochure").addEventListener('click', function(event) {
                const courseSelect = document.getElementById('course');
                const selectedCourse = courseSelect.value;

                console.log("Selected Course:", selectedCourse); // Debugging

                if (!selectedCourse) {
                    alert('Please select a course.');
                    event.preventDefault(); // Stop form submission if no course is selected
                    return;
                }

                const pdfMap = {
                    "BBA": "BBA.pdf",
                    "BA": "BA.pdf",
                    "BCOM": "BCOM.pdf",
                    "MBA": "MBA.pdf",
                    "MCA": "MCA.pdf",
                    "MCOM": "MCOM.pdf",
                    "MA": "MA.pdf"
                };

                const pdfUrl = pdfMap[selectedCourse] 
                    ? `https://kuk.onlinedegreecourses.co.in/assets/brochure/${pdfMap[selectedCourse]}`
                    : null;

                console.log("PDF URL:", pdfUrl); // Debugging

                if (pdfUrl) {
                    window.open(pdfUrl, "_blank");
                } else {
                    alert('Brochure not available for the selected course.');
                    event.preventDefault(); // Stop form submission if no PDF is available
                }
            });
        });

  
</script> -->





<script>
document.getElementById("buttonBrochure").addEventListener('click', function(event) {
    // Check if the form is valid
    if (document.getElementById("myForm1").checkValidity()) {
        // Open the brochure in a new tab
        let pdfUrl = 'https://kl.onlinedegreecourses.co.in/assets/images/KLU%20Brochure_compressed.pdf';
        window.open(pdfUrl, "_blank");
    } else {
        // Prevent the form submission if it's invalid
        event.preventDefault();
        // Show validation messages
        document.getElementById("myForm1").reportValidity();
    }
});
</script>


<script>
    function openPopup() {
        document.getElementById('myModal').style.display = 'block';
    }
    function closePopup() {
        document.getElementById('myModal').style.display = 'none';
    }

    function downloadBrochure() {
        document.getElementById('myModal2').style.display = 'block';
    }
    function closeBrochure() {
        document.getElementById('myModal2').style.display = 'none';
    }
</script>

</body>
</html>
