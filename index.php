<?php include "includes/header.php"; ?>

<!--Hero Section-->
<section id="section-home" class="home">
    <div class="overlay">
        <div class="container">
            <div class="col-md-12">
                <div class="home__container"><!--Start Content Container-->

                    <div class="home__logo">
                        <a href="index.php">
                            <img src="assets/images/KP_Logo_100x100.png" alt="logo">
                        </a>
                    </div><!--end logo-->

                    <div class="home__text"><!--start home text-->
                        <h1>Kwiqpick is your new digital waiter</h1>
                    </div><!--end home text-->

                    <div class="form__search"><!--start home search form-->
                        <form class="form-inline">
                            <div class="form-group">
                                <label class="sr-only" for="restaurant">Restaurants, Events, Menus</label>
                                <div class="form-group input--restaurants">
                                    <input type="text" class="input--orange" id="restaurant" placeholder="Search for Restaurants, Events, Menus">
                                </div>
                                <input type="submit" class="btn btn--radius-rest btn--large btn--m-3 btn--orange" value="Search Food">
                            </div>
                        </form>
                    </div><!--end home search form-->

                </div><!--end Content Container-->
            </div><!--end column-->
        </div><!--end container-->
    </div><!--end overlay-->
</section><!--end home-->

<!--Download Section-->
<section id="section-download" class="download lazyload">
    <div class="download__app">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="col-xs-12 col-md-5 download__kwiqpick-right--image  wow fadeInLeft">
                        <figure>
                            <img data-src="assets/images/kwqipick-app.png" alt="Kwiqpick App"  height="339" class="lazyload">
                        </figure><!--end kwiqpick image-->
                    </div><!--end image on right-->
                    <div class="col-xs-12 col-md-7 download__kwiqpick-left--text wow fadeInRight">
                        <h3>digital waiter app</h3>
                        <p>Kwiqpick doesn't make its customers wait. It simply allows diners to check-in at any table of a participating dining outlet - Restaurant or Pub - and start ordering ones food and drinks.</p>
                        <div class="playstore-btn ml-12">
                            <a href="https://play.google.com/store/apps/details?id=com.awatasoftsys.kwiqpick&hl=en" class="clearfix" target="_blank">
                                <img src="assets/images/google_play.png" width="180px" height="80px">
                            </a>
                        </div><!--end playstore btn-->
                    </div><!--end text on left side-->
                </div><!--end container-->
            </div><!--end row-->
        </div><!--end container-->
    </div><!--end download--app-->
</section><!--end download section-->

<?php include "includes/footer.php"; ?>