<!DOCTYPE html>
<html b:css='false'>
<head>
<?php include "header.php"; ?>

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MNL5KPH3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php include "navbar.php"; ?>

<div id="banner">
   <div class="container">
      <div class="row">
         <div class="col-md-8">
            <div class="banner-content">
               <p>WELCOME TO DY PATIL</p>
               <h2 class="banner-heading">Creating New Opportunities</h2>
               <p>For Career Advancement<br>
                  Among Professionals
               </p>
               <br>
               <h3>MBA <span class="sp-text"> &nbsp;| &nbsp;</span>BBA</h3>
               <br>
				<button id="brochure-btn" onclick="openModal('brochureModal')"> Download Brochure <i class="fa fa-download"></i></button>
			
               <!--  <p class="banner-sub">Get <span class="sp-text"></span> Admission Open</p> -->
            </div>
         </div>
         <div class="col-md-4">
            <div id="desktop-form">
               <?php include "form.php"; ?>
            </div>
         </div>
      </div>
   </div>
</div>
<div id="approvals">
   <div class="container">
      <center>
      <h3>Recognition & <span class="sp-text">Accreditation</span></h3>
      <br>
      <div class="row">
         <div class="col-md-12">
            <div class="owl-carousel owl-theme">
               <div class="item">
                  <img src="assets\img\naac-a++.webp" loading="lazy" alt="Naac">
                  <p class="apr-slide-p"> NAAC Accredited A++ Grade With CGPA 3.40</p>
               </div>
               <div class="item">
                  <img src="assets\img\nirf.webp" loading="lazy" alt="nirf">
                  <p class="apr-slide-p"> Ranked 44th by NIRF in
                     The University category 2025
                  </p>
               </div>
               <div class="item">
                  <img src="assets\img\ugc.webp" loading="lazy" alt="ugc">
                  <p class="apr-slide-p"> Approved by University
                     Grants Commission of India
                  </p>
               </div>
               <div class="item">
                  <img src="assets\img\aicte.webp" loading="lazy" alt="aicte">
                  <p class="apr-slide-p">Accredited by
                     All India Council for Technical Education
                  </p>
               </div>
               <div class="item">
                  <img src="assets\img\wes.webp" loading="lazy" alt="wes">
                  <p class="apr-slide-p">Accredited by World
                     Education Services (International)
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div id="mobile-form">
   <?php
      include "form.php";
      ?>
</div>
<section id="programme" style="background-image:url(assets/img/LPU-imag-4.webp); background-size: cover;">
   <div class="container">
      <center>
      <h3>Online<span class="sp-text"> Programme</span></h3>
      <div class="row">
		  <div class="col-md-1"></div>
         <div class="col-md-5">
            <div class="card">
               <center><img src="assets\img\mba.webp" loading="lazy" width="100%"></center>
               <div class="card-content">
                  <table>
                     <tr>
                        <td>
                           <h4>MBA</h4>
                        </td>
                        <td><i class="fa fa-clock-o"></i> 2 Year</td>
                     </tr>
                  </table>
                  <table>
                     <tr>
                        <td>
                           <p class="f2">(Master of Business Administration)</p><br>
                           <p class="dy-text" style="font-size:14px; line-height:1.3;">DY Patil University Online MBA program is recognized for its academic excellence and industry-relevance Curriculum.</p>
                        </td>
                     </tr>
                  </table>
                  <hr>
                  <table>
                     <tr>
                        <td><a href="#specialisations"> <button type="button" class="btn1" >View Specialisation <i class="fa fa-caret-down"></i></button></a></td>
                        <td><button type="button" class="btn2" onclick="openModal('applyModal')">Apply Now</button></td>
                     </tr>
                  </table>
               </div>
            </div>
         </div>
       
         <div class="col-md-5">
            <div class="card">
               <center><img src="assets\img\bba.webp" loading="lazy" width="100%"></center>
               <div class="card-content">
                  <table>
                     <tr>
                        <td>
                           <h4>BBA</h4>
                        </td>
                        <td><i class="fa fa-clock-o"></i> 3 Year</td>
                     </tr>
                  </table>
                  <table>
                     <tr>
                        <td>
                           <p class="f2">(Bachelor of Business Administration)</p><br>
                           <p class="dy-text" style="font-size:14px; line-height:1.3;">
                               DY Patil University Online BBA program is recognized for its expert faculty, industry-relevant curriculum, flexibility, and academic excellence.
                           </p>
                        </td>
                     </tr>
                  </table>
                  <hr>
                  <table>
                     <tr>
                        <td><a href="#specialisations"> <button type="button" class="btn1" >View Specialisation <i class="fa fa-caret-down"></i></button></a></td>
                        <td><button type="button" class="btn2" onclick="openModal('applyModal')">Apply Now</button></td>
                     </tr>
                  </table>
               </div>
            </div>
         </div>
		  
		  <div class="col-md-1"></div>
      </div>
      <!--end of row-->
   </div>
   <!--end of container-->
