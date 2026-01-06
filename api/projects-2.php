<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <title>Portfolios | AUM Productions</title>
 
    <!-- CSS -->
    <?php $folder="root"; include_once('incs/stylesheets.inc.php'); ?>
</head>
<body>  

    <!-- Navbar -->
    <?php $folder="root"; include_once('incs/navbar.inc.php'); ?>

    <!-- Header Wrapper Start -->
    <div class="container-fluid full-width px-0 page__header mt-lg-3">
        <img src="images/projects/portfolio-page-header-banner-image.webp" class="img-fluid banner" alt="about banner">
    </div>
    <!-- Header Wrapper End -->

    <!-- Services Wrapper Start -->
    <section class="ptb position-relative">  
        <div class="container-fluid"> 
            <h2 class="h2 fw-bold ff-unbounded text-uppercase text-center">OUR PROJECTS</h2>
            
            <ul class="nav nav-pills justify-content-center mt-3 mb-3 mb-md-4 mt-lg-5 position-sticky" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link text-uppercase rounded-0 fw-semibold mx-1 mx-sm-2 active" id="pills-tabVideoProduction-tab" data-bs-toggle="pill" data-bs-target="#pills-tabVideoProduction" type="button" role="tab" aria-controls="pills-tabVideoProduction" aria-selected="false">Video productions</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link text-uppercase rounded-0 fw-semibold mx-1 mx-sm-2" id="pills-tab1-tab" data-bs-toggle="pill" data-bs-target="#pills-tab1" type="button" role="tab" aria-controls="pills-tab1" aria-selected="true">logo & branding</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link text-uppercase rounded-0 fw-semibold mx-1 mx-sm-2" id="pills-tab2-tab" data-bs-toggle="pill" data-bs-target="#pills-tab2" type="button" role="tab" aria-controls="pills-tab2" aria-selected="false">Design</button>
                </li> 
                
              </ul>
            <div class="tab-content mt-xl-5 mt-4" id="pills-tabContent">
                <!-- Video Production -->
                <div class="tab-pane fade show active" id="pills-tabVideoProduction" role="tabpanel" aria-labelledby="pills-tabVideoProduction-tab">
                    <div class="row g-2">
                        <div class="col-12 col-md-6"> 
                            <div class="position-relative video__box"> 
                                <img src="images/projects/reels/Coorparate-film-for-Dr-Revi-pillai.webp" class="img-fluid w-100" alt="image"> 
                                <button class="btn p-0 rounded-circle" data-bs-toggle="modal" data-bs-target="#vt01"></button>
                                <h3 class="p-2 h6 mb-0 text-white position-absolute start-0 bottom-0 w-100 text-center fw-medium bg-dark text-capitalize">Cooperate film for Dr Revi pillai</h3>
                            </div> 
                            <!-- Modal LESELLPSS -->
                            <div class="modal fade video__modal" id="vt01" tabindex="-1" aria-labelledby="vt01Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl modal-lg modal-md">
                                    <div class="modal-content border-0"> 
                                        <div class="modal-body p-0 position-relative border-0">
                                            <button type="button" class="btn-close rounded-circle position-absolute" data-bs-dismiss="modal" aria-label="Close"></button>
                                            <div class="video"> 
                                                <iframe id="vtIframe01" src="" title="Coorparate film for Dr Revi pillai" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="true" data-autoplay="true"></iframe>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div> 
                            <script> 
                                document.getElementById('vt01').addEventListener('show.bs.modal', function (event) { 
                                    document.getElementById("vtIframe01").src='https://www.youtube.com/embed/4LIYRberQP8?autoplay=1'; 
                                }) 
                                document.getElementById('vt01').addEventListener('hidden.bs.modal', function (event) { 
                                    document.getElementById("vtIframe01").src=''; 
                                }) 
                            </script>  
                        </div><!--.//col-->
                         
                        <div class="col-12 col-md-6"> 
                            <div class="position-relative video__box"> 
                                <img src="images/projects/reels/Surya-tv-Show-Ruchiyathra.webp" class="img-fluid w-100" alt="image"> 
                                <button class="btn p-0 rounded-circle" data-bs-toggle="modal" data-bs-target="#vt02"></button>
                                <h3 class="p-2 h6 mb-0 text-white position-absolute start-0 bottom-0 w-100 text-center fw-medium bg-dark text-capitalize">Surya tv Show Ruchiyathra</h3>
                            </div> 
                            <!-- Modal LESELLPSS -->
                            <div class="modal fade video__modal" id="vt02" tabindex="-1" aria-labelledby="vt02Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl modal-lg modal-md">
                                    <div class="modal-content border-0"> 
                                        <div class="modal-body p-0 position-relative border-0">
                                            <button type="button" class="btn-close rounded-circle position-absolute" data-bs-dismiss="modal" aria-label="Close"></button>
                                            <div class="video"> 
                                                <iframe id="vtIframe02" src="" title="Surya tv Show Ruchiyathra" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="true" data-autoplay="true"></iframe>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div> 
                            <script> 
                                document.getElementById('vt02').addEventListener('show.bs.modal', function (event) { 
                                    document.getElementById("vtIframe02").src='https://www.youtube.com/embed/-YEIIfcqI1o?autoplay=1'; 
                                }) 
                                document.getElementById('vt02').addEventListener('hidden.bs.modal', function (event) { 
                                    document.getElementById("vtIframe02").src=''; 
                                }) 
                            </script> 
                        </div><!--.//col-->

                        <div class="col-12 col-md-6"> 
                            <div class="position-relative video__box"> 
                                <img src="images/projects/reels/Youtube-channel-Youthtube-promo.webp" class="img-fluid w-100" alt="image"> 
                                <button class="btn p-0 rounded-circle" data-bs-toggle="modal" data-bs-target="#vt03"></button>
                                <h3 class="p-2 h6 mb-0 text-white position-absolute start-0 bottom-0 w-100 text-center fw-medium bg-dark text-capitalize">Youtube channel Youthtube promo</h3>
                            </div> 
                            <!-- Modal LESELLPSS -->
                            <div class="modal fade video__modal" id="vt03" tabindex="-1" aria-labelledby="vt03Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl modal-lg modal-md">
                                    <div class="modal-content border-0"> 
                                        <div class="modal-body p-0 position-relative border-0">
                                            <button type="button" class="btn-close rounded-circle position-absolute" data-bs-dismiss="modal" aria-label="Close"></button>
                                            <div class="video"> 
                                                <iframe id="vtIframe03" src="" title="Youtube channel Youthtube promo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="true" data-autoplay="true"></iframe>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div> 
                            <script> 
                                document.getElementById('vt03').addEventListener('show.bs.modal', function (event) { 
                                    document.getElementById("vtIframe03").src='https://www.youtube.com/embed/cyIJXzRC5bw'; 
                                }) 
                                document.getElementById('vt03').addEventListener('hidden.bs.modal', function (event) { 
                                    document.getElementById("vtIframe03").src=''; 
                                }) 
                            </script> 
                        </div><!--.//col-->

                        <div class="col-12 col-md-6"> 
                            <div class="position-relative video__box"> 
                                <img src="images/projects/reels/Product-video-for-mythri-coconut-oil.webp" class="img-fluid w-100" alt="image"> 
                                <button class="btn p-0 rounded-circle" data-bs-toggle="modal" data-bs-target="#vt04"></button>
                                <h3 class="p-2 h6 mb-0 text-white position-absolute start-0 bottom-0 w-100 text-center fw-medium bg-dark text-capitalize">Product video for mythri coconut oil</h3>
                            </div> 
                            <!-- Modal LESELLPSS -->
                            <div class="modal fade video__modal" id="vt04" tabindex="-1" aria-labelledby="vt04Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl modal-lg modal-md">
                                    <div class="modal-content border-0"> 
                                        <div class="modal-body p-0 position-relative border-0">
                                            <button type="button" class="btn-close rounded-circle position-absolute" data-bs-dismiss="modal" aria-label="Close"></button>
                                            <div class="video"> 
                                                <iframe id="vtIframe04" src="" title="Product video for mythri coconut oil" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="true" data-autoplay="true"></iframe>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div> 
                            <script> 
                                document.getElementById('vt04').addEventListener('show.bs.modal', function (event) { 
                                    document.getElementById("vtIframe04").src='https://www.youtube.com/embed/5vmLgJdn0GY?autoplay=1'; 
                                }) 
                                document.getElementById('vt04').addEventListener('hidden.bs.modal', function (event) { 
                                    document.getElementById("vtIframe04").src=''; 
                                }) 
                            </script> 
                        </div><!--.//col-->

                        <div class="col-12 col-md-6"> 
                            <div class="position-relative video__box"> 
                                <img src="images/projects/reels/AUM-ONAM-GREETINGS.webp" class="img-fluid w-100" alt="image"> 
                                <button class="btn p-0 rounded-circle" data-bs-toggle="modal" data-bs-target="#vt05"></button>
                                <h3 class="p-2 h6 mb-0 text-white position-absolute start-0 bottom-0 w-100 text-center fw-medium bg-dark text-capitalize">AUM ONAM GREETINGS</h3>
                            </div> 
                            <!-- Modal LESELLPSS -->
                            <div class="modal fade video__modal" id="vt05" tabindex="-1" aria-labelledby="vt05Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl modal-lg modal-md">
                                    <div class="modal-content border-0"> 
                                        <div class="modal-body p-0 position-relative border-0">
                                            <button type="button" class="btn-close rounded-circle position-absolute" data-bs-dismiss="modal" aria-label="Close"></button>
                                            <div class="video"> 
                                                <iframe id="vtIframe05" src="" title="AUM ONAM GREETINGS" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="true" data-autoplay="true"></iframe>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div> 
                            <script> 
                                document.getElementById('vt05').addEventListener('show.bs.modal', function (event) { 
                                    document.getElementById("vtIframe05").src='https://www.youtube.com/embed/B5WG0BR1Vi8?autoplay=1'; 
                                }) 
                                document.getElementById('vt05').addEventListener('hidden.bs.modal', function (event) { 
                                    document.getElementById("vtIframe05").src=''; 
                                }) 
                            </script>  
                        </div><!--.//col-->
                        <div class="col-12 col-md-6"> 
                            <div class="position-relative video__box"> 
                                <img src="images/projects/reels/5-6336909192216970138-1.webp" class="img-fluid w-100" alt="image"> 
                                <button class="btn p-0 rounded-circle" data-bs-toggle="modal" data-bs-target="#vt06"></button>
                            </div> 
                            <!-- Modal LESELLPSS -->
                            <div class="modal fade video__modal" id="vt06" tabindex="-1" aria-labelledby="vt06Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl modal-lg modal-md">
                                    <div class="modal-content border-0"> 
                                        <div class="modal-body p-0 position-relative border-0">
                                            <button type="button" class="btn-close rounded-circle position-absolute" data-bs-dismiss="modal" aria-label="Close"></button>
                                            <div class="video"> 
                                                <iframe id="vtIframe06" src="" title="5 6336909192216970138 1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="true" data-autoplay="true"></iframe>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div> 
                            <script> 
                                document.getElementById('vt06').addEventListener('show.bs.modal', function (event) { 
                                    document.getElementById("vtIframe06").src='https://www.youtube.com/embed/o8EUYmJaB3w?autoplay=1'; 
                                }) 
                                document.getElementById('vt06').addEventListener('hidden.bs.modal', function (event) { 
                                    document.getElementById("vtIframe06").src=''; 
                                }) 
                            </script> 
                        </div><!--.//col--> 

                        <div class="col-12 col-md-6"> 
                            <div class="position-relative video__box"> 
                                <img src="images/projects/reels/Asianet-Distribution-Rajan-Hd-1.webp" class="img-fluid w-100" alt="image"> 
                                <button class="btn p-0 rounded-circle" data-bs-toggle="modal" data-bs-target="#vt07"></button>
                                <h3 class="p-2 h6 mb-0 text-white position-absolute start-0 bottom-0 w-100 text-center fw-medium bg-dark text-capitalize">Asianet Distribution Rajan Hd 1</h3>
                            </div> 
                            <!-- Modal LESELLPSS -->
                            <div class="modal fade video__modal" id="vt07" tabindex="-1" aria-labelledby="vt07Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl modal-lg modal-md">
                                    <div class="modal-content border-0"> 
                                        <div class="modal-body p-0 position-relative border-0">
                                            <button type="button" class="btn-close rounded-circle position-absolute" data-bs-dismiss="modal" aria-label="Close"></button>
                                            <div class="video"> 
                                                <iframe id="vtIframe07" src="" title="Asianet Distribution Rajan Hd 1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="true" data-autoplay="true"></iframe>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div> 
                            <script> 
                                document.getElementById('vt07').addEventListener('show.bs.modal', function (event) { 
                                    document.getElementById("vtIframe07").src='https://www.youtube.com/embed/tgyNBeeUtiE?autoplay=1'; 
                                }) 
                                document.getElementById('vt07').addEventListener('hidden.bs.modal', function (event) { 
                                    document.getElementById("vtIframe07").src=''; 
                                }) 
                            </script> 
                        </div><!--.//col--> 
                        <div class="col-12 col-md-6"> 
                            <div class="position-relative video__box"> 
                                <img src="images/projects/reels/Promo-for-Social-Media.webp" class="img-fluid w-100" alt="image"> 
                                <button class="btn p-0 rounded-circle" data-bs-toggle="modal" data-bs-target="#vt08"></button>
                                <h3 class="p-2 h6 mb-0 text-white position-absolute start-0 bottom-0 w-100 text-center fw-medium bg-dark text-capitalize">Promo for Social Media</h3>
                            </div> 
                            <!-- Modal LESELLPSS -->
                            <div class="modal fade video__modal" id="vt08" tabindex="-1" aria-labelledby="vt08Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl modal-lg modal-md">
                                    <div class="modal-content border-0"> 
                                        <div class="modal-body p-0 position-relative border-0">
                                            <button type="button" class="btn-close rounded-circle position-absolute" data-bs-dismiss="modal" aria-label="Close"></button>
                                            <div class="video"> 
                                                <iframe id="vtIframe08" src="" title="Promo for Social Media" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="true" data-autoplay="true"></iframe>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div> 
                            <script> 
                                document.getElementById('vt08').addEventListener('show.bs.modal', function (event) { 
                                    document.getElementById("vtIframe08").src='https://www.youtube.com/embed/EZDVFAYE0qc?autoplay=1'; 
                                }) 
                                document.getElementById('vt08').addEventListener('hidden.bs.modal', function (event) { 
                                    document.getElementById("vtIframe08").src=''; 
                                }) 
                            </script> 
                        </div><!--.//col--> 
                         
                    </div><!--.//row-->

                </div><!--./tab-video-production-->


                <div class="tab-pane fade" id="pills-tab1" role="tabpanel" aria-labelledby="pills-tab1-tab">
                    <img src="images/projects/branding/logo-branding-projects-03.webp" class="img-fluid" alt="Logo & Branding Projects"> 
                </div>

                <div class="tab-pane fade" id="pills-tab2" role="tabpanel" aria-labelledby="pills-tab2-tab">
                    <div class="row g-2">
                        <div class="col-md-6"> 
                            <a href="images/projects/design/design-10.webp" class="projectItem project__img__box"> 
                                <img src="images/projects/design/design-10.webp" class="img-fluid thumbnail position-absolute top-0 start-0 w-100 h-100" alt="project-thumbnail">  
                            </a>   
                        </div><!--.//col-->
                        <div class="col-md-6">
                            <a href="images/projects/design/design-11.webp" class="projectItem project__img__box">
                                <img src="images/projects/design/design-11.webp" class="img-fluid position-absolute top-0 start-0 w-100 h-100" alt="Project Image">
                            </a>
                        </div><!--.//col-->
                        <div class="col-md-6">
                            <a href="images/projects/design/design-12.webp" class="projectItem project__img__box">
                                <img src="images/projects/design/design-12.webp" class="img-fluid position-absolute top-0 start-0 w-100 h-100" alt="Project Image">
                            </a>
                        </div><!--.//col-->
                        <div class="col-md-6">
                            <a href="images/projects/design/design-13.webp" class="projectItem project__img__box">
                                <img src="images/projects/design/design-13.webp" class="img-fluid position-absolute top-0 start-0 w-100 h-100" alt="Project Image">
                            </a>
                        </div><!--.//col-->
                        <div class="col-md-3 col-sm-6">
                            <a href="images/projects/design/design-14.webp" class="projectItem project__img__box">
                                <img src="images/projects/design/design-14.webp" class="img-fluid position-absolute top-0 start-0 w-100 h-100" alt="Project Image">
                            </a>
                        </div><!--.//col-->
                        <div class="col-md-6">
                            <a href="images/projects/design/design-16.webp" class="projectItem project__img__box">
                                <img src="images/projects/design/design-16.webp" class="img-fluid position-absolute top-0 start-0 w-100 h-100" alt="Project Image">
                            </a>
                        </div><!--.//col-->
                        <div class="col-md-3 col-sm-6">
                            <a href="images/projects/design/design-15.webp" class="projectItem project__img__box">
                                <img src="images/projects/design/design-15.webp" class="img-fluid position-absolute top-0 start-0 w-100 h-100" style="object-position: center top;" alt="Project Image">
                            </a>
                        </div><!--.//col-->
                        <div class="col-md-3 col-sm-6">
                            <a href="images/projects/design/design-17.webp" class="projectItem project__img__box">
                                <img src="images/projects/design/design-17.webp" class="img-fluid position-absolute top-0 start-0 w-100 h-100" alt="Project Image">
                            </a>
                        </div><!--.//col-->
                        <div class="col-md-3 col-sm-6">
                            <a href="images/projects/design/design-19.webp" class="projectItem project__img__box">
                                <img src="images/projects/design/design-19.webp" class="img-fluid position-absolute top-0 start-0 w-100 h-100" alt="Project Image">
                            </a>
                        </div><!--.//col-->
                        <div class="col-md-6">
                            <a href="images/projects/design/design-18.webp" class="projectItem project__img__box">
                                <img src="images/projects/design/design-18.webp" class="img-fluid position-absolute top-0 start-0 w-100 h-100" alt="Project Image">
                            </a>
                        </div><!--.//col--> 
                    </div><!--.//row-->
                </div><!--.//tab2-->
 
            </div><!--.//tab-content-->
              
            <!-- Pagination -->
            <div class="mt-4 mt-lg-5 text-center"> 
                <?php
                    $firstArrow="true"; $lastArrow="true"; 
                    $prevPageUrl="projects.php";
                    $nextPageUrl="projects-3.php"; 
                    $active     = '2';
                    include_once('incs/pagination.inc.php');
                ?> 
            </div>

        </div><!--.//container-->
    </section>
    <!-- Services Wrapper End --> 


    <!-- Start Project Wrapper Start -->
    <?php $folder="root"; include_once('incs/ready-for-start-project-promo.inc.php'); ?>
    <!-- Start Project Wrapper End -->

    <!-- Footer -->
    <?php $folder="root"; include_once('incs/footer.inc.php'); ?>

</body>
</html> 