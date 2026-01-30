<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "header.php"; ?>
    <title>BOSSE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="#" />
</head>

<body>

    <?php include "navbar.php"; ?>

    <div id="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div id="banner-cont">
                        <div class="c1">
                            <img src="images/Azadi-Ka-Amrit-Mahotsav-Logo-PNG@zeevector.png">
                            <p>ISO 9001 : 2015 Certified</p>
                            <img src="images/G20_India_Logo.png">
                        </div>
                        <div class="c2">
                            <h1>Board of open schooling <br>& Skill Education</h1>
                            <p>BOSSE provides Education for Everyone with flexible learning, and Endless Possibilities

                            </p>
                            <button class='banner-btn' onclick="openPopup()">Get Free Counselling</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="d-none d-lg-block"> <img src="images/Bosse-image-3.webp"></div>
                    <div class="d-block d-lg-none"> <img src="images/Bosse-image-3.webp" width="100%">
                        <?php include "form.php"; ?></div>


                </div>
            </div>
        </div>
    </div>




    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>Board Of Open Schooling <span class="green">& Skill Education</span></h2>
                    <p>The Board of Open Schooling and Skill Education (BOSSE), established in 2020 by the Sikkim
                        Legislative Assembly, is a beacon of opportunity for individuals seeking flexible and accessible
                        education. BOSSE caters to diverse learners beyond the traditional schooling system, offering
                        secondary/senior secondary education and a range of skill development programs at the pre-degree
                        level. Whether you're a young school dropout seeking a second chance, a working professional
                        yearning to upskill, or simply someone confined by the traditional schooling system, BOSSE
                        whispers a powerful promise: learn your way at your pace and unlock your unique potential.
                    </p>
                    <br>
                    <h2> Equivalence and Recognition</h2>
                    <i class="fa fa-check-square" style="float:left; color:green; font-size:16px; margin-top:10px;"></i>
                    <p class='ab-text'> The Board of Open Schooling and Skill Education (BOSSE) was set up in 2020 by
                        the Sikkim Legislative Assembly. </p><br>

                    <i class="fa fa-check-square" style="float:left; color:green; font-size:16px; margin-top:10px;"></i>
                    <p class='ab-text'>
                        Association of Indian Universities (AIU): Grants equivalence status to BOSSE certificates for
                        higher education.</p> <br>

                    <i class="fa fa-check-square" style="float:left; color:green; font-size:16px; margin-top:10px;"></i>
                    <p class='ab-text'>National Institute of Open Schooling (NIOS): Recognizes BOSSE as a legitimate
                        open schooling provider.
                    </p>
                    <br>

                    <i class="fa fa-check-square" style="float:left; color:green; font-size:16px; margin-top:10px;"></i>
                    <p class='ab-text'>Council of Boards of School Education in India (COBSE): Recognizes BOSSE's
                        commitment to maintaining high standards.
                    </p>
                </div>

                <div class="col-md-4">
                    <div class="d-none d-lg-block">
                        <?php include "form.php"; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div id="Programs">
        <div class="container">
            <div class="row">
                <h2><b>Creating a Lifelong Learning</b><br>
                    Best Community</h2>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="program-box">
                        <center><i class="fa fa-building-o"
                                style="background-color:green; padding:12px 13px; color:#fff; border-radius:30px;"></i>
                        </center>

                        <h3>Secondary</h3>
                        <p>BOSSE Secondary Program offers a comprehensive curriculum focusing on academic rigor and
                            skill development to empower student.
                        </p>
                        <hr>
                        <a href='#secondry'><button id="secondry-btn" class="knowmore">Know More <i
                                    class="fa fa-angle-down"></i></button></a> <button class="apply"
                            onclick="openPopup()">Apply Now</button>
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="program-box">
                        <center><i class="fa fa-institution"
                                style="background-color:green; padding:12px 11px; color:#fff; border-radius:30px;"></i>
                        </center>
                        <h3>Senior Secondary</h3>
                        <p>BOSSE Senior Secondary Program provides advanced academic studies and specialised skill
                            training, preparing students for higher education</p>
                        <hr>
                        <a href='#senior-secondry'> <button id="knowmore-sr-sec" class="knowmore">Know More <i
                                    class="fa fa-angle-down"></i></button></a> <button class="apply"
                            onclick="openPopup()">Apply Now</button>
                    </div>
                </div>

                <div class="col-md-4">

                    <div class="program-box">
                        <center><i class="fa fa-television"
                                style="background-color:green; padding:12px 11px; color:#fff; border-radius:30px;"></i>
                        </center>
                        <h3>Vocational</h3>
                        <p>BOSSE Vocational ignites your talent with hands-on training, industry-aligned skills, and
                            real-world connections.</p>
                        <hr>
                        <a href='#vocational'> <button id="knowmore-vocationl" class="knowmore">Know More <i
                                    class="fa fa-angle-down"></i></button></a> <button class="apply"
                            onclick="openPopup()">Apply Now</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

    <div id='secondry' style="display:none;">
        <div class="container">
            <div class='row'>


                <span class="s1"><i class="fa fa-close" id="close-btn"></i> </span>

                <h2>Secondary Programme</h2>

                <p>Secondary Certificate is deemed equivalent to the tenth standard. To qualify for enrollment in the
                    Secondary Programme, individuals must be at least 15 years old before the examination. There are no
                    limitations on the selection of subjects and combinations, except for the requirement to include at
                    least one language.
                </p>

                <h3>Table 1 : List of Subjects for Academic Courses</h3>

                <div class="col-md-6">
                    <h5>Group A (Language Subjects)</h5>
                    <table>
                        <tr>
                            <th>SR. NO.</th>
                            <th>CODE</th>
                            <th>SUBJECT</th>
                        </tr>

                        <tr>
                            <td>1.</td>
                            <td>101</td>
                            <td>Hindi</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>102</td>
                            <td>English</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>103</td>
                            <td>Urdu</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>104</td>
                            <td>Sanskrit</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>105</td>
                            <td>Bengali</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>106</td>
                            <td>Punjabi</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>107</td>
                            <td>Assamese</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>108</td>
                            <td>Nepali</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>109</td>
                            <td>Odia</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>110</td>
                            <td>Kannada</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>111</td>
                            <td>Malayalam</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>112</td>
                            <td>Tamil</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>113</td>
                            <td>Telugu</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>114</td>
                            <td>Gujarati</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>115</td>
                            <td>Marathi</td>
                        </tr>
                    </table>
                </div>


                <div class="col-md-6">
                    <h5>Group B (Non Language Subjects)</h5>
                    <table>
                        <tr>
                            <th>SR. NO.</th>
                            <th>CODE</th>
                            <th>SUBJECT</th>
                        </tr>

                        <tr>
                            <td>1.</td>
                            <td>201</td>
                            <td>Mathematics</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>202</td>
                            <td>Science & Technology*</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>203</td>
                            <td>Social Science</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>204</td>
                            <td>Economics</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>205</td>
                            <td>Business Studies
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>206</td>
                            <td>Home Science & Human Ecology*
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>207</td>
                            <td>Psychology*</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>208</td>
                            <td>Indian Culture & Heritage</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>209</td>
                            <td>Accountancy
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>




    <div id='senior-secondry' style="display:none;">
        <div class="container">
            <div class='row'>
                <span class="s1"> <i class="fa fa-close" id="close-btn1"></i> </span>
                <h2>Senior Secondary Programmes -</h2>
                <p>BOSSE Senior Secondary Programme, equivalent to 12th standard, Those who complete the Secondary
                    program are eligible for Senior Secondary. Admission requires a self-attested copy of your Secondary
                    Certificate.</p>

                <h3>Table 1 : List of Subjects for Academic Courses</h3>

                <div class="col-md-6">
                    <h5>Group A (Language Subjects)</h5>
                    <table>
                        <tr>
                            <th>SR. NO.</th>
                            <th>CODE</th>
                            <th>SUBJECT</th>
                        </tr>

                        <tr>
                            <td>1.</td>
                            <td>301</td>
                            <td>Hindi</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>302</td>
                            <td>English</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>303</td>
                            <td>Urdu</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>304</td>
                            <td>Sanskrit</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>305</td>
                            <td>Bengali</td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>306</td>
                            <td>Punjabi</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>307</td>
                            <td>Kannada</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>308</td>
                            <td>Malayalam</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>309</td>
                            <td>Odia</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>310</td>
                            <td>Tamil</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>311</td>
                            <td>Telugu</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>312</td>
                            <td> Gujarati</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>313</td>
                            <td>Marathi</td>
                        </tr>

                    </table>
                </div>


                <div class="col-md-6">
                    <h5>Group B (Non-Language Subjects)</h5>
                    <table>
                        <tr>
                            <th>SR. NO.</th>
                            <th>CODE</th>
                            <th>SUBJECT</th>
                        </tr>

                        <tr>
                            <td>1.</td>
                            <td>401</td>
                            <td>Mathematics</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>402</td>
                            <td>Family & Community Studies*</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>403</td>
                            <td>Psychology*</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>404</td>
                            <td>Geography*</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>405</td>
                            <td>Economics</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>406</td>
                            <td>Business Studies</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>407</td>
                            <td>Physics*</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>408</td>
                            <td>History</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>409</td>
                            <td>Environmental Science & Sustainable Development*</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>410</td>
                            <td>Chemistry*</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>411</td>
                            <td>Political Science</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>412</td>
                            <td>Biology*</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>413</td>
                            <td>Accountancy</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>414</td>
                            <td>Law, Justice & Governance
                            </td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>415</td>
                            <td>Digital Literacy & Computer Science*
                            </td>
                        </tr>

                        <tr>
                            <td>16</td>
                            <td>416</td>
                            <td>Sociology
                            </td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>417</td>
                            <td>Tourism</td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>418</td>
                            <td>Physical Education and Yoga*
                            </td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>419</td>
                            <td>Biotechnology
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div id='vocational' style="display:none;">
        <div class="container">
            <div class='row'>
                <span class="s1"> <i class="fa fa-close" id="close-btn2"></i> </span>
                <h2>Skill and Vocational Education</h2>
                <p>Vocational education stands as a crucial pillar within all educational efforts. The National
                    Education Policy of 2020 places significant importance on this aspect, aiming to empower our youth
                    towards economic independence, enabling them to earn a livelihood with dignity.</p>

                <h3>Table 3: List of Vocational Education Courses offered by BOSSE in combination with Academic Courses

                </h3>

                <div class="col-md-6">
                    <h5>Secondary Level
                    </h5>
                    <table>
                        <tr>
                            <th>SR. NO.</th>
                            <th>CODE</th>
                            <th>SUBJECT</th>
                        </tr>

                        <tr>
                            <td>1.</td>
                            <td>224</td>
                            <td>Hindi</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>225</td>
                            <td>English</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>226</td>
                            <td>Urdu</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>227</td>
                            <td>Sanskrit</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>228</td>
                            <td>Bengali</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>229</td>
                            <td>Punjabi</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>230</td>
                            <td>Assamese</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>231</td>
                            <td>Nepali</td>
                        </tr>

                    </table>
                </div>


                <div class="col-md-6">
                    <h5>Senior Secondary Level
                    </h5>
                    <table>
                        <tr>
                            <th>SR. NO.</th>
                            <th>CODE</th>
                            <th>SUBJECT</th>
                        </tr>

                        <tr>
                            <td>1.</td>
                            <td>435</td>
                            <td>Library and Information Science
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>438</td>
                            <td>Secretarial Practice
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>439</td>
                            <td>Plant protection
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>440</td>
                            <td>Furntiture and Cabinet
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>441</td>
                            <td>Electro Plating
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>443</td>
                            <td>House Keeping
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>445 </td>
                            <td>Food Processing
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>447</td>
                            <td>Hotel Front Office Operation
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>448</td>
                            <td>Soil and Fertilizer Management
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>449 </td>
                            <td>Preservation of Fruits and Vegetables
                            </td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>450</td>
                            <td>Data Entry Operations
                            </td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>451</td>
                            <td>Painting & Drawing
                            </td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>452</td>
                            <td>Early Childhood Care & Education

                            </td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>453</td>
                            <td>Media & Communication Studies</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>454</td>
                            <td>Entrepreneurship</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div id="passing">
        <div class="container">
            <div class="row">
                <h2>The Pass/Certification criteria is given in the Table below:</h2><br><br>
                <div class="col-md-12" style="overflow-x:auto;">
                    <table>
                        <tr>
                            <th>Class/<br>Programme</th>
                            <th>Pass Criteria In Individual Subjects</th>
                            <th>Certification Criteria</th>
                        </tr>
                        <tr>
                            <td>Secondary</td>
                            <td>
                                <p>Candidate must have passed with 33% marks in the Theory & Practical</p>
                            </td>
                            <td>
                                <p>Pass in 5 subjects, including atleast one language.</p>
                            </td>

                        </tr>
                        <tr>
                            <td>Senior Secondary</td>
                            <td>
                                <p>Candidate must have passed with 33% marks in the Theory & Practical</p>
                            </td>
                            <td>
                                <p>Pass in 5 subjects, including atleast one language.</p>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>

    <section id="approvals">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <p>To Make Your Degree Worldwide Valid</p>
                    </center>
                    <h2>Approvals & Recognition</h2><br>
                </div>
            </div>
            <div class="row">
                <div class="slider owl-carousel">

                    <div class="slide">
                        <img src="images/cbse-bosse.webp">

                    </div>
                    <div class="slide">
                        <img src="images/esnr-bosse.webp">
                    </div>

                    <div class="slide">
                        <img src="images/mhrd-bosse.webp">
                    </div>
                    <div class="slide">
                        <img src="images/nios-bosse.webp">
                    </div>

                    <div class="slide">
                        <img src="images/wes-bosse.webp">
                    </div>


                </div>
            </div>
    </section>




    <section id="faqs">
        <div class="container">

            <h2>Frequently Asked Question</h2>
            <button class="accordion" id="defaultOpen">Why Choose BOSSE for Secondary and Senior Secondary?</button>
            <div class="panel">
                <p>
                    BOSSE offers a unique and flexible learning experience that caters to diverse needs and aspirations.
                    Here are some key reasons why choosing BOSSE could be the right choice for you:
                    Learn at your own pace,
                    No age restrictions and<br>Subject freedom<br>
                </p>
            </div>

            <button class="accordion">How to take Admission in BOSSE?
            </button>
            <div class="panel">
                <p>To secure admission in BOSSE, candidates typically apply online or through designated centers,
                    following the outlined procedure, which often involves submitting required documents and fulfilling
                    eligibility criteria.
                </p>
            </div>

            <button class="accordion">What are the eligibility Criteria for Secondary and Senior Secondary in
                BOSSE?</button>
            <div class="panel">
                <p>The eligibility criteria for Secondary (10th grade) and Senior Secondary (12th grade) in BOSSE
                    usually involve candidates being of the appropriate age and having passed the previous grade or
                    possessing equivalent qualifications as per the board's guidelines.</p>
            </div>


            <button class="accordion">Is BOSSE Entitled in COBSE?</button>
            <div class="panel">
                <p>BOSSE (Board of Open Schooling and Skill Education) may or may not be a member of COBSE (Council of
                    Boards of School Education in India). Specific accreditation status should be confirmed with the
                    respective boards or authorities.</p>
            </div>
        </div>
        </div>
    </section>

    <?php include "footer.php"; ?>
    <?php include "popup.php"; ?>


    <script>
    setTimeout(function() {
        $('#myModal').delay(800).fadeIn(400);
    }, 8000);
    </script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var firstAccordionButton = document.getElementById("defaultOpen");
        firstAccordionButton.click();
    });
    var acc = document.getElementsByClassName("accordion");
    var panels = document.getElementsByClassName("panel");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            for (var j = 0; j < panels.length; j++) {
                panels[j].style.display = "none";
                acc[j].classList.remove("active1");
            }

            this.classList.toggle("active1");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
    </script>


    <script>
    // Initialize Slider 2
    $(".slider").owlCarousel({
        items: 4, // Number of items to show
        loop: true,
        autoplay: true, // Autoplay
        autoplayTimeout: 2000, // Autoplay interval in milliseconds
        dots: true,
        navigation: true, // Enable navigation
        pagination: true,
        margin: 0, // Show dot navigation
        // Other configuration options
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        },
        autoplayHoverPause: true
    });
    </script>

    <script>
    document.getElementById("secondry-btn").onclick = function() {
        var subjectlist = document.getElementById('secondry');
        if (subjectlist.style.display === "block") {
            subjectlist.style.display = "none";
        } else {
            subjectlist.style.display = "block";
        }
    }

    document.getElementById("close-btn").onclick = function() {
        var subjectlist = document.getElementById('secondry');
        subjectlist.style.display = "none";
    }
    </script>

    <script>
    document.getElementById("knowmore-sr-sec").onclick = function() {
        var subjectlist1 = document.getElementById('senior-secondry');
        if (subjectlist1.style.display === "block") {
            subjectlist1.style.display = "none";

        } else {
            subjectlist1.style.display = "block";
        }
    }

    document.getElementById("close-btn1").onclick = function() {
        var subjectlist = document.getElementById('senior-secondry');
        subjectlist.style.display = "none";
    }
    </script>

    <script>
    document.getElementById("knowmore-vocationl").onclick = function() {
        var subjectlist1 = document.getElementById('vocational');
        if (subjectlist1.style.display === "block") {
            subjectlist1.style.display = "none";
        } else {
            subjectlist1.style.display = "block";
        }
    }
    document.getElementById("close-btn2").onclick = function() {
        var subjectlist = document.getElementById('vocational');
        subjectlist.style.display = "none";
    }
    </script>