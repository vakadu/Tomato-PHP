<?php include "includes/header.php"; ?>

<div class="wrapper">
    <section class="menu--bg-image hero-image profile__restaurant">
        <div class="container menu-container">
            <div class="row">
                <div class="col-xs-12 col-md-4 col-lg-4 profile__restaurant-img">
                    <div class="profile__restaurant-img__wrap">
                        <figure>
                            <img src="http://placehold.it/240x140" alt="Restaurant Image">
                        </figure>
                    </div><!--end img wrap-->
                </div><!--end column-->

                <div class="col-xs-12 col-md-8 col-lg-8 profile__restaurant-desc">
                    <div class="pull-left profile__restaurant__right-text white-text">
                        <h6><a href="#">faasos</a></h6> <a class="btn btn--xs btn--green">Open</a>
                        <p>Fast Food, North Indian, Rolls</p>
                        <ul class="nav nav-inline">
                            <li class="nav-item"><i class="fa fa-check"></i> Min &#x20b9;300</li>
                            <li class="nav-item ratings">
                            <span>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </span>
                            </li>
                        </ul>
                    </div>
                </div><!--end column-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section menu bg-->

    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="widget">
                        <div class="widget-body">
                            <form>
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="reservation-time">Reservation Time</label>
                                        <input class="form-control input--orange" type="text" value="" id="datepicker" placeholder="Reservation Time">
                                    </div><!--end form group-->
                                    <div class="form-group col-sm-12">
                                        <label for="restaurant-name">Restaurant Name</label>
                                        <input class="form-control input--orange" type="text" value="" id="restaurant-name" placeholder="Eg. Kritunga">
                                    </div><!--end form group-->
                                    <div class="form-group col-sm-12">
                                        <label for="restaurant-address">Restaurant Address</label>
                                        <input class="form-control input--orange" type="text" value="" id="restaurant-address" placeholder="Eg. Marathahalli">
                                    </div><!--end form group-->
                                    <div class="form-group col-sm-12">
                                        <label for="restaurant-branch">Restaurant Branch</label>
                                        <input class="form-control input--orange" type="text" value="" id="restaurant-branch" placeholder="Eg. Marathahalli">
                                    </div><!--end form group-->
                                    <div class="form-group col-sm-12">
                                        <label for="restaurant-email">Email</label>
                                        <input class="form-control input--orange" type="text" value="" id="restaurant-email" placeholder="Eg. kritunga@gmail.com">
                                    </div><!--end form group-->
                                    <div class="form-group col-sm-12">
                                        <label for="restaurant-mobile">Phone No.</label>
                                        <input class="form-control input--orange" type="text" value="" id="restaurant-mobile" placeholder="Eg. +91 9874561235">
                                    </div><!--end form group-->
                                </div><!--end row-->
                                <div class="row">
                                    <div class="col-sm-4">
                                        <input class="form-control btn btn--radius-rest btn--large btn--m-3 btn--orange" type="submit" id="restaurant-submit" value="Submit">
                                    </div>
                                </div><!--end row-->
                            </form><!--end form-->
                        </div><!--end widget body-->
                    </div><!--end widget-->
                </div><!--end column-->

                <div class="col-md-4">
                    <h4>Reservation is fast, easy and free</h4>
                    <p>Once reservation is completed. You can:</p>
                    <ul class="list-check list-unstyled">
                        <li>Buy, sell, and interact with other members.</li>
                        <li>Save your favorite searches and get notified.</li>
                        <li>Watch the status of up to 200 items.</li>
                        <li>View your information from any computer in the world.</li>
                        <li>Connect with the Atropos community.</li>
                    </ul>
                    <hr>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" class="panel-toggle collapsed" href="#faq1" aria-expanded="false"><i class="ti-info-alt" aria-hidden="true"></i>Can I viverra sit amet quam eget lacinia?</a></h4> </div>
                        <div class="panel-collapse collapse" id="faq1" aria-expanded="false" role="article" style="height: 0px;">
                            <div class="panel-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rutrum ut erat a ultricies. Phasellus non auctor nisi, id aliquet lectus. Vestibulum libero eros, aliquet at tempus ut, scelerisque sit amet nunc. Vivamus id porta neque, in pulvinar ipsum. Vestibulum sit amet quam sem. Pellentesque accumsan consequat venenatis. Pellentesque sit amet justo dictum, interdum odio non, dictum nisi. Fusce sit amet turpis eget nibh elementum sagittis. Nunc consequat lacinia purus, in consequat neque consequat id. </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" class="panel-toggle collapsed" href="#faq2" aria-expanded="false"><i class="ti-info-alt" aria-hidden="true"></i>Can I viverra sit amet quam eget lacinia?</a></h4> </div>
                        <div class="panel-collapse collapse" id="faq2" aria-expanded="false" role="article" style="height: 0px;">
                            <div class="panel-body"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam rutrum ut erat a ultricies. Phasellus non auctor nisi, id aliquet lectus. Vestibulum libero eros, aliquet at tempus ut, scelerisque sit amet nunc. Vivamus id porta neque, in pulvinar ipsum. Vestibulum sit amet quam sem. Pellentesque accumsan consequat venenatis. Pellentesque sit amet justo dictum, interdum odio non, dictum nisi. Fusce sit amet turpis eget nibh elementum sagittis. Nunc consequat lacinia purus, in consequat neque consequat id. </div>
                        </div>
                    </div>
                </div><!--end column-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end contact-->
</div>

<?php include "includes/footer.php"; ?>