</section>
<section id="specialisations" style="background-image:url(assets/img/about-image.webp); background-size: cover; background-repeat: no-repeat;">
   <div class="container">
      <div class="row">
         <div class="col-md-8">
            <h6>Dy Patil University</h6>
            <h2><span class="sp-text">Specialisation Offered</span></h2>
            <button href="#" id="OnMBA" onclick="mba()" class="tabButton tabButtonactive">Online MBA</button>
           <!-- <button href="#" id="OnEMBA" onclick="Emba()" class="tabButton tabButtonactive">Online EMBA</button>-->
            <button href="#" id="OnBBA" onclick="bba()" class="tabButton tabButtonactive">Online BBA</button>
            <div id="MBAtab">
               <br>
               <h2><span class="sp-text">MBA Specialisation -</span> Master of Business Administration</h2>
               <br>
               <table>
                  <tr>
                     <td>
                        <p>• MBA in Human Resource Management<br>
                           • MBA in Finance Management<br>
                           • MBA in IT Management<br>
                           • MBA in Project Management<br>
                           • MBA in Operations Management<br>
							• MBA in Hospital Administration and Health Care
Management

                        </p>
                     </td>
                     <td>
                        <p> 
                           • MBA in Machine Learning Management<br>
                           • MBA in Logistics, Materials & Supply chain Management<br>
                           • MBA in BlockChain Management<br>
                           • MBA in Digital Marketing Management<br>
							• MBA in AgriBusiness Management
                        </p>
                     </td>
                  </tr>
               </table>
            </div>
           <!-- <div id="EMBAtab">
               <br>
               <h4><span class="sp-text">EMBA Specializations - </span> Executive Master of Business Administration</h4>
               <br>
               <table>
                  <tr>
                     <td>
                        <p>
                           • Exe.MBA in Finance Management<br>
                           • Exe.MBA in Information Technology Manag.<br>
                           • Exe.MBA in Marketing Management<br>
                           <br>
                        </p>
                     </td>
                     <td>
                        <p> 
                           • Exe.MBA in Human Resource Management<br>
                           • Exe.MBA in Healthcare Management<br>
                           • Exe.MBA in Operation & Production Manag.
                        </p>
                     </td>
                  </tr>
               </table>
            </div>-->
            <div id="BBAtab">
               <br>
               <h2><span class="sp-text">BBA Specialisation -</span> Bachelor of Business Administration</h2>
               <br>
               <table>
                  <tr>
                     <td>
                        <p> 
                           • BBA (General)<br>
                           • BBA in Logistics & Supply Chain<br>
                           • BBA in Marketing Management<br>
                           • BBA in Event Management<br>
                           <br>
                        </p>
                     </td>
                     <td>
                        <p> 
                           • BBA in Human Resources<br>
                           • BBA in Retail Operations<br>
                           • BBA in Hospital Management<br>
                           • BBA in Investment Banking<br>
                        </p>
                     </td>
                  </tr>
               </table>
            </div>
         </div>
         <div class="col-md-4">
         </div>
      </div>
   </div>
