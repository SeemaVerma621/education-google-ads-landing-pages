<div id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<img src="assets\img\dpu-log-des.png" class="img-footer" loading="lazy"><br><br>
				<p class="ftr-p">D Y Patil University is a private university located in Pune, India. It was established in 2003 by the D Y Patil Group, a leading educational institution in India. The university is recognized by the University Grants Commission (UGC) and is accredited by the National Assessment and Accreditation Council (NAAC A++).</p>
			</div>
			<!--end of col-->
			<div class="col-md-3">
				<p class="ftr-h">TOP BBA SPECIALISATION</p>
				<br>
				<p class="ftr-p">Finance<br>
					Human Resource<br>
					Marketing<br>
					Project Management<br>
					Analytics & Data Science<br>
					Digital Marketing & E-Commerce<br>
					logistics and Supply Chain Management<br>
					International Finance<br><br>
				</p>
			</div>
			<div class="col-md-3">
				<p class="ftr-h">TOP MBA SPECIALISATION</p>
				<br>
				<p class="ftr-p">Marketing Management<br>
Human Resource Management<br>
Finance Management<br>
IT Management<br>
Project Management<br>
Operations Management<br>
Hospital Administration and Health Care
Management<br>
					Artificial Intelligence &
Machine
Learning Management<br>
Logistics, Materials & Supply chain Management<br>
BlockChain Management<br>
Digital Marketing Management<br>
AgriBusiness Management
				</p>
			</div>
			<div class="col-md-3">
				<p class="ftr-h">Recognization & Approvals</p>
				<br>
				<p class="ftr-p">University Grant commision (UGC)
					National Assessment and Accreditation Council (NAAC A++)
					National Institutional Ranking Framework (NIRF) 
					All India Council for Technical Education (AICTE)
				</p>
			</div>
			<!--end of col-->
		</div>
		<!--end of row-->
		<hr class="footer-hr">
		<p class="copyright">© 2025 Copyright DY Patil University</p>
	</div>
	<!--end of container-->
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
	document.addEventListener("DOMContentLoaded", function() {
		// Retrieve the values from the URL parameters
		const urlParams = new URLSearchParams(window.location.search);
		const subSourceValue = urlParams.get('sub_source');
		const utmSourceValue = urlParams.get('utm_source');
		const utmCampaignValue = urlParams.get('utm_campaign');
		const utmMediumValue = urlParams.get('utm_medium');
		const utmTermValue = urlParams.get('utm_term');

		// Set the values in the respective input fields
		const subSourceInput = document.getElementById('sub_source');
		if (subSourceInput) {
			subSourceInput.value = subSourceValue;
		}

		const utmSourceInput = document.getElementById('utm_source');
		if (utmSourceInput) {
			utmSourceInput.value = utmSourceValue;
		}

		const utmCampaignInput = document.getElementById('utm_campaign');
		if (utmCampaignInput) {
			utmCampaignInput.value = utmCampaignValue;
		}

		const utmMediumInput = document.getElementById('utm_medium');
		if (utmMediumInput) {
			utmMediumInput.value = utmMediumValue;
		}

		const utmTermInput = document.getElementById('utm_term');
		if (utmTermInput) {
			utmTermInput.value = utmTermValue;
		}

		// Fetch the current URL and set it as the value for page_url input field
		const currentPageUrl = window.location.href;
		const pageUrlInput = document.getElementById('page_url');
		if (pageUrlInput) {
			pageUrlInput.value = currentPageUrl;
		}
	});
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