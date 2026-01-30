<!DOCTYPE html>
<html>
<head>
<?php include "header.php"; ?>
</head>
<body onload="document.getElementById('PG').click();">
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P586847H"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <nav class='nav'>
    	<input type='checkbox' id='nav-check'> 
    	<div class='nav-header'>
    		<div class='nav-title'> <a href="https://cu.distanceeducationschool.in/"> <img src="assets/img/cu-online.png" class="logo"></a> </div>
    	</div>
    	<div class='nav-btn'> <label for='nav-check'> <span></span> <span></span> <span></span> </label> </div>
    	<ul class='nav-list'>
    		<li><a href="https://cu.distanceeducationschool.in/">Home</a></li>
    		<li><a href='#programs'>Programs</a></li>
    		<li><a href='#approvals'>Approvals</a></li>
    		<li><a href='#footer'>Contact</a></li>
    	</ul>
    </nav>
    <section id='topsec'>
    	<div class='container'>
    		<div class='row'>
    			<div class='col-md-5'>
    				<div class='top-cnt'>
						<p>Discover. Learn. Empower</p>
    					<h2>Online Degree Courses<span class='black'> at Chandigarh University</span></h2>
    			
    					<p>Chandigarh University Online, Approved by UGC, 27th Ranked in NIRF, and NAAC A+, is a Leading University in India, offering 8+ Online Degree Programs in 16+ Specializations.

</p>
    					<div class='top-apr' style='display: flex; margin-top:20px;'> <img src='assets/img/merge-approvals-nirf.png' width='90%'> </div>
    					<br><button class='top-btn' onclick="downloadbrochure()">Download Brochure <i class="fa fa-download"></i></button>
    				</div>
    			</div>
    			<div class='col-md-3'> </div>
    			<div class='col-md-4'>
    			  <div class="d-sm-block d-lg-none">
                    <img src="assets/img/modelcu.png" alt="model" class="model-img" width="100%">
