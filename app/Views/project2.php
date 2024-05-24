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
            <a class="navbar-brand logo-image" href="myportofolio"><img src="<?=base_url('assets/images/my-logo2.png')?>" alt="alternative"></a>  

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Mark</a> -->

            <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="myportofolio">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="myportofolio#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="myportofolio#services">Services</a>
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
                        <a class="nav-link page-scroll" href="myportofolio#contact">Contact</a>
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
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1>Graphic Design</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Basic -->
    <div class="ex-basic-1 pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-fluid mt-5 mb-3" src="<?=base_url('assets/images/makeup.png')?>" alt="alternative">
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->


    <!-- Basic -->
    <div class="ex-basic-1 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h2 class="mb-3">Wedding Pricelist Design</h2>
                    <p>This is my latest visual artwork, commissioned by one of the major wedding vendors in Sukabumi. The design embodies an elegant, minimalist, clean, graceful, and captivating concept, which captivates prospective customers at first glance.</p>
                    <p class="mb-4">A wedding price list, commonly referred to as a "pricelist wedding," is a detailed document outlining the costs and packages offered by wedding vendors for their services and products.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->


    <!-- Basic -->
    <div class="ex-basic-1 pt-3 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h2 class="mb-4">Product Design for Team KKNT Karang Pakuan</h2>
                    <img class="img-fluid mb-5" src="<?=base_url('assets/images/opak.png')?>" alt="alternative">
                    <p>Product design encompasses the creation and development of tangible items, considering both aesthetics and functionality. The beauty of Opak Moronyoy's product design lies in its vibrant yellow color scheme, serving as an eye-catching promotional medium that exudes energy and positivity.</p>
                    <p class="mb-5">The captivating allure of this product design has a profound impact, drawing individuals in with its irresistible charm and leaving them eager to make a purchase. Its aesthetic appeal is so striking that it not only catches the eye but also ignites a sense of desire, prompting consumers to explore further and ultimately commit to buying. This heightened interest translates directly into increased sales, as the design effectively communicates the value and desirability of the product, making it a highly effective tool for driving revenue growth and establishing a strong market presence.</p>
                    <a class="btn-solid-reg mb-5" href="myportofolio">Back</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->


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