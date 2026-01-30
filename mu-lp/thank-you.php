<?php
$course = strtolower($_GET['course'] ?? '');

$brochures = [
    "mba" => "https://mu.distanceeducationschool.in/assets/brochures/MANGALAYATAN_MBA.pdf",
    "ma" => "https://mu.distanceeducationschool.in/assets/brochures/MANGALAYATAN_MA.pdf",
    "mca" => "https://mu.distanceeducationschool.in/assets/brochures/MANGALAYATAN_MCA.pdf",
    "mcom" => "https://mu.distanceeducationschool.in/assets/brochures/MANGALAYATAN_MCOM.pdf",
    "msc" => "https://mu.distanceeducationschool.in/assets/brochures/MANGALAYATAN_MSC.pdf",
    "ba" => "https://mu.distanceeducationschool.in/assets/brochures/MANGALAYATAN_University.pdf",
    "bba" => "https://mu.distanceeducationschool.in/assets/brochures/MANGALAYATAN_BBA.pdf",
    "bca" => "https://mu.distanceeducationschool.in/assets/brochures/MANGALAYATAN_BCA.pdf",
    "bcom" => "https://mu.distanceeducationschool.in/assets/brochures/MANGALAYATAN_University.pdf",
    "bsc" => "https://mu.distanceeducationschool.in/assets/brochures/MANGALAYATAN_University.pdf"
];

$redirect_url = $brochures[$course] ?? '';
?>
<!DOCTYPE html>
<html>
<head>
    <?php include "header.php"; ?>
    		<title>Thank you For Submitting Your Details to Mangalayatan Online University we'll reach you ASAP!</title>
    <meta name="description" content="">
    <style>
        .thanku { background-color: #fdfdfd; }
        .thanku h1, .thanku h4 { color: #000; }
    </style>

<script async src="https://www.googletagmanager.com/gtag/js?id=AW-868968102"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-868968102');
</script>


<!-- Event snippet for Mangalayatan University Online LP conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-868968102/3AVwCPTSgdEZEKbNrZ4D'});
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
                  <img src="https://mu.distanceeducationschool.in/assets/images/submission-confirm.gif" class="img-responsive">
                    <h1><strong>THANK YOU!</strong></h1>
                    <h4><strong>Your Submission has been received</strong></h4>
                    <?php if ($redirect_url): ?>
                        <p>You’ll be redirected to your brochure shortly...</p>
                        <!--<p><a href="<?php echo $redirect_url; ?>" target="_blank" style="font-size:14px;">Click here if not redirected</a></p>-->
                    <?php endif; ?>
                </center>
                <br>
                <div class="button">
                    <a href="https://mu.distanceeducationschool.in">
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
