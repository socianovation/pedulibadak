<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="a Creative Agency of ANTERO MAKMUR Contractor located in Jakarta. We handle graphic design, campaign, branding, company profile.">
    <meta name="author" content="SOCIANOVATION - Be Social, Be Innovcative">
	<meta name="keyword" content="graphic design jakarta, graphic design company, desain grafis, desain grafis jakarta, creative agency jakarta, design logo, branding, company profile, design coorporate, art, advertising, design calendar, desain kalender, annual report, kreatif, agency">

    <title>AMCO Design - a Creative Agency of ANTERO MAKMUR Contractor</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css?rand=<?php echo $this->config->item('resource_version'); ?>" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo base_url(); ?>assets/css/freelancer.css?rand=<?php echo $this->config->item('resource_version'); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css?rand=<?php echo $this->config->item('resource_version'); ?>" rel="stylesheet" type="text/css">
    <!--<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&rand=<?php echo $this->config->item('resource_version'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?rand=<?php echo $this->config->item('resource_version'); ?>&family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
-->
    <link href="<?php echo base_url(); ?>assets/fonts/greycliffcf/greycliffcf.css?rand=<?php echo $this->config->item('resource_version'); ?>" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/lightslider/src/css/lightslider.css?rand=<?php echo $this->config->item('resource_version'); ?>" />

    <link rel="icon" type="image/jpg" href="<?php echo base_url(); ?>assets/img/favicon.png?rand=<?php echo $this->config->item('resource_version'); ?>" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js?rand=<?php echo $this->config->item('resource_version'); ?>"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js?rand=<?php echo $this->config->item('resource_version'); ?>"></script>
    <![endif]-->
	
	<link href="<?php echo base_url(); ?>assets/css/custom.css?rand=<?php echo $this->config->item('resource_version'); ?>" rel="stylesheet">

</head>

<body id="page-top" class="index">
<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>
<h1 style="display:none;">AMCO Design</h1>
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand logo" href="#page-top"><img src="<?php echo base_url(); ?>assets/img/logo.png?rand=<?php echo $this->config->item('resource_version'); ?>" /></a>
				<a class="navbar-brand logo-text" href="#page-top">AMCO</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right right-menu">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#page-top">Home</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#workflow">Workflow</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#works">Works</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#clients">Clients</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
		<div class="header-line"><img src="<?php echo base_url(); ?>assets/img/header_line.png?rand=<?php echo $this->config->item('resource_version'); ?>"></div>
    </nav>
	
	

    <!-- Header -->
    <header class="header-first">
        <div class="container" id="maincontent" tabindex="-1" style="width:100%;">
            <div class="row">
                <div class="col-lg-12">
                    <ul id="lightSlider" class="homeslider">
						<!--<li>
							<video style="padding:5%;" width="90%" height="90%" controls>
								<source src="<?php echo base_url(); ?>assets/video/amco.mp4" type="video/mp4">
							</video>
						</li>-->
                        <?php $num_hs = count($home_sliders);
						for($a = 0; $a < $num_hs; $a++){ $s = $home_sliders[$a];?>
						<li>
                            <img class="slider-home" src="<?php echo base_url(); ?>assets/img/home_sliders/<?php echo $s['image']; ?>?rand=<?php echo $this->config->item('resource_version'); ?>" alt="<?php echo $a['title']; ?>" />
                        </li>
						<?php } ?>
						<!--<li>
                            <div>
								<iframe=""></iframe>
							</div>
                        </li>-->
                    </ul>

                </div>
            </div>
        </div>
    </header>

    

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row about-us-header">
                <div class="col-lg-12 text-center">
                    <img src="<?php echo base_url(); ?>assets/img/about_us.png?rand=<?php echo $this->config->item('resource_version'); ?>" />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    We are a creative agency constructed with talented individual combined together with art, creative mind and ideas. <br/>
                    We take a different approach to solve all your design and branding needs for you and your company. We help you to fix communcation problem  accurately, create the right perception and lead into a great function. We embrace flexible and open minded culture, we stay bold to empower your brand with our sense of art and design.<br/> <br/>
                    <br/>
                    We love to found out more about you. Because our aim is to become a best partner in brand, design and build a long term partnership with you. We also part of ANTERO MAKMUR contractor, that tune in Mechanical Electrical Design and Built.
                </div>
            </div>


            <div class="row our-value">
                <div class="col-lg-12 text-center our_value_title">
                    <img src="<?php echo base_url(); ?>assets/img/our_value.png?rand=<?php echo $this->config->item('resource_version'); ?>" />
                </div>
				<?php $num_value = count($our_values); for($a = 0; $a < $num_value; $a++) { $s = $our_values[$a]; ?>
                <div class="col-lg-3 text-center">
                    <div class=" text-center">
                        <img src="<?php echo base_url(); ?>assets/img/our_values/<?php echo $s['image']; ?>?rand=<?php echo $this->config->item('resource_version'); ?>" alt="<?php echo $s['title']; ?>" />
                    </div>
                    <div class="value_text text-center">
                        <?php echo $s['title']; ?>
                    </div>
                    <div class=" text-center">
                        <?php echo $s['description']; ?>
                    </div>
                </div>
				<?php } ?>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="workflow">
        <div class="container">
            <div class="row about-us-header">
                <div class="col-lg-12 text-center">
                    <img src="<?php echo base_url(); ?>assets/img/workflow.png?rand=<?php echo $this->config->item('resource_version'); ?>" id="workflow_text" />
                </div>
            </div>

            <div class="row work_flow_value">
                <div class="col-lg-12 text-center">
					<ul id="lightSlider2">
						<?php $num_workflows = count($workflows); for($a = 0; $a < $num_workflows; $a++) { $s = $workflows[$a]; ?>
						<li>
							<div class="col-md-6">
								<img class="slider-home" src="<?php echo base_url(); ?>assets/img/workflows/<?php echo $s['image']; ?>?rand=<?php echo $this->config->item('resource_version'); ?>" alt="<?php echo $s['title']; ?>" />
							</div>
							<div class="col-md-6 workflow-content">
								<div class="workflow-value-title">
									<img src="<?php echo base_url(); ?>assets/img/workflows/<?php echo $s['title']; ?>" />
								</div>
								<div class="workflow-value-content">
									<?php echo $s['description']; ?>
								</div>
							</div>
						</li>
						<?php } ?>
					</ul>
				</div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="works">
        <div class="container" id="">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <img src="<?php echo base_url(); ?>assets/img/our_works.png?rand=<?php echo $this->config->item('resource_version'); ?>" id="our_works_text" />
                </div>
            </div>
            <div class="row works-content">
				<?php $num_works = count($our_works); for($a = 0; $a < $num_works; $a++) {$s = $our_works[$a]; ?>
                <div class="col-sm-4 portfolio-item">
					
                    <a href="#<?php echo $s['slug']; ?>" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
							<div class="caption-content">
								<h4><?php echo $s['name']?></h4>
								<p><?php echo $s['title']?></p>
							</div>
						</div>
						<img src="<?php echo base_url(); ?>assets/img/our_works/<?php echo $s['thumb']; ?>?rand=<?php echo $this->config->item('resource_version'); ?>" class="img-responsive" alt="<?php echo $s['name']; ?>">
                    </a>
                </div>
				<?php } ?>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <img src="<?php echo base_url(); ?>assets/img/happy_clients.png" id="happy_clients_text" />
                </div>
            </div>
            <div class="row clients-content">
                <?php $num_clients = count($clients); for($a = 0; $a < $num_clients; $a++){ $s = $clients[$a]; ?>
				<div class="col-sm-3 clients-item">
                    <img src="<?php echo base_url(); ?>assets/img/clients/<?php echo $s['image'];?>?rand=<?php echo $this->config->item('resource_version'); ?>" class="img-responsive" alt="<?php echo $s['name']; ?>">
                </div>
				<?php } ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <img src="<?php echo base_url(); ?>assets/img/contact_us.png" id="contact_us_text" />
                    <p>Don't be shy, just say hello and we look forward to meet you!</p>
                </div>
            </div>
            <div class="row contact-content">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" name="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" name="name" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="phone">Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="message">Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
	
    <footer class="text-center">
	<div class="header-line"><img id="line-footer-top" src="<?php echo base_url(); ?>assets/img/header_line.png?rand=<?php echo $this->config->item('resource_version'); ?>"></div>
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-3">
                        <div>
                            <img src="<?php echo base_url(); ?>assets/img/footer1.jpg?rand=<?php echo $this->config->item('resource_version'); ?>" alt="Our Location" />
                        </div>
                        <div class="text-center">
                            Jl. KH Samanhudi No. 22 D<br/>
                            Jakarta Pusat 10710 - Indonesia
                        </div>
                    </div>
                    <div class="footer-col col-md-3" style="margin-left:-5%;">
                        <div>
                            <img src="<?php echo base_url(); ?>assets/img/footer2.jpg?rand=<?php echo $this->config->item('resource_version'); ?>" alt="Call Us"/>
                        </div>
                        <div class="text-center">
                            021 351 3176 / 77 <br/>
                            +62 818 0896 8952
                        </div>
                    </div>
                    <div class="footer-col col-md-3" style="margin-left:-5%;">
                        <div>
                            <img src="<?php echo base_url(); ?>assets/img/footer3.jpg?rand=<?php echo $this->config->item('resource_version'); ?>" alt="Inquiries"  />
                        </div>
                        <div class="text-center">
                            General Inquiries / Internship<br/>
                            hello@amcodesign.com
                        </div>
                    </div>

                    <div class="footer-col col-md-3" style="margin-left:10%">
						<div class="socmed-text">
							Follow and like us : 
						</div>
						<div class="socmed-container">
							<div class="socmed first">
								<a href="https://www.facebook.com/AmcoGraphicDesign/"><img src="<?php echo base_url(); ?>assets/img/socmed1.png?rand=<?php echo $this->config->item('resource_version'); ?>" /></a>
							</div>
							<div class="socmed">
								<a href="#"><img src="<?php echo base_url(); ?>assets/img/socmed2.png?rand=<?php echo $this->config->item('resource_version'); ?>" /></a>
							</div>
							<div class="socmed">
								<a href="#"><img src="<?php echo base_url(); ?>assets/img/socmed3.png?rand=<?php echo $this->config->item('resource_version'); ?>" /></a>
							</div>
							<div class="socmed">
								<a href="#"><img src="<?php echo base_url(); ?>assets/img/socmed4.png?rand=<?php echo $this->config->item('resource_version'); ?>" /></a>
							</div>
						</div>
						<div class="socmed-copyright">
							@ 2017 AMCO - All rights reserved
						</div>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; AMCO Design 2017
                    </div>
                </div>
            </div>
        </div>-->
		<div class="footer-line"><img id="line-footer" src="<?php echo base_url(); ?>assets/img/footer_line.png?rand=<?php echo $this->config->item('resource_version'); ?>"></div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
	<?php $num_works = count($our_works); for($a = 0; $a < $num_works; $a++) {$s = $our_works[$a]; ?>
    <div class="portfolio-modal modal fade" id="<?php echo $s['slug']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!--<h2><?php echo $s['title']; ?></h2>
                            <hr class="star-primary">-->
                            <ul class="list-inline item-details">
                                <li><strong>Client:
                                    </strong><br/>
                                    <?php echo $s['name']; ?>
                                </li>
                                <li><strong>Project:
                                    </strong><br/>
                                    <?php echo $s['service'];?>
                                </li>
                            </ul>
                            
                            <?php foreach($s['images'] as $si){?>
                            <img alt="<?php echo $s['name']; ?>" src="<?php echo base_url(); ?>assets/img/our_works/<?php echo $si; ?>?rand=<?php echo $this->config->item('resource_version'); ?>" class="img-responsive img-centered" alt="">
                            <?php } ?>
                            <p><?php echo $s['description']; ?></p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php } ?>
	
	<script>
	var base_url = "<?php echo base_url(); ?>";
	</script>
	
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js?rand=<?php echo $this->config->item('resource_version'); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js?rand=<?php echo $this->config->item('resource_version'); ?>"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js?rand=<?php echo $this->config->item('resource_version'); ?>"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/jqBootstrapValidation.js?rand=<?php echo $this->config->item('resource_version'); ?>"></script>
    <script src="<?php echo base_url(); ?>assets/js/contact_me.js?rand=<?php echo $this->config->item('resource_version'); ?>"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/freelancer.js?rand=<?php echo $this->config->item('resource_version'); ?>"></script>

    <script src="<?php echo base_url(); ?>assets/vendor/lightslider/src/js/lightslider.js?rand=<?php echo $this->config->item('resource_version'); ?>"></script>

    <script type="text/javascript">
        jQuery("#lightSlider").lightSlider({
            item: 1,
            adaptiveHeight:true,
			loop:true,
            auto : true
        });

        jQuery("#lightSlider2").lightSlider({
            item: 2,
            adaptiveHeight:true,
			//pager:false,
			loop:true,
			auto : true
        });
        
    </script>

</body>

</html>