</section>
<section id="features">
   <div class="container">
      <center>
         <h3>Unique Features of<span class="sp-text"> DYPU Online Learning</span></h3>
         <p>You deserve a job that supports your ambitions and gives you room for growth</p>
      </center>
      <br><br>
      <div class="row">
         <div class="col-md-4" id="feature-box">
            <img loading="lazy" src="assets\img\flexibility.webp" class="feature-img">
            <h6>Flexibility and Convenience</h6>
            <p> DY Patil Online Programs offer flexibility, self-paced learning, and convenient study schedules with 24/7 access.</p>
            <br>
         </div>
         <div class="col-md-4" id="feature-box">
            <img loading="lazy" src="assets\img\personilized-learning.webp" class="feature-img">
            <h6>Personalized Learning</h6>
            <p>DY Patil University offers access to digital resources, online libraries, virtual classrooms, and expert faculty support.</p>
            <br>
         </div>
         <div class="col-md-4" id="feature-box">
            <img loading="lazy" src="assets\img\innovative-teaching.webp" class="feature-img">
            <h6>Affordability</h6>
            <p>Online programs at D Y Patil University offer quality education at an affordable cost with financial aid options available for eligible students.</p>
            <br>
         </div>
         <div class="col-md-4" id="feature-box">
            <img loading="lazy" src="assets\img\interactive-larning.webp" class="feature-img">
            <h6>Interactive Learning Environment</h6>
            <p>DY Patil University programs are accredited, ensuring that they meet high academic standards and industry requirements.
            </p>
            <br>
         </div>
         <div class="col-md-4" id="feature-box">
            <img loading="lazy" src="assets\img\industry-collab.webp" class="feature-img">
            <h6>Accreditation</h6>
            <p>D Y Patil University's online programs are accredited, ensuring that they meet high academic standards and industry requirements.</p>
            <br>
         </div>
         <div class="col-md-4" id="feature-box">
            <img loading="lazy" src="assets\img\career-advancment.webp" class="feature-img">
            <h6>Career Advancement Opportunities</h6>
            <p> We provide career development services, industry-relevant curriculum, and opportunities for practical experience to advance career prospects.
            </p>
            <br>
         </div>
      </div>
   </div>
</section>
<div id="about" style="background-image:url(assets/img/about-bg.webp); background-repeat: no-repeat; background-size: cover; width:100%;">
   <div class="container">
      <div id="abt-box">
         <div class="row">
            <div class="col-md-5" id="abt-ct">
               <br>
               <h3>About DY Patil</h3>
               <p class="abt-p">D Y Patil University is a private university located in Pune, India. It was established in 2003 by the D Y Patil Group, a leading educational institution in India. The university is recognized by the UGC and is accredited by the NAAC A++ with the 44th NIRF Ranking in India. The university offers online BBA, MBA, and E-MBA Courses. The courses are designed to provide students with a high-quality education that prepares them for the challenges of the real world. D Y Patil Online has state-of-the-art facilities and infrastructure, including modern classrooms, laboratories, and research facilities. The university also collaborates with leading institutions and industries in India and abroad, providing students with opportunities for internships, research projects, and industry exposure. DYPU Online Business Programs are created to give students a solid understanding of business, setting them up for success in the worldwide business industry.
                  <br><br>
                  <button id="btn-abt" onclick="openModal('applyModal')">Get 100% Free Guidance</button>
            </div>
            <div class="col-md-7"></div>
         </div>
      </div>
   </div>
</div>
<div id="number">
   <div class="container">
      <div class="row">
         <div class="col-md-3" id="number-box">
            <h3>40+</h3>
            <p>years of Academic <br>Experience</p>
         </div>
         <div class="col-md-3" id="number-box">
            <h3>10K+</h3>
            <p>Enrolled<br>Student</p>
         </div>
         <div class="col-md-3" id="number-box">
            <h3>25+</h3>
            <p>Specialization
               <br>Offered
            </p>
         </div>
         <div class="col-md-3" id="number-box">
            <h3>150K</h3>
            <p>Strong Alumni Network<br>
               Across the Globe
            </p>
         </div>
      </div>
   </div>