</div>
    				<?php include "form.php"; ?>
    			
    			</div>
    		</div>
    	</div>
    </section>
    <section id='achievements'>
    	<div class='container'>
    		<div class='row'>
    			<div class='col-md-3' id='achieve-box'>
    				<h3>2400+</h3>
    				<p>Patents Filed by Students & Faculty</p>
    			</div>
    			<div class='col-md-3' id='achieve-box'>
    				<h3>300+</h3>
    				<p>International Hiring Partners with MNCs & Top Companies</p>
    			</div>
    			<div class='col-md-3' id='achieve-box'>
    				<h3>16+</h3>
    				<p>Specializations in MBA & Other Degree Programs</p>
    			</div>
    			<div class='col-md-3' id='achieve-box'>
    				<h3>24x7</h3>
    				<p>Support & Assistance with Top Level Faculty</p>
    			</div>
    		</div>
    	</div>
    </section>
    <section id='programs'>
    	<div class='container'>
    		<div class='row'>
    			<div class='col-md-12'>
    				<h3><strong>CU Online Degree Programs</strong></h3>
    				<div class='tabbtn'> <button href='#' id='PG' class='tabbutton TabButtonActive' onclick='pg()'>Post Graduate</button> <button href='#' id='UG' class='tabbutton TabButtonActive' onclick='ug()'>Under Graduate</button> </div>
    			</div>
    			<br>
    			<div class='dataresult'>
    				<div id='UGTAB'>
    					<div class='row'>
    						<div class='col-md-4'>
    							<div class='course-box'>
    								<img src='assets/img/bba-cu.png' class='cr-img'>
    								<div class='cr-desc'>
    									<h4>BBA</h4>
    									<p>Bachelor of Business Administration</p><hr>
										<p>Start your management journey with the CU Online BBA program in Marketing, HR, Finance, and more.</p>

										<p> <i class="fa fa-clock-o"></i><b> Duration : </b>3 Years</p>
    									
										<button type='button' class='course-btn' onclick="downloadbrochure()">Download Brochure <i class="fa fa-download"></i></button>
    								</div>
    							</div>
    						</div>
    						<div class='col-md-4'> 
								<div class='course-box'> 
									<img src='assets/img/bca-cu.png' class='cr-img'>
							 <div class='cr-desc'>
    									<h4>BCA</h4>
    									<p>Bachelor of Computer Application</p><hr>
										<p>Build strong IT and coding skills with Chandigarh University’s flexible online BCA program.</p>
											<p> <i class="fa fa-clock-o"></i><b> Duration : </b>3 Years</p>
    									<button type='button' class='course-btn' onclick="downloadbrochure()">Download Brochure <i class="fa fa-download"></i></button>
    								</div>
							</div></div>
    						<div class='col-md-4'>
    							<div class='course-box'>
    								<img src='assets/img/bjmc-cu.png' class='cr-img'> 
    								<div class='cr-desc'>
    									<h4>BJMC</h4>
    									<p>Journalism & Mass Communication</p><hr>
										<p>Explore digital media, reporting, and communication skills with CU Online’s BJMC course.</p>
											<p> <i class="fa fa-clock-o"></i><b> Duration : </b>3 Years</p>
    									<button type='button' class='course-btn' onclick="downloadbrochure()">Download Brochure <i class="fa fa-download"></i></button>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    				<div id='PGTAB'>
    					<div class='row'>
    						<div class='col-md-4'>
    							<div class='course-box'>
    								<img src='assets/img/mba-cu.png' class='cr-img'> 
    								<div class='cr-desc'>
    									<h4>MBA</h4>
    									<p>Master of Business Administration</p><hr>
										<p>Earn your Online MBA degree from Chandigarh University and specialize in fields like HR, Finance, or Marketing.</p>
											<p> <i class="fa fa-clock-o"></i><b> Duration : </b>2 Years</p>
    									<button type='button' class='course-btn' onclick="downloadbrochure()">Download Brochure <i class="fa fa-download"></i></button>
    								</div>
    							</div>
    						</div>
    						<div class='col-md-4'>
    							<div class='course-box'>
    								<img src='assets/img/mca-cu.png' class='cr-img'> 
    								<div class='cr-desc'>
    									<h4>MCA</h4>
    									<p>Master of Computer Application</p><hr>
										<p>Advance your tech career with CU Online MCA focused on programming, AI, and data systems.</p>
										<p> <i class="fa fa-clock-o"></i><b> Duration : </b>2 Years</p>
    									<button type='button' class='course-btn' onclick="downloadbrochure()">Download Brochure <i class="fa fa-download"></i></button>
    								</div>
    							</div>
    						</div>
    						<div class='col-md-4'>
    							<div class='course-box'>
    								<img src='assets/img/mjmc-cu.png' class='cr-img'> 
    								<div class='cr-desc'>
    									<h4>MJMC</h4>
    									<p>Journalism & Mass Communication</p><hr>
										<p>Learn media, journalism, and digital storytelling with Chandigarh University Online MJMC program.</p>
									<p> <i class="fa fa-clock-o"></i><b> Duration : </b>2 Years</p>
    									<button type='button' class='course-btn' onclick="downloadbrochure()">Download Brochure <i class="fa fa-download"></i></button>
    								</div>
    							</div>
    						</div>
    					</div>
    					<div class='row'>
    						<div class='col-md-4'>
    							<div class='course-box'>
    								<img src='assets/img/msc-cu.png' class='cr-img'> 
    								<div class='cr-desc'>
    									<h4>MSC</h4>
    									<p>Master of Science</p><hr>
										<p>Deepen your scientific knowledge through CU Online flexible and career-focused MSc courses.</p>
										<p> <i class="fa fa-clock-o"></i><b> Duration : </b>2 Years</p>
    									<button type='button' class='course-btn' onclick="downloadbrochure()">Download Brochure <i class="fa fa-download"></i></button>
    								</div>
    							</div>
    						</div>
    						<div class='col-md-4'>
    							<div class='course-box'>
    								<img src='assets/img/ma-cu.png' class='cr-img'> 
    								<div class='cr-desc'>
    									<h4>MA</h4>
    									<p>Master of Arts</p><hr>
										<p>Explore the humanities with CU Online MA programs in English, Psychology, and more.</p>
									<p> <i class="fa fa-clock-o"></i><b> Duration : </b>2 Years</p>
    									<button type='button' class='course-btn' onclick="downloadbrochure()">Download Brochure <i class="fa fa-download"></i></button>
    								</div>
    							</div>
    						</div>
    						<!--<div class='col-md-4'>-->
    						<!--	<div class='course-box'>-->
    						<!--		<img src='assets/img/mcom-cu.png' class='cr-img'> -->
    						<!--		<div class='cr-desc'>-->
    						<!--			<h4>MCOM</h4>-->
    						<!--			<p>Master of Commerce</p>-->
    						<!--			<hr>-->
    						<!--			<table style='width: 100%;'>-->
    						<!--				<tr>-->
    						<!--					<td class='thh'>Eligibilty : </td>-->
    						<!--					<td class='tdd'>Graduation</td>-->
    						<!--				</tr>-->
    						<!--				<tr>-->
    						<!--					<td class='thh'>Duration : </td>-->
    						<!--					<td class='tdd'> 2 Years</td>-->
    						<!--				</tr>-->
    						<!--				<tr>-->
    						<!--					<td class='thh'>Fee Structure :</td>-->
    						<!--					<td class='tdd'>₹22,750/Sem</td>-->
    						<!--				</tr>-->
    						<!--			</table>-->
    						<!--			<button type='button' class='course-btn' onclick="downloadbrochure()">Download Brochure <i class="fa fa-download"></i></button>-->
    						<!--		</div>-->
    						<!--	</div>-->
    						<!--</div>-->
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <section id='whychoose'>
    	<div class='container'>
    		<div class='row'>
    			<center>
    				<h3><strong>Why Choose Chandigarh University Online?</strong></h3>
					<p>Chandigarh University Online is a UGC approved institution offering flexible, industry-ready programs to learners across India and beyond.</p>
    			</center>
    			<div class='col-md-6'>
    				<div class='box-choose'>
    					<img src='assets/img/afforadable.png' class='choose-image'> 
    					<h5>Affordable Fee Structure</h5>
    					<p>Chandigarh University Online offers an affordable fee structure, ensuring access to quality education. CU provides cost-effective learning for all their courses.</p>
    				</div>
    			</div>
    			<div class='col-md-6'>
    				<div class='box-choose'>
    					<img src='assets/img/global.png' class='choose-image'> 
    					<h5>Globally Accepted Curriculum</h5>
    					<p>CU offer a globally accepted course curriculum that aligns with international standards. All courses are designed to meet current industry demands.

