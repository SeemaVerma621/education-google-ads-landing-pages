
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="assets\css\bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets\css\style.css">
<link rel="stylesheet" type="text/css" href="assets\css\navbar.css">
<link rel="icon" type="image/x-icon" href="assets/img/jain-favicon.webp">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
<!--<script async src="assets\jquery.min.js"></script>-->

<!-- IF BROWSER DOESN'T SUPPORT JAVASCRIPT THEN USE NORMAL LINK TAGS TO LOAD CSS -->
<noscript>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
      
</noscript>
  
<!-- LOAD CSS -->
<script type="text/javascript">//<![CDATA[
(function() {
    var css = document.createElement('link');
    css.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css';
    css.rel = 'stylesheet';
    css.type = 'text/css';
    document.getElementsByTagName('head')[0].appendChild(css);
})();
//]]></script> 


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-QKD303NRFS"></script>
<script>
gtag('config', 'G-QKD303NRFS');

</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-868968102"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-868968102');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MST93MD');</script>
<!-- End Google Tag Manager -->

<meta name="facebook-domain-verification" content="i37alsybila3ygofwl6oklycbeyuoy" />

<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '125617150358826');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=125617150358826&ev=PageView&noscript=1"
/></noscript>

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


            // Set the extracted URL to the input field
            form.querySelector('#page_url').value = currentURL;
        });
    });
</script>
<!-- End Meta Pixel Code -->
  <div id="header">
    <div class="container">
        <nav class="nav">
            <input type="checkbox" id="nav-check">
            <div class="nav-header">
                <div class="nav-title">
                    <a href="https://jain.distanceeducationschool.in/" id="logo-link">  
                        <img src="assets/img/logo.webp" class="logo" alt="jain-Logo">
                    </a>
                </div>
            </div>
            <div class="nav-btn">
                <label for="nav-check" aria-label="Toggle navigation menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
            </div>
            <ul class="nav-list">
            
            <li><a href="#programmes">Courses</a></li>
            <li><a href="#about-jain">About</a></li>
                <li><a href="#approvals">Approvals</a></li>
                <li><a href="#accordition">FAQ</a></li>
            </ul>
            <!-- Uncomment and implement if needed -->
            <!-- <button class="topBtn" onclick="openPopup()">Apply Now</button> -->
        </nav>
    </div>
</div>

