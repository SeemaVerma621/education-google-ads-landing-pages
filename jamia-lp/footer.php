<!-- Start Footer Section -->

<div class="doubt">
    <div class="doubt-section">
      <h2>Need Help?<br/>Talk to Our Expert</h2>
      <button onclick="openPopup()">Get 1:1 Counseling</button>
    </div>
    </div>
    <div class="footer-section">
      <div class="container">
        <footer class="footer">
          <div class="footer-column">
            <img src="images/jamia-logo.webp" alt="logo-img"/>
            <p>Mehrauli - Badarpur Rd, near
                Batra Hospital, Block D,
                Hamdard Nagar, New Delhi,
                Delhi 110062</p>
            </div>
        <div class="footer-column">
          <h2>Online Program</h2>
          <p>MBA - Master of Business Administration</p>
          <p>MCA - Master of Computer Application</p>
          <p>MA - Master of Arts</p>
          <p>BCOM - Bachelor of Commerce</p>
          <p> BBA - Bachelor of Business Administration</p>
          <p> BCA - Bachelor of Computer Application</p>
          <br/>
          <h2>ODL Program</h2>
          <p>BBA - Bachelor of Business Administration</p>
          <p>BCA - Bachelor of Computer Application</p>
          <br/>
          </div>
        <div class="footer-column">
        <h2>Diploma Programs</h2>
          <p>Professional Arabic Course (DPA)</p>
          <p>Environment Bakery and Confectionery Technology Course (DBCT)</p>
          <p>Diploma in Dietetics and Therapeutics Nutrition Course (ADDTN)</p>
          <p>Diploma in Drug Regulatory Affairs Course (ADDRA)</p>
          <p>Diploma in Medical Record Technology Course (ADMRT)</p>
          <br/>
          <h2>Certification Programs</h2>
          <p>Modern Persian Language Course (CMPL)</p>
          <br/>
        </div> 

  </footer>
  
  </div>


<div id="footer-bottom-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
				<p><a href="#Banner">Home </a> |<a href="#about"> About </a>| <a href="#Programs">Courses</a> | <a href="#faqs">FAQ</a></p>
            <center><hr/></center>
                <p> Copyright © 2025 Jamia Hamdard University All Rights Reserved.</p>
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

<script>
document.addEventListener("DOMContentLoaded", () => {
  const tabButtons = document.querySelectorAll(".tab-button");
  const tabContents = document.querySelectorAll(".tab-content");

  tabButtons.forEach((button) => {
    button.addEventListener("click", () => {
      tabButtons.forEach((btn) => btn.classList.remove("active"));
      tabContents.forEach((content) => content.classList.remove("active"));
      button.classList.add("active");
      const tabId = button.getAttribute("data-tab");
      document.getElementById(tabId).classList.add("active");
    });
  });
});

    </script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>



<script async>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.class === "topnav") {
        x.class += " responsive";
        document.getElementByclass("icon").display = block;
    } else {
        x.class = "topnav";
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