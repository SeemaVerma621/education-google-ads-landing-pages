<!-- Start Footer Section -->

<div id="footer">
    <div class="container">
    <div class="row">
       <div class="footer-enquiry">
       <h2>Have Query, Need Guidance?</h2> <buttton class="ftr-btn" onclick='openPopup()'>Request a Call Back</button>
       </div>
    </div>
        <!-- <div class="row">
            <div class="col-md-7">
            <h2>Have Query, Need Guidance?</h2></div>
   
        <div class="col-md-5">
            <buttton class="ftr-btn">Request Call Back</button></div>
        </div> -->

    </div>
</div>
<div id="footer-bottom-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p> Copyright © 2025 Sharda Online All Rights Reserved.</p>
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
// Initialize Slider 2
$(".slider2").owlCarousel({
    items: 4, // Number of items to show
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
$(".slider").owlCarousel({
    items: 4, // Number of items to show
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