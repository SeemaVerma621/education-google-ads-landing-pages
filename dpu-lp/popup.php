<!-- ===========================
     Download Brochure Modal
=========================== -->
<div id="brochureModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal('brochureModal')">&times;</span>
    <div id="form">
      <h3 class="frm-heading">Download Brochure</h3>
      <form action="mail.php" method="post" id="brochure-form">
        <div>
          <input type="text" name="full_name" class="form-control" required placeholder="Enter your Name">
        </div>

        <div>
        
          <input type="email" name="email" class="form-control" required placeholder="Enter your Email">
        </div>

        <div>
         
          <input type="tel" name="phone" class="form-control" placeholder="Enter your phone number" required>
        </div>
        <div id="error-message">Invalid phone number</div>

        <div>
         
          <select name="course" class="form-control" required style="margin-top:10px;">
            <option value="" selected>Select Your Course</option>
            <option value="BBA">BBA</option>
            <option value="MBA">MBA</option>
          </select>
        </div>

        <div>
         
          <select name="state" class="form-control" required>
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
        </div>

        <!-- Hidden Inputs -->
		   <input type="hidden" name="form_name" id="form_name" class="form-control" value="Home">
		 <input type="hidden" name="source" id="source" class="form-control" value="DPU" required>
        <input type="hidden" name="sub_source" id="sub_source" class="form-control" value="">
        <input type="hidden" name="utm_source" id="utm_source" class="form-control" value="">
        <input type="hidden" name="utm_campaign" id="utm_campaign" class="form-control" value="">
        <input type="hidden" name="utm_medium" id="utm_medium" class="form-control" value="">
        <input type="hidden" name="utm_term" id="utm_term" class="form-control" value="">
        <input type="hidden" name="page_url" id="page_url" class="form-control" value="">
   

        <br>
        <center>
          <button type="submit" name="submit" class="sub-btn" id="button-brochure">Download Brochure</button>
        </center>
      </form>
    </div>
  </div>
</div>

<!-- ===========================
     Apply Now Modal
=========================== -->
<div id="applyModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal('applyModal')">&times;</span>
    <?php include "form.php"; ?>
  </div>
</div>

<!-- ===========================
     Open Buttons
=========================== -->
<!-- ===========================
     JavaScript
=========================== -->
<script>
  // Modal open/close
  function openModal(modalId) {
    document.getElementById(modalId).style.display = 'block';
  }

  function closeModal(modalId) {
    document.getElementById(modalId).style.display = 'none';
  }

  // Brochure form submission
  document.addEventListener('DOMContentLoaded', function () {
    const brochureForm = document.getElementById('brochure-form');
    const brochureButton = document.getElementById('button-brochure');

    if (brochureForm) {
      brochureForm.addEventListener('submit', function () {
        brochureButton.disabled = true;
        brochureButton.textContent = 'Processing...';

        // Open the brochure in a new tab after submission
        window.open(
          'https://dpu.distanceeducationschool.in/assets/img/DY-Patil-Online-University%20Brochure_compressed.pdf',
          '_blank'
        );
      });
    }
  });
</script>

<!-- Optional intl-tel-input utils -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"></script>