</p>
    				</div>
    			</div>
    			<div class='col-md-6'>
    				<div class='box-choose2'>
    					<img src='assets/img/support.png' class='choose-image'> 
    					<h5>24x7 Available Support Team</h5>
    					<p>CU Online offers 24x7 student support services, providing timely assistance and guidance to students across CU online programs.
</p>
    				</div>
    			</div>
    			<div class='col-md-6'>
    				<div class='box-choose2'>
    					<img src='assets/img/placement.png' class='choose-image'> 
    					<h5>Placement Support Service</h5>
    					<p>CU Online advanced Learning Management System (LMS) enhances the online learning experience and is integrated across distance learning programs.
</p>
    				</div>
    			</div>
    			<div class='col-md-6'>
    				<div class='box-choose'>
    					<img src='assets/img/lms.png' class='choose-image'> 
    					<h5>Learning Management System</h5>
    					<p>CU Online advanced Learning Management System enhances the online learning experience and is integrated across distance learning programs.</p>
    				</div>
    			</div>
    			<div class='col-md-6'>
    				<div class='box-choose'>
    					<img src='assets/img/self.png' class='choose-image'> 
    					<h5>Self-Paced Learning Study</h5>
    					<p>Chandigarh University distance education offers a flexible approach that empowers students to manage their own schedules and pace.</p>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <section id='about'>
    	<div class='container'>
    		<div class='row'>
    			<div class='col-md-6'>
    				<div class='abt-cnt'>
    					<h4>Who we are</h4>
    					<h3>Chandigarh University</h3>
    					
    					<p>Chandigarh University Online , located in Chandigarh, India, is a prestigious educational institution known for its academic excellence and industry-relevant curriculum. Recognized by the University Grants Commission (UGC) and accredited with an NAAC A+ grade, the university is a leader in higher education.<br><br>
