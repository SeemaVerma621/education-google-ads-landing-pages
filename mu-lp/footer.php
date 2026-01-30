<!-- Start Footer Section -->

<div class="doubt">
<div class="container">
  <div class="row">
            <div class="col-md-6">
            <h2>Need Guidance? </h2>
        <p>Get a Free Expert Consultation Right Away. </p></div>
   
        <div class="col-md-6">
          <center>  <button class="ftr-btn" onclick='openPopup()'>Talk to Experts</button></center></div>
        </div> 
    <!-- <div class="row">
       <div class="footer-enquiry">
       <h2>Have Doubt? <br>Get Free Career Counseling Now</h2> <buttton class="ftr-btn" onclick='openPopup()'>Enquire Now</button>
       </div>
    </div> -->
</div>
</div>
<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="assets/images/mangalayatan-white-logo-for-footer.webp" width="100%">
            <p> Mangalayatan University Campus,
 Aligarh-Mathura Highway, Beswan,
 Aligarh, Uttar Pradesh, India
</p>
        </div>
   
        <div class="col-md-4">
            <h2>TOP COURSES</h2>
                    <p>Master of Business Administration (MBA)</p>
                    <p>Master of Computer Application (MCA)</p>
                    <p>Master of Commerce (MCOM)</p>
                    <p>Master of Arts (MA)</p>
                    <p>Master of Science (MSC)</p>
                    
                    <p> Bachelor of Computer Application (BBA)</p>
                    <p>Bachelor of Computer Application (BCA)</p>
                    <p> Bachelor of Commerce (BCOM)</p>
                    <p> Bachelor of Arts (BA)</p>
                    <p>Bachelor of Science (BSC)</p>
        </div>
      

        <div class="col-md-4">
            <h2>RECOGNITION & APPROVALS</h2>
                    <p>University Grant commision (UGC)</p>
                    <p>National Assessment Accreditation Counci (NAAC A+)</p>
                    <p>Association of Indian Universities (AIU) 
                    </p>
                    <p>All India Council for Technical Education (AICTE)</p>
        </div>
    </div>
<hr>
    <div class="row">
            <div class="col-md-12" id="footer-bottom-bar">
               <p>This information is provided by SODE Counselling Services LLP. All university names, logos, and trademarks mentioned are used for informational purposes only. We are not a university or an admission authority. <br> <span class="disclaimer_popup" onclick="disclaimerModal()" style="color:#F97316; font-size:14px; cursor:pointer; font-weight:bold; text-decoration:underline;">Disclaimer</span></p>
            </div>
        </div>
    </div>
</div>
<!-- end footer section -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>

<script>
$(".slider").owlCarousel({
    items: 5, // Number of items to show
    loop: true,
    autoplay: true, // Autoplay
    autoplayTimeout: 2000, // Autoplay interval in milliseconds
    dots: true,
    navigation: true, // Enable navigation
    pagination: true,
    margin: 0, // Show dot navigation
    // Other configuration options
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 2
        },
        1000: {
            items: 5
        }
    },
    autoplayHoverPause: true
});
</script>
<script>
	
const items = document.querySelectorAll('.accordion button');

function toggleAccordion() {
    const itemToggle = this.getAttribute('aria-expanded');

    for (i = 0; i < items.length; i++) {
        items[i].setAttribute('aria-expanded', 'false');
    }

    if (itemToggle == 'false') {
        this.setAttribute('aria-expanded', 'true');
    }
}

items.forEach((item) => item.addEventListener('click', toggleAccordion));

</script>

</body>

</html>