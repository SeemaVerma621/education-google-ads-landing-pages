<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="robots" content="index, follow">
    <link rel="icon" type="image/x-icon" href="assets/images/faviconV2.png"/>
    <title>OP Jindal Global University</title>
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" async></script>
    <script type="text/javascript" src="assets/js/script.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
	
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-G07F0LB4EH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-G07F0LB4EH');
</script>
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10925120712"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-10925120712');
</script>
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
<style>
	.iti{width:100%;}
   .popup-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: none;
        justify-content: center;
        align-items: center;
      }

      .popup-content {
        background: #fff;
        padding: 20px;
        border-radius: 5px;
        width: 50%;
        max-width: 500px;
        text-align: center;
        position: relative;
      }

      .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 20px;
        cursor: pointer;
      }

    </style>
</head>
<body>

    <!-- Header Section -->
    <div id="header">
    <div class="container">
        <nav class="nav">
            <input type="checkbox" id="nav-check">
            <div class="nav-header">
                <div class="nav-title">
                    <a href="https://opJindal.distanceeducationschool.in/" id="logo-link">  
                        <img src="assets/images/op-jindal-logo.webp" class="logo" alt="OP-Jindal-Logo">
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
            <li><a href="#hero-section">Home</a></li>
                <li><a href="#courses">Courses</a></li>
                <li><a href="#Approval">Approvals</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#faqs">FAQ</a></li>
            </ul>
            <!-- Uncomment and implement if needed -->
            <!-- <button class="topBtn" onclick="openPopup()">Apply Now</button> -->
        </nav>
    </div>
</div>

</body>
</html>
