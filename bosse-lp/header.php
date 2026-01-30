<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/x-icon" href="images/odc-favicon.png"/>
<link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900|Ubuntu:400,500,700" rel="stylesheet">

<link href="style.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<!-- <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" async></script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js" async></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" async></script>

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

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-74N28ES8YT"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10925120712"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-74N28ES8YT');
	gtag('config', 'AW-10925120712');
</script>

<meta name="facebook-domain-verification" content="crh6ahtv29p81w8p3c4ltwib41x5ns" />

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
	fbq('init', '564150175334942');
	fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" alt="fb" style="display:none"
			   src="https://www.facebook.com/tr?id=564150175334942&ev=PageView&noscript=1"
			   /></noscript>
<!-- End Meta Pixel Code -->

<script type = "text/javascript">
	function showDiv() {
		document.getElementsByClassName('popmake-3060').style.display = "block";
	}
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
													  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
							})(window,document,'script','dataLayer','GTM-NQ4D7JS');</script>
<!-- End Google Tag Manager -->

<!-- Gallabox WhatsApp -->
<div id="wawidgetnew">
	<script>
		(function (w, d, s, u) {
			w.gbwawc = {
				url: u,
				options: {
					waId: "+918368950464",
					siteName: "Distance Education School",
					siteTag: "Apply now for distance MBA degree!",
					siteLogo: "https://distanceeducationschool.com/wp-content/uploads/2022/08/sode-ICON-png-NEW.png",
					widgetPosition: "RIGHT",
					triggerMessage: "Get Help",
					welcomeMessage: "Welcome to Distance Education School! India's Most Reliable Portal for Free Counseling & Top MBA Universities Guidance.",
					brandColor: "#25D366",
					messageText: "Start Your MBA Counseling with An Expert Now" + getParameterByName('messageText'),
					replyOptions: ['Yes'],
					brandAttribution: "I Love Gallabox"
				},
			};

			function getParameterByName(name) {
				name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
				var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
					results = regex.exec(location.search);
				return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
			}

			var h = d.getElementsByTagName(s)[0],
				j = d.createElement(s);
			j.async = true;
			j.src = u + "/whatsapp-widget.min.js?_=" + Math.random();
			h.parentNode.insertBefore(j, h);
		})(window, document, "script", "https://waw.gallabox.com");
	</script>
</div>