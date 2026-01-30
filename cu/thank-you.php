<?php
$course = strtolower($_GET['course'] ?? '');

$brochures = [
    "mba" => "https://cu.distanceeducationschool.in/assets/brochures/MBA.pdf",
    "ma" => "https://cu.distanceeducationschool.in/assets/brochures/MA.pdf",
    "mca" => "https://cu.distanceeducationschool.in/assets/brochures/MCA.pdf",
	"mjmc" => "https://cu.distanceeducationschool.in/assets/brochures/MJMC.pdf",
   "msc" => "https://cu.distanceeducationschool.in/assets/brochures/CU_University.pdf",
    "bjmc" => "https://cu.distanceeducationschool.in/assets/brochures/CU_University.pdf",
    "bba" => "https://cu.distanceeducationschool.in/assets/brochures/BBA.pdf",
    "bca" => "https://cu.distanceeducationschool.in/assets/brochures/BCA.pdf",
   
];

$redirect_url = $brochures[$course] ?? '';
?>
<!DOCTYPE html>
<html>
<head>
    <?php include "header.php"; ?>
    <title>CU Online</title>
    <meta name="description" content="">
    <style>
        .thanku { background-color: #fdfdfd; }
        .thanku h1, .thanku h4 { color: #000; }
    </style>

<!-- Event snippet for CU_IN conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-868968102/Ivg8CPWTjeoaEKbNrZ4D'});
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
                  <img src="assets/img/submission-confirm.gif" class="img-responsive">
                    <h1><strong>THANK YOU!</strong></h1>
                    <h4><strong>Your Submission has been received</strong></h4>
                    <?php if ($redirect_url): ?>
                        <p>You’ll be redirected to your brochure shortly...</p>
                        <!--<p><a href="<?php echo $redirect_url; ?>" target="_blank" style="font-size:14px;">Click here if not redirected</a></p>-->
                    <?php endif; ?>
                </center>
                <br>
                <div class="button">
                    <a href="https://cu.distanceeducationschool.in/">
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
