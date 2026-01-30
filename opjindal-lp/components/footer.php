<div class="doubt">
<div class="container">
    <div class="doubt-section">
      <h2>Have Doubt?<br/>Talk to Our Expert</h2>
 <center> <button class="enquireNowBtn">Enquire Now</button></center>
    </div>
    </div>
</div>
<?php include 'popup.php'; ?>

    <div id="footer">
    <div class="container">
    <div class="footer-section">
            <div class="footer-column">
                <img src="assets/images/op-jindal-white-logo.webp" alt="logo-img" width="100%"/>
                <p>Sonipat Narela Road, Near Jagdishpur Village, Sonipat, Haryana 131001</p>
            </div>
            <div class="footer-column">
                <h2>Online Program</h2>
               
				<p>MBA in Human Resource Management</p>
				<p>MBA in Finance</p>
				<p>MBA in Marketing</p>
				<p>MBA in Supply chain and Operations</p>
				<p>MBA in AI for Business</p>
				<p>MBA in Digital Finance</p>
				<p>MBA in Strategy and Leadership</p>
         
				<p>BBA in Human Resource Management</p>
				<p>BBA in Finance</p>
				<p>BBA in Marketing</p>
				<p>BBA in Operation</p>
				
				<p>LL.M. in AI and Emerging Technologies</p>
				<p>LL.M. in Corporate and Financial Law</p>
				<p>LL.M. in Intellectual Property & Technology Law</p>
				<p>LL.M. in Dispute Resolution</p>
            </div>
            <div class="footer-column">
                <h2>Accreditaion & Approvals</h2>
                <p>University Grants Commission (UGC)</p>
                <p>All India University (AIU)</p>
                <p>Ministry of Human Resource Development (MHRD)</p>
                <p>National Accreditation and Assessment Council (NAAC)</p>
                <p>Bar Council of India (BCI)</p>
                <br/>
            </div> 
        </div>
    </div>
</div>


<div id="footer-bottom-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <!--<p>Home | About | Courses | FAQ</p>-->
            <center><hr/></center>
            <p>&copy; <?php echo date("Y"); ?> OP Jindal University All rights reserved.</p>
            </div>
        </div>
    </div>
</div>

<script>
//     start on scroll popup

  window.addEventListener('scroll', function () {
    const scrollableHeight = document.documentElement.scrollHeight - window.innerHeight;
    const scrolledPercentage = (window.scrollY / scrollableHeight) * 100;

    if (scrolledPercentage >= 50) {
      const modal = document.getElementById('myModal');
      modal.style.display = 'flex';
      window.removeEventListener('scroll', arguments.callee);
    }
  });

  document.getElementById('closeButton').addEventListener('click', function () {
    const modal = document.getElementById('myModal');
    modal.style.display = 'none';
  });
    </script>