</div>
<section id="partner">
   <div class="container">
      <center>
         <h3><span class="sp-text">Industry Internship</span></h3>
         <p>You deserve a job that supports your ambitions and gives you room for growth</p>
      </center>
      <br>
      <div class="row">
         <div class="col-md-3" id="partner-logo">
            <img src="assets\img\p1.webp" loading="lazy">
         </div>
         <div class="col-md-3" id="partner-logo">
            <img src="assets\img\p2.webp" loading="lazy">
         </div>
         <div class="col-md-3" id="partner-logo">
            <img src="assets\img\p3.webp" loading="lazy">
         </div>
         <div class="col-md-3" id="partner-logo">
            <img src="assets\img\p4.webp" loading="lazy">
         </div>
         <div class="col-md-3" id="partner-logo">
            <img src="assets\img\p5.webp" loading="lazy">
         </div>
         <div class="col-md-3" id="partner-logo">
            <img src="assets\img\p6.webp" loading="lazy">
         </div>
         <div class="col-md-3" id="partner-logo">
            <img src="assets\img\p7.webp" loading="lazy">
         </div>
         <div class="col-md-3" id="partner-logo">
            <img src="assets\img\p8.webp" loading="lazy">
         </div>
         <div class="col-md-3" id="partner-logo">
            <img src="assets\img\p9.webp" loading="lazy">
         </div>
         <div class="col-md-3" id="partner-logo">
            <img src="assets\img\p10.webp" loading="lazy">
         </div>
         <div class="col-md-3" id="partner-logo">
            <img src="assets\img\p11.webp" loading="lazy">
         </div>
      </div>
   </div>
</section>
<section id="accordition">
   <div class="container">
      <h3><span class="sp-text">FAQ</span></h3>
      <h4>Frequently Asked Question</h4>
      <hr>
      <button class="accordion" id="defaultOpen-1">Q1. Difference between offline and online degree?</button>
      <div class="panel">
         <p class="cont">Offline degrees involve attending classes in-person, while online degrees are delivered over the internet, providing more flexibility but less face-to-face interaction and access to campus resources.</p>
      </div>
      <button class="accordion">Q2.  Is online  degree valid for Jobs And Higher Studies?</button>
      <div class="panel">
         <p class="cont">Yes, online degrees are generally valid for jobs and higher studies, as long as they are earned from accredited institutions and meet the necessary academic requirements</p>
      </div>
      <button class="accordion">Q3. Is this degree equivalent to an off campus degree ?</button>
      <div class="panel">
         <p class="cont">An online degree is equivalent to an on-campus degree as long as it is earned from an accredited institution and meets the same academic standards as a traditional degree.</p>
      </div>
      <button class="accordion">Q4. Do we mention the word online in degree certificates ?</button>
      <div class="panel">
         <p class="cont">  No, degree certificates do not typically mention whether the degree was earned online or on-campus, as both types of degrees are considered equivalent as long as they are earned from accredited institutions.</p>
      </div>
      <button class="accordion">Q5. Do we provide 100% placements ?</button>
      <div class="panel">
         <p class="cont">It is difficult for any institution to guarantee 100% placements for their students. However, D Y Patil University offers career development services to assist students with job opportunities and placement prospects.</p>
      </div>
   </div>