These accreditations highlight Chandigarh University’s commitment to maintaining high academic standards and delivering quality education. The university offers a diverse range of Chandigarh University courses across disciplines such as engineering, management, computer applications, arts, and sciences. It also extends flexible learning through Chandigarh University online courses and CU distance education, making higher education accessible to students across India.
					</p>
    				</div>
    				<a href='#form'><button type='enroll' class='enroll-btn'> Enroll Now</button></a> 
    			</div>
    			<div class='col-md-6'> <br><img src='assets/img/CU-about-image1.png' style='width: 100%;'> </div>
    		</div>
    	</div>
    </section>
    <section id='approvals'>
    	<div class='container'>
    		<div class='row'>
    			<div class='col-md-12'>
    				<!-- <p class='apr-hp'>To Make Education More Valueable we have</p> -->
    			</div>
    			<center class="c15">
    				<h2>Awards & <span class='black'>Recognition</span></h2>
    				<br>
    			</center>
    		</div>
    		<div class='row'>
    			<div class='col-md-3'>
    				<div class='box-apr'>
    					<img src='assets/img/naac-approvals.png' class='apr-img'> 
    					<p>National Assessment and Accreditation Council (NAAC A+)</p>
    				</div>
    			</div>
    			<div class='col-md-3'>
    				<div class='box-apr'>
    					<img src='assets/img/ugc-approvals.png' class='apr-img'> 
    					<p>University Grants Commission (UGC)</p>
    				</div>
    			</div>
    			<div class='col-md-3'>
    				<div class='box-apr'>
    					<img src='assets/img/nirf-approvals.png' class='apr-img'> 
    					<p>National Institutional Ranking Framework (NIRF)</p>
    				</div>
    			</div>
    			<div class='col-md-3'>
    				<div class='box-apr'>
    					<img src='assets/img/WES-approvals.png' class='apr-img'> 
    					<p>World Education Services <br>(WES)</p>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <section id='certificate'>
    	<div class='container'>
    		<div class='row'>
    			<div class='col-md-6'><br><br><img src='assets/img/CU-sample-degree.png' style='width: 100%;'> </div>
    			<div class='col-md-6'>
    				<div class='cer-cnt'>
    					<p><b>Kickstart Your Career with an Online Degree Course via </b></p>
    					<h2>Chandigarh University</h2>
    					<br>
    					<p>At Chandigarh University Online (CU-OL), you can create your own learning path. Get flexible learning options, expert faculty, a cutting-edge curriculum, interactive learning experiences, and a globally recognized certification.
<br>Are you ready to unlock your potential and take your career to new heights? Look no further than Chandigarh University’s online courses! We are excited to offer you a wide range of UGC-entitled Chandigarh University online degree programs, designed to empower you with the knowledge and skills you need to succeed in today’s ever-evolving professional world. Whether you're exploring CU distance education, planning to pursue an MBA from Chandigarh University, or comparing Chandigarh University fees, we have options tailored for your goals.
</p>
    				</div>
					 <div class="d-none d-lg-block">
                   <a href='#form'><button type='enroll' class='enroll-btn'> Enroll Now</button></a> 
</div>
					  <div class="d-sm-block d-lg-none">
                   <center><a href='#form'><button type='enroll' class='enroll-btn'> Enroll Now</button></a> </center>
</div>
    				
    			</div>
    		</div>
    	</div>
    </section>

	<section id="faqs">
        <div class="container">
            <div class="row">
                <h2>Frequently Asked Questions</h2>
                <div class="accordionWrapper">
                    <div class="accordionItem open">
                        <h3 class="accordionItemHeading">Q1.  Is Chandigarh University Online recognized by UGC?
                        </h3>
                        <div class="accordionItemContent">
                            <p>Yes, Chandigarh University Online is UGC-entitled, which means all its online degree courses are recognized and valid across India.

                            </p>
                        </div>
                    </div>

                    <div class="accordionItem close">
                        <h3 class="accordionItemHeading">Q2.  What types of programs are available at Chandigarh University Online?
</h3>
                        <div class="accordionItemContent">
                            <p>CU offers UGC-approved online undergraduate and postgraduate programs such as BA, BBA, BCA, MBA, MCA, M.A., and M.Sc. in various specialisations.

                            </p>
                        </div>
                    </div>


                    <div class="accordionItem close">
                        <h3 class="accordionItemHeading">Q3. What is the admission process for Chandigarh University Online?
</h3>
                        <div class="accordionItemContent">
                            <p>You can apply directly through the official website by filling out the online application form and uploading your documents. No entrance exam is required.

                            </p>
                        </div>
                    </div>

                    <div class="accordionItem close">
                        <h3 class="accordionItemHeading">Q4. Are Chandigarh University Online degrees valid for government jobs?</h3>
                        <div class="accordionItemContent">
                            <p>Yes, since the degrees are UGC-entitled, they are valid for both government and private sector opportunities.

                            </p>
                        </div>
                    </div>

                      <div class="accordionItem close">
                        <h3 class="accordionItemHeading">Q5. Does Chandigarh University offer EMI or scholarship options?
