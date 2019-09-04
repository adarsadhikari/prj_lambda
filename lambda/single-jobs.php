<?php 
  get_header();
  if (have_posts()) : while (have_posts()) : the_post();?>
 <!-- JOB DESCRIPTION PAGE SECTION-->
 <section class="job_description_page">
        <div class="container">
            <div class="row job-row">
                <div class="col-md-7">
                    <div class="img-thumb job-half">
                        <a href="#">
                            <img src="<?php echo get_field('company_logo');?>" />
                        </a>
                    </div>
                    <div class="job-details job-half">
                        <h3>
                        <?php the_title();?>
                        </h3>
                        <ul class="job-details-row">
                            <li class="job-title">
                                <a href="#">
                                    <i class="fa fa-briefcase"></i> <?php echo get_field('company_name');?>
                                    <a></a>
                            </li>
                            <li class="job-location">
                                <a href="#">
                                    <i class="fa fa-map-marker"></i> <?php echo get_field('location');?> </a>
                            </li>
                            <li class="job-type-full">
                                <a href="#">
                                    <i class="fa fa-clock-o"></i><?php echo get_field('job_type');?> </a>
                            </li>
                        </ul>
                        <p class="deadline">
                            <strong>Apply Before :</strong> <?php echo get_field('deadline');?> | 2 Weeks | 15 days from today</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="apply-btns  mt-20">
                        <a href="#" class=" btn-success btn-sm">
                            <i class="fa fa-star"></i> Save Job</a>
                        <a href="#" class="btn btn-primary btn-sm">
                            <i class="fa fa-paper-plane"></i> Apply Job Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row ">
                <div class="col-md-8 job-row">
                    <div class="job-description-content">
                        <div class="heading-title">
                            <h3>Job Description</h3>
                        </div>
                        <div class="main-content">
                        <?php the_content();?>
                        </div>
                        <div class="heading-title">
                            <h3>Job Requirements</h3>
                        </div>
                        <div class="main-content">
                        <?php echo get_field('job_requirements');?>
                        </div>
                        <div class="heading-title">
                            <h3>Job Responsibilities</h3>
                        </div>
                        <div class="main-content">
                        <?php echo get_field('job_responsibilities');?>
                        </div>

                        <div class="heading-title">
                            <h3>How to Apply</h3>
                        </div>
                        <div class="main-content">
                            <p>Send an email to
                                <a href="#"><?php echo get_field('email');?></a> with your best design portfolio. Tell us about your passion for web
                                design and why you would be the perfect candidate for the job.</p>
                        </div>
                        <div class="apply-btns  mt-50 mb-20">
                            <a href="#" class="btn btn-success btn-sm">
                                <i class="fa fa-envelope"></i> Email It</a>
                            <a href="#" class="btn btn-primary btn-sm">
                                <i class="fa fa-paper-plane"></i> Apply Online</a>
                        </div>
                        <p class="back-link">Go back to <a href="#">job list Page</a></p>
                    </div>

                </div>
                <div class="col-md-4 ">
                    <div class="sidebar">
                        <h4>Job Summary</h4>
                       
                        <ul>
                            <li>
                                <strong>Published On :</strong> <?php echo get_field('published_on');?></li>
                            <li>
                                <strong>Company Name :</strong> <?php echo get_field('about_company');?></li>
                            <li>
                                <strong>Job Location :</strong> <?php echo get_field('job_location');?></li>
                            <li>
                                <strong>Vacency :</strong> <?php echo get_field('vacency');?></li>
                            <li>
                                <strong>Employee Status :</strong> <?php echo get_field('employee_status');?></li>
                            <li>
                                <strong>Experince :</strong> <?php echo get_field('experience');?></li>
                            <li>
                                <strong>Salary : </strong> <?php echo get_field('salary');?></li>
                            <li>
                                <strong>Gender :</strong> <?php echo get_field('gender');?></li>
                            <li>
                                <strong>Application Deadline :</strong><?php echo get_field('application_deadline');?></li>
                        </ul>
                    </div>
                    <div class="company-profile">
                        <h4>About Company</h4>
                        
                        <ul class="company-info">
                            <li>
                                 <strong>Address:</strong>
                                <a href="#"> <?php echo get_field('address');?></a>
                            </li>
                            <li>
                                    <strong> Phone:</strong>
                                <a href="#"><?php echo get_field('phone');?></a>
                            </li>
                            <li>
                                    <strong> Email :</strong>
                                <a href="#"><?php echo get_field('email');?></a>
                            </li>
                            <li>
                                    <strong> Website:</strong>
                                <a href="#"><?php echo get_field('website');?></a>
                            </li>
                        </ul>
                        <p><?php echo get_field('description');?></p>
                    </div>
                    <div class="share-post">
                        <ul>
                            <li class="share-title">
                                <i class="fa fa-share-alt"></i> Share :</li>
                            <li>
                                <a href="">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="open_positions">
                        <a href="#">
                            <i class="fa fa-plus"></i> View All Open Positions</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- JOB DESCRIPTION PAGE SECTION-->

   <?php endwhile;
 else:
  echo'<p>No content Found</p>';
 endif;
 get_footer();
 ?>