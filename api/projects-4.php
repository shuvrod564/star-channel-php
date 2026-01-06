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
                                <img src="images/projects/video-thumbnail/Jwalamukhi-Musical video-Tharattupattu.webp" class="img-fluid w-100" alt="image"> 
                                <button class="btn p-0 rounded-circle" data-bs-toggle="modal" data-bs-target="#vt01"></button> 
                                <h3 class="p-2 h6 mb-0 text-white position-absolute start-0 bottom-0 w-100 text-center fw-medium bg-dark text-capitalize">
                                    Jwalamukhi | Musical video | Tharattupattu
                                </h3>
                            </div> 
                            <!-- Modal  -->
                            <div class="modal fade video__modal" id="vt01" tabindex="-1" aria-labelledby="vt01Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl modal-lg modal-md">
                                    <div class="modal-content border-0"> 
                                        <div class="modal-body p-0 position-relative border-0">
                                            <button type="button" class="btn-close rounded-circle position-absolute" data-bs-dismiss="modal" aria-label="Close"></button>
                                            <div class="video"> 
                                                <iframe id="vtIframe01" src="" title="Jwalamukhi | Musical video | Tharattupattu | Lullaby | 2020  | Aum Production" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="true" data-autoplay="true"></iframe>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div> 
                            <script> 
                                document.getElementById('vt01').addEventListener('show.bs.modal', function (event) { 
                                    document.getElementById("vtIframe01").src='https://www.youtube.com/embed/P4YTKmkzwLo?autoplay=1'; 
                                }) 
                                document.getElementById('vt01').addEventListener('hidden.bs.modal', function (event) { 
                                    document.getElementById("vtIframe01").src=''; 
                                }) 
                            </script>  
                        </div><!--.//col-->
                         
                        <div class="col-12 col-md-6"> 
                            <div class="position-relative video__box"> 
                                <img src="images/projects/video-thumbnail/Star-Singer-GCC-Talent-Hunt.webp" class="img-fluid w-100" alt="image"> 
                                <button class="btn p-0 rounded-circle" data-bs-toggle="modal" data-bs-target="#vt02"></button>
                                <h3 class="p-2 h6 mb-0 text-white position-absolute start-0 bottom-0 w-100 text-center fw-medium bg-dark text-capitalize">
                                    Star Singer GCC Talent Hunt 
                                </h3>
                            </div> 
                            <!-- Modal LESELLPSS -->
                            <div class="modal fade video__modal" id="vt02" tabindex="-1" aria-labelledby="vt02Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl modal-lg modal-md">
                                    <div class="modal-content border-0"> 
                                        <div class="modal-body p-0 position-relative border-0">
                                            <button type="button" class="btn-close rounded-circle position-absolute" data-bs-dismiss="modal" aria-label="Close"></button>
                                            <div class="video"> 
                                                <iframe id="vtIframe02" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="true" data-autoplay="true"></iframe>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div> 
                            <script> 
                                document.getElementById('vt02').addEventListener('show.bs.modal', function (event) { 
                                    document.getElementById("vtIframe02").src='https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fwatch%2F%3Fv%3D341039139428168&amp;width=500&amp;show_text=false&amp;appId=195203148023399&amp;height=282'; 
                                }) 
                                document.getElementById('vt02').addEventListener('hidden.bs.modal', function (event) { 
                                    document.getElementById("vtIframe02").src=''; 
                                }) 
                            </script> 
                        </div><!--.//col-->

                        <div class="col-12 col-md-6"> 
                            <div class="position-relative video__box"> 
                                <img src="images/projects/video-thumbnail/BBMEidWishes.webp" class="img-fluid w-100" alt="image"> 
                                <button class="btn p-0 rounded-circle" data-bs-toggle="modal" data-bs-target="#vt03"></button>
                                <h3 class="p-2 h6 mb-0 text-white position-absolute start-0 bottom-0 w-100 text-center fw-medium bg-dark text-capitalize">
                                    BBMEidWishes
                                </h3>
                            </div> 
                            <!-- Modal LESELLPSS -->
                            <div class="modal fade video__modal" id="vt03" tabindex="-1" aria-labelledby="vt03Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl modal-lg modal-md">
                                    <div class="modal-content border-0"> 
                                        <div class="modal-body p-0 position-relative border-0">
                                            <button type="button" class="btn-close rounded-circle position-absolute" data-bs-dismiss="modal" aria-label="Close"></button>
                                            <div class="video"> 
                                                <iframe id="vtIframe03" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="true" data-autoplay="true"></iframe>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div> 
                            <script> 
                                document.getElementById('vt03').addEventListener('show.bs.modal', function (event) { 
                                    document.getElementById("vtIframe03").src='https://www.youtube.com/embed/iHGdR9jQcm8?autoplay=1'; 
                                }) 
                                document.getElementById('vt03').addEventListener('hidden.bs.modal', function (event) { 
                                    document.getElementById("vtIframe03").src=''; 
                                }) 
                            </script> 
                        </div><!--.//col--> 
                         
                    </div><!--.//row-->

                </div><!--./tab-video-production-->


                <div class="tab-pane fade" id="pills-tab1" role="tabpanel" aria-labelledby="pills-tab1-tab">
                    <img src="images/projects/logo-branding-portfolios-01.webp" class="img-fluid" alt="projects">
                </div>

                <div class="tab-pane fade" id="pills-tab2" role="tabpanel" aria-labelledby="pills-tab2-tab">
                    <div class="row g-2">
                        <div class="col-md-3 col-sm-6"> 
                            <a href="images/projects/design/design-30.webp" class="projectItem project__img__box"> 
                                <img src="images/projects/design/design-30.webp" class="img-fluid thumbnail position-absolute top-0 start-0 w-100 h-100" alt="project-thumbnail">  
                            </a>   
                        </div><!--.//col-->
                        <div class="col-md-3 col-sm-6">
                            <a href="images/projects/design/design-31.webp" class="projectItem project__img__box">
                                <img src="images/projects/design/design-31.webp" class="img-fluid position-absolute top-0 start-0 w-100 h-100" alt="Project Image">
                            </a>
                        </div><!--.//col-->
                        <div class="col-md-6">
                            <a href="images/projects/design/design-33.webp" class="projectItem project__img__box">
                                <img src="images/projects/design/design-33.webp" class="img-fluid position-absolute top-0 start-0 w-100 h-100" alt="Project Image">
                            </a>
                        </div><!--.//col-->
                        <div class="col-md-6">
                            <a href="images/projects/design/design-34.webp" class="projectItem project__img__box">
                                <img src="images/projects/design/design-34.webp" class="img-fluid position-absolute top-0 start-0 w-100 h-100" alt="Project Image">
                            </a>
                        </div><!--.//col-->
                        <div class="col-md-6">
                            <a href="images/projects/design/design-35.webp" class="projectItem project__img__box">
                                <img src="images/projects/design/design-35.webp" class="img-fluid position-absolute top-0 start-0 w-100 h-100" alt="Project Image">
                            </a>
                        </div><!--.//col-->
                        <div class="col-md-12">
                            <a href="images/projects/design/design-36.webp" class="projectItem project__img__box">
                                <img src="images/projects/design/design-36.webp" class="img-fluid position-absolute top-0 start-0 w-100 h-100" alt="Project Image">
                            </a>
                        </div><!--.//col--> 
                    </div><!--.//row-->
                </div><!--.//tab2-->

                
            </div><!--.//tab-content-->
              
            <!-- Pagination -->
            <div class="mt-4 mt-lg-5 text-center"> 
                <?php
                    $firstArrow="true"; $lastArrow="false"; 
                    $prevPageUrl="projects-2.php";
                    $nextPageUrl="projects-4.php"; 
                    $active     = '4';
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