<?php include "includes/header.php"; ?>

<div class="wrapper">
    <div class="restaurants--bg-image hero-image">
        <div class="container"></div>
    </div>

    <section class="contact">
        <div class="container wow animated fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>leave a message here</h2>
                    </div>
                    <div class="widget">
                        <div class="widget-body">
                            <form method="post" id="contact-form" action="mail.php">
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <input class="form-control input--orange" type="text" id="name" placeholder="Name *" name="name">
                                    </div><!--end form group-->
                                    <div class="form-group col-sm-6">
                                        <input class="form-control input--orange" type="email" id="email" placeholder="Email *" name="email">
                                    </div><!--end form group-->
                                    <div class="form-group col-sm-6">
                                        <input class="form-control input--orange" type="text" id="phone_number" placeholder="Phone Number" name="phone">
                                    </div><!--end form group-->
                                    <div class="form-group col-sm-6">
                                        <input class="form-control input--orange" type="text" id="subject" placeholder="How can we help you? *" name="subject">
                                    </div><!--end form group-->
                                    <div class="form-group col-sm-12">
                                        <textarea class="form-control input--orange" id="message" rows="8" placeholder="Message *" name="message"></textarea>
                                    </div><!--end form group-->
                                </div><!--end row-->
                                <div class="row">
                                    <div class="col-sm-2">
                                        <input class="form-control btn btn--radius-rest btn--medium btn--m-3 btn--orange mt-0" type="submit" id="contact-submit" value="Send Message">
                                    </div>
                                </div><!--end row-->
                            </form><!--end form-->
                        </div><!--end widget body-->
                    </div><!--end widget-->
                </div><!--end column-->
            </div>
        </div>
    </section>

    <section class="info" id="info-section">
        <div class="container">
            <div class="row clearfix">
                <div class="info__column col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="info__column-header"><h3>address</h3></div>
                    <div class="info__box">
                        <div class="info__inner">
                            <div class="info__icon"><span class="fa fa-map-marker"></span></div>
                            <h4>address</h4>
                            <div class="info__text">#29/B 2GM OMBR BENGALURU 560043 KA IN</div>
                        </div>
                    </div>
                </div>
                <div class="info__column col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="info__column-header"><h3>call now</h3></div>
                    <div class="info__box">
                        <div class="info__inner">
                            <div class="info__icon"><span class="fa fa-phone"></span></div>
                            <h4>call to us</h4>
                            <div class="info__text">+91 720 491 0178</div>
                        </div>
                    </div>
                </div>
                <div class="info__column col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="info__column-header"><h3>email us</h3></div>
                    <div class="info__box">
                        <div class="info__inner">
                            <div class="info__icon"><span class="fa fa-envelope"></span></div>
                            <h4>email</h4>
                            <div class="info__text"><a href="mailto:info@kwiqpick.com?subject=" target="_self">info@kwiqpick.com</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--end info-->

    <section class="map">
        <div class="map__outer">

            <!--Map Canvas-->
            <div class="map-canvas"
                 data-zoom="15"
                 data-lat="13.009171"
                 data-lng="77.649447"
                 data-type="roadmap"
                 data-hue="#cb212c"
                 data-title="Kwiqpick"
                 data-content="Kwiqpick Services India Private Limited , Bengaluru<br><a href='mailto:info@kwiqpick.com'>info@kwiqpick.com</a>"
                 style="height:450px;">
            </div>

        </div>
    </section>
</div>

<?php include "includes/footer.php"; ?>
