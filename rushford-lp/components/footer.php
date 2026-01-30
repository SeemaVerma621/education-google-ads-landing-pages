
<?php include 'popup.php'; ?>
<div class="multicolor-border"></div>
    <div id="footer">
    <div class="container">
    <div class="footer-section">
            <div class="footer-column">
                <img src="assets/img/rusford-white.webp" alt="logo-img" width="50%"/>
                  <h2>Have Query?<br> Need Guidance</h2>
<button class="enquireNowBtn">Enquire Now</button>
              
            </div>
            <div class="footer-column">
                <h2>Online DBA Specialization</h2>
               
				<p>DBA in General<br>
            DBA in International Business<br>
            DBA in Healthcare Management<br>
            DBA in Human Resource Management<br>
            DBA in Supply Chain Management<br>
            DBA in Finance<br>
            DBA in Data Science<br>
            DBA in Marketing<br>
            DBA in Business Analytics</p>
            </div>
            <div class="footer-column">
                <h2>QUICK LINKS</h2>
				<p><a href="#about" style="text-decoration:none;">About</a></p>
				<p><a href="#benefits" style="text-decoration:none;">Advantages</a></p>
				<p><a href="#faqs" style="text-decoration:none;">FAQ</a></p>
                <br/>
            </div> 
        </div>
      
        
    
   
     
    </div>
</div>


<div id="footer-bottom-bar">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
            <!--<p>Home | About | Courses | FAQ</p>-->
            <center><hr/></center>
            <p>&copy; <?php echo date("Y"); ?>  This information is provided by SODE Counselling Services LLP. All university names, logos, and trademarks mentioned are used for informational purposes only. We are not a university or an admission authority. <br><span class="disclaimer_popup" onclick="disclaimerModal()" style="color:#8DB3F0; font-size:14px; cursor:pointer; font-weight:bold; text-decoration:underline;">Disclaimer</span></p>
            </div>
        </div>
    </div>
</div>

<script>
//     start on scroll popup

  window.addEventListener('scroll', function () {
    const scrollableHeight = document.documentElement.scrollHeight - window.innerHeight;
    const scrolledPercentage = (window.scrollY / scrollableHeight) * 100;

    if (scrolledPercentage >= 50) {
      const modal = document.getElementById('myModal');
      modal.style.display = 'flex';
      window.removeEventListener('scroll', arguments.callee);
    }
  });

  document.getElementById('closeButton').addEventListener('click', function () {
    const modal = document.getElementById('myModal');
    modal.style.display = 'none';
  });
    </script>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


        <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        // Function to get the value of a URL parameter
        function getQueryParam(param) {
            var searchParams = new URLSearchParams(window.location.search);
            return searchParams.get(param) || ''; // Return an empty string if the parameter is not found
        }

        // Get all forms on the page
        var forms = document.querySelectorAll('form');

        // Loop through each form to set the values
        forms.forEach(function(form) {
            form.querySelector('#sub_source').value = getQueryParam('sub_source');
            form.querySelector('#utm_source').value = getQueryParam('utm_source');
            form.querySelector('#utm_campaign').value = getQueryParam('utm_campaign');
            form.querySelector('#utm_medium').value = getQueryParam('utm_medium');
            form.querySelector('#utm_term').value = getQueryParam('utm_term');

            // Get the current URL
            const currentURL = window.location.href;

            // Remove UTM parameters and fragments from the URL
            const urlWithoutParams = currentURL.split(/[?#]/)[0];

            // Set the extracted URL to the input field
            form.querySelector('#page_url').value = urlWithoutParams;
        });
    });
</script>