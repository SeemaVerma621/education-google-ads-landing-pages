<div id="footer">
	<div class="container">
		<div class="row">

			<div class="col-md-3">
				<p class="ftr-h">Contact Us</p><hr>

				Registered Office: Unit No. 1, 3rd Floor Vardhman Trade Centre, Nehru Place New Delhi - 110019<br><br>

				<a href="tel:01140468080">
					<i class="fa fa-phone"></i>011 4046 8080</a>
				<div class="social-media"><br>
					<a href="https://www.facebook.com/distanceeducationschool/" class="fa fa-facebook"></a>
					<a href="https://twitter.com/distance_school" class="fa fa-twitter"></a>
					<a href="https://www.linkedin.com/company/distanceeducationschool/" class="fa fa-linkedin"></a>
					<a href="https://www.youtube.com/@distanceeducationschool" class="fa fa-youtube"></a>
					<a href="https://www.instagram.com/distanceeducationschool/" class="fa fa-instagram"></a>
					<a href="https://in.pinterest.com/deducationschool/" class="fa fa-pinterest"></a>
				</div><br>
				<a href="https://maps.app.goo.gl/CSHBVF4QpZ8vXsEv7">
					<img src="https://degree.distanceeducationschool.com/assets/img/des-reviews-new.webp" class="review-img" width="100%">
				</a>

				<br>
			</div>
			<div class="col-md-3">
				<p class="ftr-h">Top MBA Specialization</p><hr>
				MBA (Finance)<br>
				MBA (Marketing)<br>
				MBA (Human Resources Management)<br>
				MBA (International Business)<br>
				MBA (Operations Management)<br>
				MBA (Information Technology)<br>
				MBA (Supply Chain Management)<br>
				MBA (Healthcare Management)<br>
				MBA (Entrepreneurship)<br>
				MBA (Business Analytics)<br>
			</div><!-- END OF COL -->

			<div class="col-md-3">
				<p class="ftr-h">Recognization & Approvals</p><hr>
				UGC & DEB Approval<br>
				AICTE Approval<br>
				NAAC Accreditation<br>
				NCTE Approval<br>
				NIRF Ranking Universities<br>
			</div>


			<div class="col-md-3">
				<p class="ftr-h">Top Most Universities<hr>
				Manipal University (CU)<br>
				Lovely Professional University (LPU)<br>
				NMIMS University (NMIMS)<br>
				Swami Vivekanand Subharti University<br>
				Online JAIN University (JU)<br>
				Hindustan University (HU)<br>
				Vignan University (VU)<br>
				</p>
		</div><!-- END OF COL -->
	</div><!-- END OF ROW -->

	<hr class="footer-hr">

</div> <!-- END OF CONTAINER -->
</div>
<div class="copyright">&#169; 2025 SODE Counseling Services LLP</div>

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

<!-- Add page_url to "Input" Field Automatically -->
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

			// Get the current URL
			const currentURL = window.location.href;

			// Remove UTM parameters and fragments from the URL
			// const urlWithoutParams = currentURL.split(/[?#]/)[0];

			// Set the extracted URL to the input field
			// form.querySelector('#page_url').value = urlWithoutParams;
			form.querySelector('#page_url').value = currentURL;
		});
	});
</script>