<!DOCTYPE html>
<html>
	<head>
		<?php include "header.php"; ?>
		
		<title>Thank you For Submitting Your Details to Shoolini Online University we'll reach you ASAP!</title>
		<meta name="description" content="#">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10925120712"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  </script>
   
   <script>
    // Get query param value
    const params = new URLSearchParams(window.location.search);
    const course = params.get("course");

    if (course) {
        const brochureUrl = `assets/img/Andhra_${course}.pdf`;

        setTimeout(function () {
            window.open(brochureUrl, '_blank');
        }, 3000);
    }
</script>
<!-- Event snippet for Andhra University LP conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-10925120712/kUCmCIrlhcgZEMi5wNko'});
</script>
	</head>
	<body>

		<?php include "navbar.php"; ?>
	
		<div class="thanku">
			<br>
			<div class="container">
				<div class="header">

					<br>
					<center>
						<img src="assets/img/submission.gif" class="img-responsive">
					</center>
					<center><h1 style="color:#000;"><strong>THANK YOU !</strong></h1></center>
					<center><h4><strong>Your Submission has been Received!</strong></h4></center>
					<br>
					<div class="button">
						<a href="https://andhra.distanceeducationschool.in/"><center>	<button type="button" style="padding: 10px; border: 1px solid black; background-color:#002B5C; color: #fff; font-weight:bold;">For More Information Kindly Visit Here</button></center></a>
					</div><!--end of card-->
				</div><!--end of container-->
				<br>
			</div>
		</div><!--end of thanku-->
		<?php include "footer.php"; ?>
		<?php include "popup.php"; ?>
	</body>
</html>