</section>
<?php include "footer.php"; ?>
    <?php include "popup.php"; ?>
   
   
 <script>
 document.addEventListener("DOMContentLoaded", function () {
    // Initialize intl-tel-input for all phone fields
    const phoneInputs = document.querySelectorAll('input[type="tel"]');

    phoneInputs.forEach(input => {
        // Create an error message element
        const errorMessage = document.createElement("span");
        errorMessage.style.color = "red"; // Optional: Style the error message
        errorMessage.style.display = "none"; // Initially hidden
        input.parentNode.insertBefore(errorMessage, input); // Append error message above the input

        const iti = window.intlTelInput(input, {
            initialCountry: "in", // Default country: India
            autoPlaceholder: "polite", // Show a placeholder for the format
            separateDialCode: true, // Display country code separately
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js", // Utilities for validation
        });

        // Validate phone number on input (real-time validation)
        input.addEventListener("input", function () {
            const phoneValue = input.value.trim();

            // Check if phone number contains non-numeric characters or letters
            if (/[a-zA-Z]/.test(phoneValue)) {
                errorMessage.style.display = "block"; // Show error
                errorMessage.textContent = "Please enter a valid phone number (only numbers, no letters).";
                input.value = phoneValue.replace(/[a-zA-Z]/g, ''); // Remove letters
            } else {
                errorMessage.style.display = "none"; // Hide error message if valid input
            }
        });

        // Validate on blur (when user leaves the input field)
        input.addEventListener("blur", function () {
            const phoneValue = input.value.trim();
            if (phoneValue) {
                if (!iti.isValidNumber()) {
                    errorMessage.style.display = "block"; // Show error
                    errorMessage.textContent = "Invalid phone number.";
                    input.value = ''; // Clear invalid phone number
                    input.focus(); // Focus back to input field
                } else {
                    errorMessage.style.display = "none"; // Hide error message if valid number
                    // Optionally, you can log or use the full international number
                    console.log("Valid Number:", iti.getNumber());
                }
            }
        });

        // Handle form submission to include the full phone number
        input.closest('form').addEventListener('submit', function (e) {
            const phoneValue = input.value.trim();
            if (!iti.isValidNumber() || /[a-zA-Z]/.test(phoneValue)) {
                e.preventDefault(); // Prevent form submission if invalid
                alert("Please enter a valid phone number.");
                input.value = ''; // Clear the input
                input.focus(); // Focus back on the input field
            } else {
                // Replace input value with full international number
                input.value = iti.getNumber();
            }
        });
    });
});

</script>
   
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
<script>
   function mba(){
   document.getElementById("OnMBA").classList.add("tabButtonactive");
   document.getElementById("OnBBA").classList.remove("tabButtonactive");
   
   document.getElementById("MBAtab").style.display = "block"
   document.getElementById("BBAtab").style.display = "none"
   
   }
   
   
   function bba(){
   document.getElementById("OnBBA").classList.add("tabButtonactive");
   document.getElementById("OnMBA").classList.remove("tabButtonactive");
   
   document.getElementById("BBAtab").style.display = "block"
   document.getElementById("MBAtab").style.display = "none"
   }
   
   document.getElementById("OnMBA").click();
</script>
<script>
   function myFunction() {
   var x = document.getElementById("myTopnav");
         if (x.className === "topnav") {
           x.className += " responsive";
           document.getElementByclassName("icon").display = block;
       }
       else {
           x.className = "topnav";
   
       }
   }
   
</script>
<script>
   var acc = document.getElementsByClassName("accordion");
   
   for (let i = 0; i < acc.length; i++) {
     acc[i].addEventListener("click", function() {
       for (let j = 0; j < acc.length; j++) {
       acc[j].classList.remove("active");
         if(j!=i){
           acc[j].nextElementSibling.style.maxHeight = null;
         }
       }
       this.classList.add("active");
       var panel = this.nextElementSibling;
       if (panel.style.maxHeight){
         panel.style.maxHeight = null;
       } else {
         panel.style.maxHeight = panel.scrollHeight + "px";
       }
     });
   }
</script>
<script>for (var j = 0; j < acc.length; j++) {
   acc[j].nextElementSibling.style.maxHeight = null;
   }
   acc[0].click();
</script>



<script>
   $('.owl-carousel').owlCarousel({
   
   loop:true,
      autoplay: true,
    autoplayTimeout: 1000,
   margin:20,
   responsive:{
       0:{
           items:2
       },
       600:{
           items:3
       },
       1000:{
           items:4
       }
   }
   })
</script>
</body>
</html>