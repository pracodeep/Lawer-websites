<!DOCTYPE html>
<html lang="en">

<?php include ("head.php") ?>

<body>
    <?php include "header.php" ?>

    <div class="page_header">
        <div class="page_header_content">
            <div class="container">
                <h2 class="heading">Contact Us</h2>
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="contact_inner service_bg" style="background: #FAF7F6;">
        <div class="service_another_bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact_box" data-aos="fade-up">
                            <div class="service_inner">
                                <div class="image">
                                    <img src="images/inner/icon-2.png" alt="service">
                                </div>
                                <div class="content">
                                    <h4>Office Address</h4>
                                    <p style="text-align: justify;">Advocate Neeraj Kumar Sharma 
                                    Chamber No - 496 , Patiala House Court, India Gate 110001.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact_box" data-aos="fade-up">
                            <div class="service_inner">
                                <div class="image">
                                    <img src="images/inner/icon.png" alt="service">
                                </div>
                                <div class="content py-2">
                                    <h4>Phone No</h4>
                                    <p>+91 9870362478<br/>
                                    +91 9996742962<br/>
                                    What's App No. <br/> +91 9870362478</p>
                                    <!-- <p>+987 654 321 23</p> -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact_box" data-aos="fade-up">
                            <div class="service_inner">
                                <div class="image">
                                    <img src="images/inner/icon-1.png" alt="service">
                                </div>
                                <div class="content py-2">
                                    <h4>Email Address</h4>

                                    <p>adv.nkndps@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form contact_form_page">
                    <form class="contact_form" data-aos="fade-up" method="post" action="mail.php">
                        <div class="form-container">
                            <div class="row ">
                                <div class="col-lg-12">
                                    <div class="heading_common text-center" data-aos="fade-up">

                                        <h3>Get In Touch</h3>

                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-8 offset-lg-2 ">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-6">
                                            <div class="form-group" data-aos="fade-up">
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Your Name" required="">
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-6">
                                            <div class="form-group" data-aos="fade-up">
                                                <input type="email" name="email" class="form-control"
                                                    placeholder="Email Address" required="">
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-6">
                                            <div class="form-group" data-aos="fade-up">
                                                <input type="phone" name="phone" class="form-control"
                                                    placeholder="Phone Number" required="">
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-6">
                                            <div class="form-group" data-aos="fade-up">
                                                <input type="text" name="subject" class="form-control"
                                                    placeholder="Your Subject" required="">
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-12">
                                            <div class="form-group" data-aos="fade-up">
                                                <textarea name="message" class="form-control" placeholder="Message*"
                                                    required=""></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12 mt-4">
                                            <div class="form-group text-center" data-aos="fade-up">
                                              <button  type="submit" class="btn_one btn">SEND MAIL</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <?php include "footer.php" ?>
</body>

</html>