<?php
$course = strtolower($_GET['course'] ?? '');

$brochures = [
    "mba" => "https://manipal.distanceeducationschool.in/brochures/MBA.pdf",
    "ma" => "https://manipal.distanceeducationschool.in/brochures/MA.pdf",
    "mca" => "https://manipal.distanceeducationschool.in/brochures/MCA.pdf",
    "mcom" => "https://manipal.distanceeducationschool.in/brochures/MCOM.pdf",
    "mjmc" => "https://manipal.distanceeducationschool.in/brochures/MJMC.pdf",
    "ba" => "https://manipal.distanceeducationschool.in/brochures/BA.pdf",
    "bba" => "https://manipal.distanceeducationschool.in/brochures/BBA.pdf",
    "bca" => "https://manipal.distanceeducationschool.in/brochures/BCA.pdf",
    "bcom" => "https://manipal.distanceeducationschool.in/brochures/BCOM.pdf",
    "bsc" => "https://manipal.distanceeducationschool.in/brochures/BSC.pdf"
];

$redirect_url = $brochures[$course] ?? '';
?>
<!DOCTYPE html>
<html>
<head>
    <?php include "header.php"; ?>
    		<title>Thank you For Submitting Your Details to Manipal Online University we'll reach you ASAP!</title>
    <meta name="description" content="">
    <style>
        .thanku { background-color: #fdfdfd; }
        .thanku h1, .thanku h4 { color: #000; }
    </style>
<script>
  gtag('event', 'conversion', {'send_to': 'AW-868968102/cqLDCPDSx-kaEKbNrZ4D'});
</script>

    <?php if ($redirect_url): ?>
        <!-- Auto Redirect to Brochure PDF after 2 sec -->
        <meta http-equiv="refresh" content="2;URL=<?php echo htmlspecialchars($redirect_url); ?>">
    <?php endif; ?>
</head>
<body>
    <?php include "navbar.php"; ?>

    <div class="thanku">
        <br>
        <div class="container">
            <div class="header">
                <br><br><br>
                <center>
                  	<img src="images/submission.gif" class="img-responsive">
                    <h1><strong>THANK YOU!</strong></h1>
                    <h4><strong>Your Submission has been received</strong></h4>
                    <?php if ($redirect_url): ?>
                        <p>You’ll be redirected to your brochure shortly...</p>
                        <!--<p><a href="<?php echo $redirect_url; ?>" target="_blank" style="font-size:14px;">Click here if not redirected</a></p>-->
                    <?php endif; ?>
                </center>
                <br>
                <div class="button">
                    <a href="https://manipal.distanceeducationschool.in/">
                        <center>
                            <button type="button" style="padding: 10px; border: 1px solid black; background-color:#002B5C; color: #fff;">
                                For More Information kindly Visit Us
                            </button>
                        </center>
                    </a>
                    <br>
                </div>
            </div>
            <br>
        </div>
    </div>

    <?php include "footer.php"; ?>
</body>
</html>