</h3>
                        <div class="accordionItemContent">
                            <p>Yes, CU Online offers affordable fee structures with EMI plans and scholarship opportunities for eligible students.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id='footer' style='background-color: #333; color:#fff;'>
    	<div class='container'>
    		<div class='row'>
    			<div class='col-md-3'>
    				<h5>Get In Touch</h5>
    				<hr>
    				<img src='assets/img/cu-online-white.png' width='80%'><br><br>
    				<p>Chandigarh University, NH-05 Chandigarh-Ludhiana Highway, Mohali, Punjab (INDIA)</p>
    			</div>
    			<div class='col-md-3'>
    				<h5>Top Online UG Courses</h5>
    				<hr>
    				<p><i class='fa fa-angle-right'></i>&nbsp; Bachelor of Computer Application - BCA</p>
    				<p><i class='fa fa-angle-right'></i>&nbsp; Bachelor of Business Administration - BBA</p>
    				<p><i class='fa fa-angle-right'></i>&nbsp; Bachelor of Journalism & Mass Media Communication - BJMC</p>
    				
    			</div>
    			<div class='col-md-3'>
    				<h5>Top Online PG Courses</h5>
    				<hr>
    				<p><i class='fa fa-angle-right'></i>&nbsp; Master of Business Administration - MBA</p>
    				<p><i class='fa fa-angle-right'></i>&nbsp; Master of Computer Application - MCA</p>
    				<!-- <p><i class='fa fa-angle-right'></i>&nbsp; Master of Commerce - MCOM </p> -->
    				<p><i class='fa fa-angle-right'></i>&nbsp; Master of Science - MSC</p>
    				<p><i class='fa fa-angle-right'></i>&nbsp; Master of Arts - MA</p>
    				<p><i class='fa fa-angle-right'></i>&nbsp; Master of Journalism & Mass Media Communication - MJMC</p>
    			</div>
    			<div class='col-md-3'>
    				<h5>Recognition & Approvals</h5>
    				<hr>
    				<p><i class='fa fa-angle-right'></i>&nbsp; UGC Entitled Degree</p>
    				<p><i class='fa fa-angle-right'></i>&nbsp; 27th Ranking in NIRF</p>
    				<p><i class='fa fa-angle-right'></i>&nbsp; NAAC 'A+' Accredited University</p>
    				<p><i class='fa fa-angle-right'></i>&nbsp; QS World University Ranking</p>
    				<p><i class='fa fa-angle-right'></i>&nbsp; World Education Services</p>
    				<p><i class='fa fa-angle-right'></i>&nbsp; ACCA Recognized University</p>
    			</div>
    		</div>
    		<hr>
    		      <div class="copyright"><center><p>This information is provided by SODE Counselling Services LLP. All university names, logos, and trademarks mentioned are used for informational purposes only. We are not a university or an admission authority. </p>   <p>&nbsp; <span class="disclaimer_popup" onclick="disclaimerModal()" style="color:#8DB3F0; font-size:14px; cursor:pointer; font-weight:bold; text-decoration:underline;">Disclaimer</span></center></p>
</div>
    	</div>
    </section>
<?php include "popup.php"; ?>
       
<script>
	var accItem = document.getElementsByClassName("accordionItem");
var accHD = document.getElementsByClassName("accordionItemHeading");
for (i = 0; i < accHD.length; i++) {
  accHD[i].addEventListener("click", toggleItem, false);
}
function toggleItem() {
  var itemClass = this.parentNode.className;
  for (i = 0; i < accItem.length; i++) {
    accItem[i].className = "accordionItem close";
  }
  if (itemClass == "accordionItem close") {
    this.parentNode.className = "accordionItem open";
  }
}
	</script>
  
  <script>
