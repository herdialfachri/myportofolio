<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>My Portofolio</title>
    
    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="<?=base_url('assets/css/bootstrap.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/css/fontawesome-all.css')?>" rel="stylesheet">
	<link href="<?=base_url('assets/css/styles.css')?>" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="<?=base_url('assets/images/h-logo.png')?>">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container">
            
            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="#"><img src="<?=base_url('assets/images/my-logo2.png')?>" alt="alternative"></a>  

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Mark</a> -->

            <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#header">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#services">Services</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Projects</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item page-scroll" href="project">Programming</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item page-scroll" href="project2">Graphic Design</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item page-scroll" href="collaborate">Collaborate</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
                <span class="nav-item social-icons">
                    <span class="fa-stack">
                        <a href="https://www.facebook.com/hermhmd8/">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="#your-link">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-twitter fa-stack-1x"></i>
                        </a>
                    </span>
                </span>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h1 class="h1-large">Welcome to my Portofolio, Find out about me here..!</h1>
                        <a class="btn-solid-lg page-scroll" href="#about">Get to know me</a>
                        <a class="btn-outline-lg page-scroll" href="#contact"><i class="fas fa-user"></i>Contact Me</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- About-->
    <div id="about" class="basic-1 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="text-container first">
                        <h2>Hi Folks..</h2>
                        <p>My name is M. Herdi Al-Fachri, I am a sixth-semester student majoring Computer Science at Universitas Muhammadiyah Sukabumi. I'm curently a Mobile Development Cohort at Bangkit Academy. I have experience in Graphic Design and Mobile Developer using Koltin.</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-container second">
                        <div class="time">PRESENT - Bangkit Academy</div>
                        <h6>Mobile Development Awarde 2024</h6>
                        <p>Learn to master Kotlin programming language in order to build a good Android applications, learn how to utilize APIs with the Retrofit library, learn the basics of AI for Android applications.</p>
                        <div class="time">Aug 2023 - Kemendikbudristek RI</div>
                        <h6>PPK Ormawa Awarde 2023</h6>
                        <p>Being one of the selected teams out of 2110 sub-proposals submitted, collaborated with team to created a website-based information system application for the Palabuhanratu village, developed an IoT-based for Tsunami warning device.</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-container third">
                        <div class="time">2023 - LPPM UMMI</div>
                        <h6>Data Collector</h6>
                        <p>Conducted an interview and managed to get 200 data for 2 days for lecturer research purposes entitled "Analysis and environmental impact of PT. Kino Indonesia".</p>
                        <div class="time">2022 - Kemendikbudristek RI</div>
                        <h6>Kedaireka Matching Fund Intership</h6>
                        <p>Carry out an analysis of the needs of MSMEs in Sukabumi, register MSMEs and input them into the Seapreneur website.</p>
                        <div class="time">2021 - GDSC Chapter UMMI</div>
                        <h6>Creative Team Member</h6>
                        <p>Collaborate with the event team to determine event titles, create poster designs for each event.</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of about -->


    <!-- Services -->
    <div id="services" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Most Interested Field</h2>
                    <p class="p-heading">I studied three fields according to my passion, abilities and experience. I have 4 years of experience in operating design applications, I have 1 year of experience operating Mikrotik applications, and I am currently studying the developer field.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="text-box">
                        <i class="far fa-gem"></i>
                        <h4>DESIGN</h4>
                        <p>Successful online projects start with good design. It establishes a solid foundation for future development and allows for long term growth.</p>
                    </div> <!-- end of text-box -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-box">
                        <i class="fas fa-code"></i>
                        <h4>DEVELOPMENT</h4>
                        <p>I can code my own designs or even use the customer's design as base. My focus is to generate clean code that's well structured for reliability.</p>
                    </div> <!-- end of text-box -->
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <div class="text-box">
                        <i class="fas fa-tv"></i>
                        <h4>NETWORKING</h4>
                        <p>I can secure the network using Mikrotik technology and share bandwidth to many areas with very little capital and of course flexible.</p>
                    </div> <!-- end of text-box -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of services -->


    <!-- Details -->
	<div class="split">
		<div class="area-1">
		</div><!-- end of area-1 on same line and no space between comments to eliminate margin white space --><div class="area-2 bg-gray">
            <div class="container">    
                <div class="row">
                    <div class="col-lg-12">     
                        
                        <!-- Text Container -->
                        <div class="text-container">
                            <h2>Why Work With Me</h2>
                            <p>I am a great communicator and love to invest the necessary time to understand the customer's problem very well</p>
                            <h5>DESIGN TOOLS</h5>
                            <p>My favorite design tools are Photoshop and Illustrator but I can create designs in Figma, Sketch and Adobe XD too</p>
                            <h5>DEVELOPMENT SKILLS</h5>
                            <p>I am familiar and work on a daily basis with HTML, CSS, JavaScript, Bootstrap and other modern frameworks</p>
                            
                            <div class="icons-container">
                                <img src="<?=base_url('assets/images/details-icon-photoshop.png')?>" alt="alternative">
                                <img src="<?=base_url('assets/images/details-icon-illustrator.png')?>" alt="alternative">
                                <img src="<?=base_url('assets/images/details-icon-html.png')?>" alt="alternative">
                                <img src="<?=base_url('assets/images/details-icon-css.png')?>" alt="alternative">
                                <img src="<?=base_url('assets/images/details-icon-bootstrap.png')?>" alt="alternative">
                                <img src="<?=base_url('assets/images/details-icon-javascript.png')?>" alt="alternative">
                            </div> <!-- end of icons-container -->
                        </div> <!-- end of text-container -->
                        <!-- end of text container -->

                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
		</div> <!-- end of area-2 -->
    </div> <!-- end of split -->
    <!-- end of details -->


    <!-- Section Divider -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <hr class="section-divider">
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
    <!-- end of section divider -->


    <!-- Contact -->
    <div id="contact" class="form-1 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Collaboration Form</h2>
                    <p class="p-heading">For any type of secret and online project please don't hesitate to get in touch with me. The fastest way is to send me your message using the following email <a class="blue no-line" href="mailto:mherdialfachri@ummi.ac.id">mherdialfachri.ummi.ac.id</a></p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
<!-- Contact Form -->
<form id="contactForm" action="/contact/submit" method="post">
    <div class="form-group">
        <input type="text" class="form-control-input" id="cname" name="cname" required>
        <label class="label-control" for="cname">Name</label>
    </div>
    <div class="form-group">
        <input type="email" class="form-control-input" id="cemail" name="cemail" required>
        <label class="label-control" for="cemail">Email</label>
    </div>
    <div class="form-group">
        <textarea class="form-control-textarea" id="cmessage" name="cmessage" required></textarea>
        <label class="label-control" for="cmessage">Project details</label>
    </div>
    <div class="form-group">
        <button type="submit" class="form-control-submit-button">Submit</button>
    </div>
</form>
<!-- end of contact form -->


                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->  
    <!-- end of contact -->


    <!-- Footer -->
    <div class="footer bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="social-container">
                        <span class="fa-stack">
                            <a href="https://www.facebook.com/hermhmd8/">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.linkedin.com/in/herdialfachrii">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.instagram.com/herdialfachri/">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-youtube fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of social-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © <a class="no-line" href="#your-link">M. Herdi Al-Fachri</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    	
    <!-- Scripts -->
    <script src="<?=base_url('assets/js/jquery.min.js')?>"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script> <!-- Bootstrap framework -->
    <script src="<?=base_url('assets/js/jquery.easing.min.js')?>"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="<?=base_url('assets/js/scripts.js')?>"></script> <!-- Custom scripts -->
</body>
</html>