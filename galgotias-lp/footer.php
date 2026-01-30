<!-- Start Footer Section -->

<div class="doubt">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="footer-enquiry">
          <div class="ftr">
            <h2><span class="yellow">Have Questions?</span></h2>
            <p>Chat with our experts and get free, personalised guidance.</p>
          </div>
          <button class="degree-btn" onclick="openPopup()">Talk to Our Team ➜</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
             <img src="assets/images/logo-GU-online.png" width="100%">
          
        </div>
   
        <div class="col-md-4">
            <h2>TOP COURSES</h2>
                    <p>Master of Arts (MA)</p>
                    <p>Master of Business Administration (MBA)</p>
                    <p>Master of Computer Application (MCA)</p>
                    <p> Master of commerece (Mcom)</p>
                  
        </div>
      

        <div class="col-md-4">
            <h2>RECOGNITION & APPROVALS</h2>
                    <p>University Grant commision (UGC)</p>
                    <p>National Assessment Accreditation Counci (NAAC A+)</p>
                    <p>National Board of Accreditation (NBA) </p>
    
                   
        </div>
    </div>
    <br>
<hr>
    <div class="row">
            <div class="col-md-12" id="footer-bottom-bar">
                <p> Copyright © 2025 Galgotias Online All Rights Reserved.</p>
            </div>
        </div>
    </div>
</div>




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
$(".slider").owlCarousel({
    items: 5, // Number of items to show
    loop: true,
    autoplay: true, // Autoplay
    autoplayTimeout: 2000, // Autoplay interval in milliseconds
    dots: true,
    navigation: true, // Enable navigation
    pagination: true,
    margin: 10, // Show dot navigation
    // Other configuration options
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
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

</body>

</html>