document.addEventListener("DOMContentLoaded", function () {
  const forms = document.querySelectorAll('form');

  forms.forEach(form => {
    const checkbox = form.querySelector('input[type="checkbox"]');
    const input = form.querySelector('input[type="tel"]');
    const submitButton = form.querySelector('.sub-btn');
    const isBrochureForm = form.id === "enquiry-form"; // Brochure form ID

    if (!input || !submitButton || !checkbox) return;

    // intlTelInput initialization
    const iti = window.intlTelInput(input, {
      initialCountry: "in",
      autoPlaceholder: "polite",
      separateDialCode: true,
      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js",
    });

    // Phone error message span
    const errorMessage = document.createElement("span");
    errorMessage.style.color = "red";
    errorMessage.style.display = "none";
    input.parentNode.insertBefore(errorMessage, input.nextSibling);

    input.addEventListener("input", function () {
      const phoneValue = input.value.trim();
      if (/[a-zA-Z]/.test(phoneValue)) {
        errorMessage.textContent = "Please enter only numbers.";
        errorMessage.style.display = "block";
        input.value = phoneValue.replace(/[a-zA-Z]/g, '');
      } else {
        errorMessage.style.display = "none";
      }
    });

    input.addEventListener("blur", function () {
      if (input.value.trim() && !iti.isValidNumber()) {
        errorMessage.textContent = "Invalid phone number.";
        errorMessage.style.display = "block";
      } else {
        errorMessage.style.display = "none";
      }
    });

    // Checkbox error span
    let checkboxError = form.querySelector('.checkbox-error');
    if (!checkboxError) {
      checkboxError = document.createElement('span');
      checkboxError.className = 'checkbox-error';
      checkboxError.style.color = 'red';
      checkboxError.style.fontSize = '13px';
      checkboxError.style.display = 'none';
      checkboxError.style.marginTop = '5px';
      checkbox.parentNode.insertBefore(checkboxError, checkbox.nextSibling);
    }

    checkbox.addEventListener('change', function () {
      if (checkbox.checked) {
        checkboxError.style.display = 'none';
        checkbox.style.outline = 'none';
      }
    });

    // Form submit handler
    form.addEventListener("submit", function (event) {
      const phoneValue = input.value.trim();

      // Checkbox validation
      if (!checkbox.checked) {
        event.preventDefault();
        checkboxError.textContent = "* Please accept the terms.";
        checkboxError.style.display = 'block';
        checkbox.style.outline = '2px solid red';
        checkbox.style.outlineOffset = '2px';
        return;
      }

      // Phone number validation
      if (!iti.isValidNumber() || /[a-zA-Z]/.test(phoneValue)) {
        event.preventDefault();
        alert("Please enter a valid phone number.");
        input.focus();
        return;
      }

      input.value = iti.getNumber();
      submitButton.disabled = true;
      submitButton.textContent = "Processing...";

    //   if (isBrochureForm) {
    //     event.preventDefault();

    //     const selectedCourseInput = form.querySelector('[name="course"]');
    //     const selectedCourse = selectedCourseInput?.value?.trim().toLowerCase() || '';
    //     const pdfFileName = `images/${selectedCourse}.pdf`;

    //     // Open brochure in new tab
    //     window.open(pdfFileName, '_blank');

    //     // Submit via fetch
    //     const formData = new FormData(form);
    //     fetch(form.action, {
    //       method: form.method,
    //       body: formData
    //     }).then(() => {
    //       window.location.href = "thank-you.php?course=" + selectedCourse + "&from=brochure";
    //     }).catch(err => {
    //       alert("Submission failed. Please try again.");
    //       submitButton.disabled = false;
    //       submitButton.textContent = "Submit";
    //     });
    //   }
    });
  });
});
</script>
	<script>
window.addEventListener("pageshow", function () {
  document.querySelectorAll("form").forEach(form => {
    form.reset(); // Reset all fields including selects

    const input = form.querySelector('input[type="tel"]');
    if (input && window.intlTelInputGlobals) {
      const iti = window.intlTelInputGlobals.getInstance(input);
      if (iti) iti.setNumber(""); // Clear international number
    }

    // Reset checkbox
    const checkbox = form.querySelector('input[type="checkbox"]');
    if (checkbox) {
      checkbox.checked = false;
      checkbox.style.outline = "none";
    }

    // Hide checkbox error message
    const checkboxError = form.querySelector('.checkbox-error');
    if (checkboxError) checkboxError.style.display = "none";

    // Hide phone number error message
    const phoneError = input?.nextElementSibling;
    if (phoneError && phoneError.tagName === "SPAN") {
      phoneError.style.display = "none";
    }

    // Reset submit button
    const submitButton = form.querySelector(".sub-btn");
    if (submitButton) {
      const isBrochureForm = form.id === "enquiry-form";
      submitButton.disabled = false;
      submitButton.textContent = isBrochureForm ? "Submit" : "Submit";
    }
  });
});
</script>
</body>
</html>