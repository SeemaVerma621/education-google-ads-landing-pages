<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/x-icon" href="assets/img/favicon.png"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900|Ubuntu:400,500,700" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/menu.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css"
	  rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" async></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.0/owl.carousel.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
<!-- Google tag (gtag.js) -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10925120712">
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Y33CCG69FC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Y33CCG69FC');
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10925120712"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-10925120712');
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PGT3D2HR');</script>
<!-- End Google Tag Manager -->

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
