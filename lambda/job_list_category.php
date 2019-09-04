<?php get_header();?>
<!-- JOB CATEGORY PAGE -->
<section class="job-list-category">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <aside class="sidebar">
                        <div class="sideblock">
                            <form>
                                <div class="form-group">
                                        <select class="form-control" id="sel1">
                                                <option>Category</option>
                                          <option>Accountancy</option>
                                          <option>Administration</option>
                                          <option>Advertising</option>
                                          <option>Many More</option>
                                        </select>
                                </div>
                                <div class="form-group">
                                        
                                        <select class="form-control" id="sel1">
                                                <option>Location   </option>
                                          <option>Aveiro   </option>
                                          <option>Beja</option>
                                          <option>Braga</option>
                                          <option>Many More</option>
                                        </select>
                                </div>
                            </form>
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                Job Type</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <ul>
                                                <li>
                                                    <a href="#">Full Time</a>
                                                </li>
                                                <li>
                                                    <a href="#">Part Time</a>
                                                </li>
                                                <li>
                                                    <a href="#">Freelance</a>
                                                </li>
                                                <li>
                                                    <a href="#">Temporary</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo"> Experience </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <ul>
                                                <li>
                                                    <a href="#">Fresh</a>
                                                </li>
                                                <li>
                                                    <a href="#">Less Than 1 year</a>
                                                </li>
                                                <li>
                                                    <a href="#">2 Year</a>
                                                </li>
                                                <li>
                                                    <a href="#">3 Year</a>
                                                </li>
                                                <li>
                                                    <a href="#">4 Year</a>
                                                </li>
                                                <li>
                                                    <a href="#">5 Year</a>
                                                </li>
                                                <li>
                                                    <a href="#">Above 5 Year</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">Date Posted</a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <ul>
                                                <li>
                                                    <a href="#">Last Hour</a>
                                                </li>
                                                <li>
                                                    <a href="#">Last 24 Hour</a>
                                                </li>
                                                <li>
                                                    <a href="#">Last 7 Days</a>
                                                </li>
                                                <li>
                                                    <a href="#">Last 15 Days</a>
                                                </li>
                                                <li>
                                                    <a href="#">Last 1 Month</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFour">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false"
                                                aria-controls="collapseFour">Salary Range</a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingFour">
                                        <div class="panel-body">
                                            <div class="slider-handle">
                                                <div id="slider-range" class="product-range-slide"></div>
                                                <div class="slider-range-wrapper clearfix">
                                                   
                                                    <span class="price-to " id="range-price">Price: $0 - $999</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFive">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false"
                                                aria-controls="collapseFive">Gender</a>
                                        </h4>
                                    </div>
                                    <div id="collapseFive" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingFive">
                                        <div class="panel-body">
                                            <ul>
                                                <li>
                                                    <a href="#">Male</a>
                                                </li>
                                                <li>
                                                    <a href="#">Female</a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </aside>
                </div>
                <div class="col-md-9">
                    <div class="product-wrapper">
                        <div class="product-pager clearfix">
                            <form class="pull-left">
                                <div class="input-group">
                                    <div class="oe_search">
                                        <input type="text" name="search" class="form-control" placeholder="Search..." value="">
                                    </div>
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                            <div class="toolbox pull-right">
                                <div class="toolbox-item toolbox-show">
                                    <label>Showing 1–9 of 60 results</label>
                                </div>
                                <div class="toolbox-item toolbox-sort">
                                    <div class="select-custom">
                                        <select name="orderby" class="form-control">
                                            <option value="menu_order" selected="selected">Most Recent</option>
                                            <option value="popularity">Popular Jobs</option>
                                            <option value="rating">Most Rated</option>
                                            <option value="price">Top Salary</option>
                                        </select>
                                    </div>
                                    <!-- End .select-custom -->
                                </div>
                            </div>
                        </div>


                        <div class="row job-row">

                            <div class="col-md-8">
                                <div class="img-thumb job-half">
                                    <a href="#">
                                        <img src="http://localhost/wordpress_themes/wp-content/uploads/2019/04/company-logo-9.png" />
                                    </a>
                                </div>
                                <div class="job-details job-half">
                                    <h3>
                                        <a href="#">Restaurant Team Member - Crew</a>
                                    </h3>
                                    <ul class="job-details-row">
                                        <li class="job-title">
                                            <a href="#">
                                                <i class="fa fa-briefcase"></i> Gelogitic
                                                <a></a>
                                        </li>
                                        <li class="job-location">
                                            <a href="#">
                                                <i class="fa fa-map-marker"></i> Lisbon </a>
                                        </li>
                                        <li class="job-type-full">
                                            <a href="#">
                                                <i class="fa fa-clock-o"></i> Full Time </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-md-4">

                                <div class="apply-btns  mt-20">
                                    <a href="#" class=" btn-love ">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a href="#" class="btn btn-send ">
                                        <i class="fa fa-paper-plane"></i> Apply Now</a>
                                </div>
                                <p class="deadline text-center mt-15">
                                    <strong>Deadline :</strong> 2019-05-30</p>
                            </div>

                        </div>
                        <div class="row job-row">

                            <div class="col-md-8">
                                <div class="img-thumb job-half">
                                    <a href="#">
                                        <img src="http://localhost/wordpress_themes/wp-content/uploads/2019/04/company-logo-9.png" />
                                    </a>
                                </div>
                                <div class="job-details job-half">
                                    <h3>
                                        <a href="#">Restaurant Team Member - Crew</a>
                                    </h3>
                                    <ul class="job-details-row">
                                        <li class="job-title">
                                            <a href="#">
                                                <i class="fa fa-briefcase"></i> Gelogitic
                                                <a></a>
                                        </li>
                                        <li class="job-location">
                                            <a href="#">
                                                <i class="fa fa-map-marker"></i> Lisbon </a>
                                        </li>
                                        <li class="job-type-full">
                                            <a href="#">
                                                <i class="fa fa-clock-o"></i> Full Time </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-md-4">

                                <div class="apply-btns  mt-20">
                                    <a href="#" class=" btn-love ">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a href="#" class="btn btn-send ">
                                        <i class="fa fa-paper-plane"></i> Apply Now</a>
                                </div>
                                <p class="deadline text-center mt-15">
                                    <strong>Deadline :</strong> 2019-05-30</p>
                            </div>

                        </div>
                        <div class="row job-row">

                            <div class="col-md-8">
                                <div class="img-thumb job-half">
                                    <a href="#">
                                        <img src="http://localhost/wordpress_themes/wp-content/uploads/2019/04/company-logo-9.png" />
                                    </a>
                                </div>
                                <div class="job-details job-half">
                                    <h3>
                                        <a href="#">Restaurant Team Member - Crew</a>
                                    </h3>
                                    <ul class="job-details-row">
                                        <li class="job-title">
                                            <a href="#">
                                                <i class="fa fa-briefcase"></i> Gelogitic
                                                <a></a>
                                        </li>
                                        <li class="job-location">
                                            <a href="#">
                                                <i class="fa fa-map-marker"></i> Lisbon </a>
                                        </li>
                                        <li class="job-type-full">
                                            <a href="#">
                                                <i class="fa fa-clock-o"></i> Full Time </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-md-4">

                                <div class="apply-btns  mt-20">
                                    <a href="#" class=" btn-love ">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a href="#" class="btn btn-send ">
                                        <i class="fa fa-paper-plane"></i> Apply Now</a>
                                </div>
                                <p class="deadline text-center mt-15">
                                    <strong>Deadline :</strong> 2019-05-30</p>
                            </div>

                        </div>
                        <div class="row job-row">

                            <div class="col-md-8">
                                <div class="img-thumb job-half">
                                    <a href="#">
                                        <img src="http://localhost/wordpress_themes/wp-content/uploads/2019/04/company-logo-9.png" />
                                    </a>
                                </div>
                                <div class="job-details job-half">
                                    <h3>
                                        <a href="#">Restaurant Team Member - Crew</a>
                                    </h3>
                                    <ul class="job-details-row">
                                        <li class="job-title">
                                            <a href="#">
                                                <i class="fa fa-briefcase"></i> Gelogitic
                                                <a></a>
                                        </li>
                                        <li class="job-location">
                                            <a href="#">
                                                <i class="fa fa-map-marker"></i> Lisbon </a>
                                        </li>
                                        <li class="job-type-full">
                                            <a href="#">
                                                <i class="fa fa-clock-o"></i> Full Time </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-md-4">

                                <div class="apply-btns  mt-20">
                                    <a href="#" class=" btn-love ">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a href="#" class="btn btn-send ">
                                        <i class="fa fa-paper-plane"></i> Apply Now</a>
                                </div>
                                <p class="deadline text-center mt-15">
                                    <strong>Deadline :</strong> 2019-05-30</p>
                            </div>

                        </div>
                        <div class="row job-row">

                            <div class="col-md-8">
                                <div class="img-thumb job-half">
                                    <a href="#">
                                        <img src="http://localhost/wordpress_themes/wp-content/uploads/2019/04/company-logo-9.png" />
                                    </a>
                                </div>
                                <div class="job-details job-half">
                                    <h3>
                                        <a href="#">Restaurant Team Member - Crew</a>
                                    </h3>
                                    <ul class="job-details-row">
                                        <li class="job-title">
                                            <a href="#">
                                                <i class="fa fa-briefcase"></i> Gelogitic
                                                <a></a>
                                        </li>
                                        <li class="job-location">
                                            <a href="#">
                                                <i class="fa fa-map-marker"></i> Lisbon </a>
                                        </li>
                                        <li class="job-type-full">
                                            <a href="#">
                                                <i class="fa fa-clock-o"></i> Full Time </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-md-4">

                                <div class="apply-btns  mt-20">
                                    <a href="#" class=" btn-love ">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a href="#" class="btn btn-send ">
                                        <i class="fa fa-paper-plane"></i> Apply Now</a>
                                </div>
                                <p class="deadline text-center mt-15">
                                    <strong>Deadline :</strong> 2019-05-30</p>
                            </div>

                        </div>
                        <div class="row job-row">

                            <div class="col-md-8">
                                <div class="img-thumb job-half">
                                    <a href="#">
                                        <img src="http://localhost/wordpress_themes/wp-content/uploads/2019/04/company-logo-9.png" />
                                    </a>
                                </div>
                                <div class="job-details job-half">
                                    <h3>
                                        <a href="#">Restaurant Team Member - Crew</a>
                                    </h3>
                                    <ul class="job-details-row">
                                        <li class="job-title">
                                            <a href="#">
                                                <i class="fa fa-briefcase"></i> Gelogitic
                                                <a></a>
                                        </li>
                                        <li class="job-location">
                                            <a href="#">
                                                <i class="fa fa-map-marker"></i> Lisbon </a>
                                        </li>
                                        <li class="job-type-full">
                                            <a href="#">
                                                <i class="fa fa-clock-o"></i> Full Time </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-md-4">

                                <div class="apply-btns  mt-20">
                                    <a href="#" class=" btn-love ">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a href="#" class="btn btn-send ">
                                        <i class="fa fa-paper-plane"></i> Apply Now</a>
                                </div>
                                <p class="deadline text-center mt-15">
                                    <strong>Deadline :</strong> 2019-05-30</p>
                            </div>

                        </div>
                        <div class="row job-row">

                            <div class="col-md-8">
                                <div class="img-thumb job-half">
                                    <a href="#">
                                        <img src="http://localhost/wordpress_themes/wp-content/uploads/2019/04/company-logo-9.png" />
                                    </a>
                                </div>
                                <div class="job-details job-half">
                                    <h3>
                                        <a href="#">Restaurant Team Member - Crew</a>
                                    </h3>
                                    <ul class="job-details-row">
                                        <li class="job-title">
                                            <a href="#">
                                                <i class="fa fa-briefcase"></i> Gelogitic
                                                <a></a>
                                        </li>
                                        <li class="job-location">
                                            <a href="#">
                                                <i class="fa fa-map-marker"></i> Lisbon </a>
                                        </li>
                                        <li class="job-type-full">
                                            <a href="#">
                                                <i class="fa fa-clock-o"></i> Full Time </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-md-4">

                                <div class="apply-btns  mt-20">
                                    <a href="#" class=" btn-love ">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a href="#" class="btn btn-send ">
                                        <i class="fa fa-paper-plane"></i> Apply Now</a>
                                </div>
                                <p class="deadline text-center mt-15">
                                    <strong>Deadline :</strong> 2019-05-30</p>
                            </div>

                        </div>
                        <div class="row job-row">

                            <div class="col-md-8">
                                <div class="img-thumb job-half">
                                    <a href="#">
                                        <img src="http://localhost/wordpress_themes/wp-content/uploads/2019/04/company-logo-9.png" />
                                    </a>
                                </div>
                                <div class="job-details job-half">
                                    <h3>
                                        <a href="#">Restaurant Team Member - Crew</a>
                                    </h3>
                                    <ul class="job-details-row">
                                        <li class="job-title">
                                            <a href="#">
                                                <i class="fa fa-briefcase"></i> Gelogitic
                                                <a></a>
                                        </li>
                                        <li class="job-location">
                                            <a href="#">
                                                <i class="fa fa-map-marker"></i> Lisbon </a>
                                        </li>
                                        <li class="job-type-full">
                                            <a href="#">
                                                <i class="fa fa-clock-o"></i> Full Time </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-md-4">

                                <div class="apply-btns  mt-20">
                                    <a href="#" class=" btn-love ">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a href="#" class="btn btn-send ">
                                        <i class="fa fa-paper-plane"></i> Apply Now</a>
                                </div>
                                <p class="deadline text-center mt-15">
                                    <strong>Deadline :</strong> 2019-05-30</p>
                            </div>

                        </div>
                        <div class="row job-row">

                            <div class="col-md-8">
                                <div class="img-thumb job-half">
                                    <a href="#">
                                        <img src="http://localhost/wordpress_themes/wp-content/uploads/2019/04/company-logo-9.png" />
                                    </a>
                                </div>
                                <div class="job-details job-half">
                                    <h3>
                                        <a href="#">Restaurant Team Member - Crew</a>
                                    </h3>
                                    <ul class="job-details-row">
                                        <li class="job-title">
                                            <a href="#">
                                                <i class="fa fa-briefcase"></i> Gelogitic
                                                <a></a>
                                        </li>
                                        <li class="job-location">
                                            <a href="#">
                                                <i class="fa fa-map-marker"></i> Lisbon </a>
                                        </li>
                                        <li class="job-type-full">
                                            <a href="#">
                                                <i class="fa fa-clock-o"></i> Full Time </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-md-4">

                                <div class="apply-btns  mt-20">
                                    <a href="#" class=" btn-love ">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a href="#" class="btn btn-send ">
                                        <i class="fa fa-paper-plane"></i> Apply Now</a>
                                </div>
                                <p class="deadline text-center mt-15">
                                    <strong>Deadline :</strong> 2019-05-30</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- JOB CATEGORY PAGE -->
<?php get_footer();?>