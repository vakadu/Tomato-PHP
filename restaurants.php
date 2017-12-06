<?php include "includes/header.php"; ?>

<?php

//sql queries and php variables goes here

?>

<div class="wrapper">
    <div class="restaurants--bg-image hero-image">
        <div class="container"></div>
    </div>
    <!--Restaurants-->
    <section id="section-restaurants">
        <div class="container restaurant-container">
            <div class="row">
                <div class="col-xs-12 col-md-5 col-lg-3">
                    <div class="sidebar clearfix mb-20 mt-20">
                        <div class="sidebar__main-block">
                            <div class="sidebar-title white-text">
                                <h6>Filters</h6> <i class="fa fa-cutlery right"></i>
                            </div><!--end restaurants title-->

                            <form>
                                <ul>
                                    <li>
                                        <label class="kwiqpick--controls kwiqpick--checkbox">
                                            <input type="checkbox" class="kwiqpick--controls-input"><span class="kwiqpick--controls-indicator"></span><span class="kwiqpick--controls-desc">Cuisine</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="kwiqpick--controls kwiqpick--checkbox">
                                            <input type="checkbox" class="kwiqpick--controls-input"><span class="kwiqpick--controls-indicator"></span><span class="kwiqpick--controls-desc">Veg only</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="kwiqpick--controls kwiqpick--checkbox">
                                            <input type="checkbox" class="kwiqpick--controls-input"><span class="kwiqpick--controls-indicator"></span><span class="kwiqpick--controls-desc">Alcohol</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="kwiqpick--controls kwiqpick--checkbox">
                                            <input type="checkbox" class="kwiqpick--controls-input"><span class="kwiqpick--controls-indicator"></span><span class="kwiqpick--controls-desc">Parking</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="kwiqpick--controls kwiqpick--checkbox">
                                            <input type="checkbox" class="kwiqpick--controls-input"><span class="kwiqpick--controls-indicator"></span><span class="kwiqpick--controls-desc">Dance Floor</span>
                                        </label>
                                    </li>
                                </ul>
                            </form><!--end form-->
                            <div class="clearfix"></div>

                        </div><!--end block-->
                    </div><!--end sidebar-->
                </div><!--end column-->

                <div class="col-xs-12 col-md-7 col-lg-9 mt-20">
                    <div class="restaurants__open-point bg-grey">
                        <div class="row">

                            <?php

                            //php loop goes here

                            ?>
                            <div class="col-sm-12 col-md-12 col-lg-8">
                                <div class="restaurants__open-point__logo">
                                    <a class="img-responsive" href="#">
                                        <img src="http://placehold.it/110x110" alt="Restaurant">
                                    </a>
                                </div><!--end restaurant logo-->
                                <div class="restaurants__open-point__desc">
                                    <h5><a href="#">Faasos</a></h5>
                                    <span>Fast Food, North Indian, Rolls</span>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-check"></i> Min &#x20b9;300</li>
                                    </ul>
                                    <span>Accepts cash & online payments</span>
                                </div><!--end restaurant description-->
                            </div><!--end column-->

                            <?php
                            //php loop ends here
                            ?>

                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <div class="restaurants__content-right bg-white">
                                    <div class="restaurants__content-right__review">
                                        <div class="restaurants__content-right__review-block mb-20">
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i>
                                        </div>
                                        <a href="menu.php" class="btn btn--small mr-5 btn--flat-line" title="View Menu">Menu</a>
                                        <a href="re" class="btn btn--small btn--flat-line ">Reserve</a>
                                    </div>
                                </div><!--end content right-->
                            </div><!--end column-->
                        </div><!--end row-->
                    </div><!--end restaurant entry-->

                    <div class="restaurants__open-point bg-grey">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-8">
                                <div class="restaurants__open-point__logo">
                                    <a class="img-responsive" href="#">
                                        <img src="http://placehold.it/110x110" alt="Restaurant">
                                    </a>
                                </div><!--end restaurant logo-->
                                <div class="restaurants__open-point__desc">
                                    <h5><a href="#">Chung's Chinese Corner</a></h5>
                                    <span>Chinese</span>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-check"></i> Cost &#x20b9;300 for one</li>
                                    </ul>
                                    <span>Accepts cash & online payments</span>
                                </div><!--end restaurant description-->
                            </div><!--end column-->

                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <div class="restaurants__content-right bg-white">
                                    <div class="restaurants__content-right__review">
                                        <div class="restaurants__content-right__review-block mb-20">
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i>
                                        </div>
                                        <a href="menu.php" class="btn btn--small mr-5 btn--flat-line" title="View Menu">Menu</a>
                                        <a href="" class="btn btn--small btn--flat-line ">Reserve</a>
                                    </div>
                                </div><!--end content right-->
                            </div><!--end column-->
                        </div><!--end row-->
                    </div><!--end restaurant entry-->

                    <div class="restaurants__open-point bg-grey">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-8">
                                <div class="restaurants__open-point__logo">
                                    <a class="img-responsive" href="#">
                                        <img src="http://placehold.it/110x110" alt="Restaurant">
                                    </a>
                                </div><!--end restaurant logo-->
                                <div class="restaurants__open-point__desc">
                                    <h5><a href="#">Donne Biriyani Mane</a></h5>
                                    <span>Biriyani</span>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-check"></i> Min &#x20b9;90</li>
                                    </ul>
                                    <span>Accepts cash & online payments</span>
                                </div><!--end restaurant description-->
                            </div><!--end column-->

                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <div class="restaurants__content-right bg-white">
                                    <div class="restaurants__content-right__review">
                                        <div class="restaurants__content-right__review-block mb-20">
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i>
                                        </div>
                                        <a href="menu.php" class="btn btn--small mr-5 btn--flat-line" title="View Menu">Menu</a>
                                        <a href="" class="btn btn--small btn--flat-line ">Reserve</a>
                                    </div>
                                </div><!--end content right-->
                            </div><!--end column-->
                        </div><!--end row-->
                    </div><!--end restaurant entry-->

                    <div class="restaurants__open-point bg-grey">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-8">
                                <div class="restaurants__open-point__logo">
                                    <a class="img-responsive" href="#">
                                        <img src="http://placehold.it/110x110" alt="Restaurant">
                                    </a>
                                </div><!--end restaurant logo-->
                                <div class="restaurants__open-point__desc">
                                    <h5><a href="#">Cafe Coffee Day</a></h5>
                                    <span>Coffee</span>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-check"></i> Min &#x20b9;99</li>
                                    </ul>
                                    <span>Accepts cash & online payments</span>
                                </div><!--end restaurant description-->
                            </div><!--end column-->

                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <div class="restaurants__content-right bg-white">
                                    <div class="restaurants__content-right__review">
                                        <div class="restaurants__content-right__review-block mb-20">
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i>
                                        </div>
                                        <a href="menu.php" class="btn btn--small mr-5 btn--flat-line" title="View Menu">Menu</a>
                                        <a href="" class="btn btn--small btn--flat-line ">Reserve</a>
                                    </div>
                                </div><!--end content right-->
                            </div><!--end column-->
                        </div><!--end row-->
                    </div><!--end restaurant entry-->

                    <div class="restaurants__open-point bg-grey">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-8">
                                <div class="restaurants__open-point__logo">
                                    <a class="img-responsive" href="#">
                                        <img src="http://placehold.it/110x110" alt="Restaurant">
                                    </a>
                                </div><!--end restaurant logo-->
                                <div class="restaurants__open-point__desc">
                                    <h5><a href="#">Brewklyn Microbrewery</a></h5>
                                    <span>American, South Indian, Thai, Pizza...</span>
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-check"></i> Cost &#x20b9;650 for one</li>
                                    </ul>
                                    <span>Accepts cash & online payments</span>
                                </div><!--end restaurant description-->
                            </div><!--end column-->

                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <div class="restaurants__content-right bg-white">
                                    <div class="restaurants__content-right__review">
                                        <div class="restaurants__content-right__review-block mb-20">
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i>
                                        </div>
                                        <a href="menu.php" class="btn btn--small mr-5 btn--flat-line" title="View Menu">Menu</a>
                                        <a href="" class="btn btn--small btn--flat-line ">Reserve</a>
                                    </div>
                                </div><!--end content right-->
                            </div><!--end column-->
                        </div><!--end row-->
                    </div><!--end restaurant entry-->

                </div><!--end column-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end restaurants-->
</div>

<?php include "includes/footer.php"; ?>