<!-- Start Footer Section -->
<div id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="copyright">
					<center> <p>This information is provided by SODE Counselling Services LLP. All university names, logos, and trademarks mentioned are used for informational purposes only. We are not a university or an admission authority.  &nbsp;<br> <span class="disclaimer_popup" onclick="disclaimerModal()" style="color:#8DB3F0; font-size:15px; cursor:pointer; font-weight:bold; text-decoration:underline;">Disclaimer</span></p></center>
						

				</div>
			</div>


		</div>

	</div>
</div>
<!-- End Footer Section -->

<!-- Start MANIPAL DES LP Code -->
<script>
	// Get the current year
	var currentYear = new Date().getFullYear();

	// Set the current year as the content of the span element
	document.getElementById("currentYear").textContent = currentYear;
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

<!-- End MANIPAL DES LP Code -->





<script>
	function openPopupbroucher() {
		document.getElementById('myModal2').style.display = 'block';
	}

	function closePopupbroucher() {
		document.getElementById('myModal2').style.display = 'none';
	}
</script>

<!-- Scripts (place this at the bottom of your page) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
<script>
	$(document).ready(function () {
		$(".slider2").owlCarousel({
			items: 4,
			loop: true,
			autoplay: true,
			autoplayTimeout: 2000,
			dots: true,
			nav: true,
			margin: 20,
			responsive: {
				0: { items: 1 },
				600: { items: 2 },
				1000: { items: 3 }
			},
			autoplayHoverPause: true
		});

		$(".slider").owlCarousel({
			items: 4,
			loop: true,
			autoplay: true,
			autoplayTimeout: 2000,
			dots: true,
			nav: true,
			margin: 0,
			responsive: {
				0: { items: 2 },
				600: { items: 2 },
				1000: { items: 4 }
			},
			autoplayHoverPause: true
		});

		$(".testimonials").owlCarousel({
			items: 5,
			loop: true,
			autoplay: true,
			autoplayTimeout: 2000,
			dots: true,
			nav: true,
			margin: 0,
			responsive: {
				0: { items: 1 },
				600: { items: 1 },
				1000: { items: 3 }
			},
			autoplayHoverPause: true
		});

		$(".slider3").owlCarousel({
			items: 5,
			loop: true,
			autoplay: true,
			autoplayTimeout: 2000,
			dots: true,
			nav: true,
			margin: 0,
			responsive: {
				0: { items: 1 },
				600: { items: 1 },
				1000: { items: 4 }
			},
			autoplayHoverPause: true
		});

		// Add custom icons for nav
		$(".owl-prev").html('<i class="fa fa-chevron-left"></i>');
		$(".owl-next").html('<i class="fa fa-chevron-right"></i>');
	});
</script>

</body>

</html>