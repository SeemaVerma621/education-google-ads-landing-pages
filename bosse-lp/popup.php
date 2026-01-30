<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Enquiry Form</title>
	</head>
	<body>

		<div id="myModalplacementreport" class="modal">
			<div class="modal-content">
				<span class="close" onclick="closeplacementreport()" id="closeButton">&times;</span>
				<div class="splz-form-container">
					<div id="form">
						<div class="frm-heading" style="border-left: 2px solid #ff6600;">
							<h5><strong><span class="sp-text">&nbsp;&nbsp;Download Placement Report </span><br></strong></h5>
						</div><br>

						<form action="mail.php" method="post" name="form" id="enquiry-form">

							<label>Name<span class="required">*</span></label>
							<input type="text" name="full_name" id="full_name" class="form-control" placeholder="Enter Your Name" required>

							<label>Email ID <span class="required">*</span></label>
							<input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email" required>

							<label>Phone <span class="required">*</span></label>
							<input type="tel" name="phone" id="phone" pattern="[0-9]{10}" maxlength="10" class="form-control" placeholder="Enter 10-digit Mobile Number" required>

							<label style="display:none;">Course</label>
							<input type="hidden" name="course" id="course" class="form-control" value="MBA"required>

							<label>MBA Specialization <span class="required">*</span></label>
							<select name="specialization" class="form-control" id="specialization" required>
								<option value="" selected disabled>Select Your Course</option>
								<option value="Digital Marketing Management">Digital Marketing Management</option>
								<option value="Finance management">Finance management</option>
								<option value="Information technology management">Information technology management</option>
								<option value="Human resource management">Human resource management</option>
								<option value="Marketing management">Marketing management</option>
								<option value="Operation and production management">Operation and production management</option>
								<option value="Supply chain management">Supply chain management</option>
								<option value="Healthcare management">Healthcare management</option>
								<option value="Project leadership management">Project leadership management</option>
								<option value="Retail management">Retail management</option>
								<option value="Banking and Finance Management">Banking and Finance Management</option>
								<option value="Business management">Business management</option>
								<option value="Operations management">Operations management</option>
								<option value="International trade management">International trade management</option>
								<option value="International Business">International Business</option>
								<option value="Fashion Designing">Fashion Designing</option>
								<option value="Business Analytics">Business Analytics</option>
								<option value="Analytics & data science">Analytics & data science</option>
								<option value="General management">General management</option>
								<option value="Human resource management and finance">Human resource management and finance</option>
								<option value="International finance">International finance</option>
								<option value="Logistics & supply chain management">Logistics & supply chain management</option>
								<option value="Marketing and human resource management">Marketing and human resource management</option>
								<option value="Project management">Project management</option>
							</select>

							<label>State <span class="required">*</span></label>
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

							<input type="hidden" name="source" id="source" class="form-control" value="BOSSE" required>
							<input type="hidden" name="form_name" id="form_name" class="form-control" value="Popup Form">
							<input type="hidden" name="sub_source" id="sub_source" class="form-control" value="">
							<input type="hidden" name="utm_source" id="utm_source" class="form-control" value="">
							<input type="hidden" name="utm_campaign" id="utm_campaign" class="form-control" value="">
							<input type="hidden" name="utm_medium" id="utm_medium" class="form-control" value="">
							<input type="hidden" name="utm_term" id="utm_term" class="form-control" value="">
							<input type="hidden" name="page_url" id="page_url" class="form-control" value="">
							<br>

							<center>
								<button type="submit" name="submit" value="send" class="sub-btn" id="downloadplacementreport">Submit</button>
							</center>   
						</form></div> </div> </div></div>



		<div id="myModal" class="modal">
			<!-- Modal content -->
			<div class="modal-content">
				<span class="close" onclick="closePopup()" id="closeButton">&times;</span>
				<?php include "form.php"; ?>
			</div>
		</div>

		<script>
			function openPopup() {
				document.getElementById('myModal').style.display = 'block';
			}
			function closePopup() {
				document.getElementById('myModal').style.display = 'none';
			}
		</script>



		<script>
			function openplacementreport() {
				document.getElementById('myModalplacementreport').style.display = 'block';
			}
			function closeplacementreport() {
				document.getElementById('myModalplacementreport').style.display = 'none';
			}

			document.getElementById('downloadplacementreport').addEventListener('click', function() {
				var pdfURL = 'https://mba.onlinedegreecourses.co.in/images/Placement-report-with-linking_compressed.pdf';
				window.open(pdfURL, '_blank');
			});
		</script>


	</body>
</html>
