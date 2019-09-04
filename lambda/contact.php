<?php include 'header.php';?>
 <!-- BREADCRUMB -->
    <section class="c-breadcrumb">
        <div class="container">
            <div class="row">
                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>|</li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- BREADCRUMB -->

    <section class="connect">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="connect-form">
                        <h2>Contact us about anything related to our company or services. We'll do our best to get back to you
                            as soon as possible.</h2>

                        <form class="" method="post" action="contact_us.php" onsubmit="return(validateForm());">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" required="" class="form-control aos-init" name="name" id="contact_name" onkeyup="validateName()" placeholder="Full name">
                                    <span class="error-message" id="name-error"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="email" required="" class="form-control aos-init" name="email" id="contact_email" onkeyup="validateEmail()" placeholder="Email">
                                    <span class="error-message" id="email-error"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" required="" class="form-control aos-init" name="number" min="1" id="contact_phone" onkeyup="validatePhone()"
                                        placeholder="Phone">
                                    <span class="error-message" id="phone-error"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control aos-init" name="subject" id="contact_subject" placeholder="Subject">

                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control aos-init" required="" rows="5" name="comment" id="contact_comment" onkeyup="validateMessage()"
                                    placeholder="What's on your mind ?"></textarea>
                                <span class="error-message" id="message-error"></span>
                            </div>
                            <input type="submit" value="Submit" class="btn btn-default aos-init mt30 hvr-pulse">
                            <!-- <a href="contact_us.php"></a> -->
                            <span class="error-message" id="submit-error"></span>
                        </form>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-3">
                    <h2>Get in Touch</h2>


                    <div class="main-address">
                        <p>
                            <i class="fa fa-home"></i>
                            Pokhara - 6, Lakeside</p>
                        <p>
                            <a href="tel:
                                000000">
                                <i class="fa fa-phone"></i>
                                023 456 789</a>
                        </p>
                        <p>
                            <a href="mail:company@company.com">
                                <i class="fa fa-envelope"></i> company@company.com</a>
                        </p>
                    </div>
                    <ul class="social-icons">
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook hvr-pulse"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </section>


    <section class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3516.066016303206!2d83.9594477143967!3d28.205306810040167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995951b4c297003%3A0x154f5b2110323833!2sLakeside+Rd%2C+Pokhara+33700!5e0!3m2!1sen!2snp!4v1557228354847!5m2!1sen!2snp"
            width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>

<?php include 'footer.php';?>