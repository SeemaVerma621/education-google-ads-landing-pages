<!-- Start Footer Section -->
<div id="footer">
	<div class="container">
		<div class="row">

			<div class="col-md-3">
				<img src="images/logo.png" alt="logo" width="100%">
			</div>
			<div class="col-md-3">
				<h2 class="footer-H">Top MBA Specialization</h2>
				<p>MBA (Finance)</p>
				<p>MBA (Marketing)</p>
				<p>MBA (Human Resources Management)</p>
				<p>MBA (International Business)</p>
				<p>MBA (Operations Management)</p>
				<p>MBA (Information Technology)</p>
				<p>MBA (Supply Chain Management)</p>
				<p>MBA (Healthcare Management)</p>
				<p>MBA (Entrepreneurship)</p>
				<p>MBA (Business Analytics)</p>
			</div><!-- END OF COL -->

			<div class="col-md-3">
				<h2 class="footer-H">Recognization & Approvals</h2><hr>
				<p>UGC Approval</p>
				<p>NAAC A+ Accreditation</p>
				<p>NIRF Ranking Universities</p>
			</div>


			<div class="col-md-3">
				<h2 class="footer-H">Top Courses</h2><hr>
				<p>BA - Bachelor of Arts</p>
				<p>BCOM - Bachelor of Commerce</p>
				<p>MA - Master of Arts</p>
				<p>MBA - Master of Business Administartion</p>
				<p>MCA - Master of Computer Application</p>
				<p>MCOM - Master of Commerce</p>
			
				
				
		</div><!-- END OF COL -->
	</div><!-- END OF ROW -->

	<hr class="footer-hr">

</div> <!-- END OF CONTAINER -->
</div>
<div class="copyright" style="text-align:center;"><p>This information is provided by SODE Counselling Services LLP. All university names, logos, and trademarks mentioned are used for informational purposes only. We are not a university or an admission authority. <br> <span class="disclaimer_popup" onclick="disclaimerModal()" style="color:#8DB3F0; font-size:15px; cursor:pointer; font-weight:bold; text-decoration:underline;">Disclaimer</span></p></div>

<!-- end footer section -->

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



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>

<script>
// Initialize Slider 2
$(".slider2").owlCarousel({
    items: 4, // Number of items to show
    loop: true,
    autoplay: true, // Autoplay
    autoplayTimeout: 2000, // Autoplay interval in milliseconds
   // dots: true,
    navigation: true, // Enable navigation
    pagination: true,
    margin: 20, // Show dot navigation
    // Other configuration options
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    },
    autoplayHoverPause: true
});
</script>

<script>
jQuery(document).ready(function($) {
    "use strict";
    //  TESTIMONIALS CAROUSEL HOOK
    $('#customers-testimonials').owlCarousel({
        loop: true,
        center: true,
        items: 3,
        margin: 0,
        autoplay: true,
        nav: true,


        autoplayTimeout: 8500,
        smartSpeed: 450,
        responsive: {
             nav: true,
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1170: {
                items: 3
            }
        }
    });
    $(".owl-prev").html('<i class="fa fa-chevron-left"></i>');
    $(".owl-next").html('<i class="fa fa-chevron-right"></i>');
});
</script>
<script>
$(".slider").owlCarousel({
    items: 5, // Number of items to show
    loop: true,
    autoplay: true, // Autoplay
    autoplayTimeout: 2000, // Autoplay interval in milliseconds
//    dots: true,
    navigation: true, // Enable navigation
    pagination: true,
    margin: 0, // Show dot navigation
    // Other configuration options
    responsive: {
         nav: true,
        0: {
            items: 2
        },
        600: {
            items: 2
        },
        1000: {
            items: 4
        }
    },
    autoplayHoverPause: true
});
</script>

<script async>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
        document.getElementByclassName("icon").display = block;
    } else {
        x.className = "topnav";
    }
}
</script>

<script>
function openPopupbroucher() {
    document.getElementById('myModal2').style.display = 'block';
}

// Function to close the popup
function closePopupbroucher() {
    document.getElementById('myModal2').style.display = 'none';
}
</script>

<script>
jQuery(document).ready(function($) {
    function getParameterByName(name) {
        name = name.replace(/[\[\]]/g, '\\$&');
        var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)');
        var results = regex.exec(window.location.href);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, ' '));
    }

    function addParameter(url, paramName, paramValue) {
        var hash = '';
        var anchorIndex = url.indexOf('#');
        if (anchorIndex !== -1) {
            hash = url.substr(anchorIndex);
            url = url.substr(0, anchorIndex);
        }
        if (url.indexOf('?') === -1) {
            return url + '?' + paramName + '=' + paramValue + hash;
        } else {
            return url + '&' + paramName + '=' + paramValue + hash;
        }
    }

    var utm_parameters = {
        'sub_source': getParameterByName('sub_source'),
        'utm_source': getParameterByName('utm_source'),
        'utm_campaign': getParameterByName('utm_campaign'),
        'utm_medium': getParameterByName('utm_medium'),
        'utm_term': getParameterByName('utm_term'),
        'messageText': getParameterByName('messageText')
    };

    $('a').each(function() {
        var link = $(this).attr('href');
        if (link) {
            for (var key in utm_parameters) {
                if (utm_parameters[key]) {
                    link = addParameter(link, key, utm_parameters[key]);
                }
            }
            $(this).attr('href', link);
        }
    });
});
</script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" async></script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js" async></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" async></script> -->
</body>

</html>