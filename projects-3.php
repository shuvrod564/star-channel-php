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
                    <div class="row g-4">
                        <div class="col-12 col-md-6"> 
                            <div class="position-relative video__box"> 
                                <img src="images/projects/video-thumbnail/01.webp" class="img-fluid w-100" alt="image"> 
                                <button class="btn p-0 rounded-circle" data-bs-toggle="modal" data-bs-target="#vt01"> 
                                </button>
                            </div> 
                            <!-- Modal LESELLPSS -->
                            <div class="modal fade video__modal" id="vt01" tabindex="-1" aria-labelledby="vt01Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl modal-lg modal-md">
                                    <div class="modal-content border-0"> 
                                        <div class="modal-body p-0 position-relative border-0">
                                            <button type="button" class="btn-close rounded-circle position-absolute" data-bs-dismiss="modal" aria-label="Close"></button>
                                            <div class="video"> 
                                                <iframe id="vtIframe01" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="true" data-autoplay="true"></iframe>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div> 
                            <script> 
                                document.getElementById('vt01').addEventListener('show.bs.modal', function (event) { 
                                    document.getElementById("vtIframe01").src='https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Ffb.watch%2F7wcTc4riZi%2F&width=500&show_text=false&height=282&appId'; 
                                }) 
                                document.getElementById('vt01').addEventListener('hidden.bs.modal', function (event) { 
                                    document.getElementById("vtIframe01").src=''; 
                                }) 
                            </script> 
                        </div><!--.//col-->
                         
                        <div class="col-12 col-md-6"> 
                            <div class="position-relative video__box"> 
                                <img src="images/projects/video-thumbnail/02.webp" class="img-fluid w-100" alt="image"> 
                                <button class="btn p-0 rounded-circle" data-bs-toggle="modal" data-bs-target="#vt02"> 
                                </button>
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
                                    document.getElementById("vtIframe02").src='https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fm.facebook.com%2F648513211833574%2Fvideos%2F619066815650474%2F%3Frefsrc%3Ddeprecated%26_rdr&width=500&show_text=false&height=282&appId'; 
                                }) 
                                document.getElementById('vt02').addEventListener('hidden.bs.modal', function (event) { 
                                    document.getElementById("vtIframe02").src=''; 
                                }) 
                            </script> 
                        </div><!--.//col-->

                        <div class="col-12 col-md-6"> 
                            <div class="position-relative video__box"> 
                                <img src="images/projects/video-thumbnail/03.webp" class="img-fluid w-100" alt="image"> 
                                <button class="btn p-0 rounded-circle" data-bs-toggle="modal" data-bs-target="#vt03"> 
                                </button>
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
                                    document.getElementById("vtIframe03").src='https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FAsianet%2Fvideos%2F829569314268317%2F&width=500&show_text=false&height=282&appId'; 
                                }) 
                                document.getElementById('vt03').addEventListener('hidden.bs.modal', function (event) { 
                                    document.getElementById("vtIframe03").src=''; 
                                }) 
                            </script> 
                        </div><!--.//col-->

                        <div class="col-12 col-md-6"> 
                            <div class="position-relative video__box"> 
                                <img src="images/projects/video-thumbnail/04.webp" class="img-fluid w-100" alt="image"> 
                                <button class="btn p-0 rounded-circle" data-bs-toggle="modal" data-bs-target="#vt04"> 
                                </button>
                            </div> 
                            <!-- Modal LESELLPSS -->
                            <div class="modal fade video__modal" id="vt04" tabindex="-1" aria-labelledby="vt04Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl modal-lg modal-md">
                                    <div class="modal-content border-0"> 
                                        <div class="modal-body p-0 position-relative border-0">
                                            <button type="button" class="btn-close rounded-circle position-absolute" data-bs-dismiss="modal" aria-label="Close"></button>
                                            <div class="video"> 
                                                <iframe id="vtIframe04" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="true" data-autoplay="true"></iframe>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div> 
                            <script> 
                                document.getElementById('vt04').addEventListener('show.bs.modal', function (event) { 
                                    document.getElementById("vtIframe04").src='https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FMythricoconutoil%2Fvideos%2F144063734454311%2F&width=500&show_text=false&height=282&appId'; 
                                }) 
                                document.getElementById('vt04').addEventListener('hidden.bs.modal', function (event) { 
                                    document.getElementById("vtIframe04").src=''; 
                                }) 
                            </script> 
                        </div><!--.//col-->
                        <div class="col-12 col-md-6"> 
                            <div class="position-relative video__box"> 
                                <img src="images/projects/video-thumbnail/Malayalam-Rapper-Fejo.webp" class="img-fluid w-100" alt="image"> 
                                <button class="btn p-0 rounded-circle" data-bs-toggle="modal" data-bs-target="#vt05"> 
                                </button>
                            </div> 
                            <!-- Modal LESELLPSS -->
                            <div class="modal fade video__modal" id="vt05" tabindex="-1" aria-labelledby="vt05Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl modal-lg modal-md">
                                    <div class="modal-content border-0"> 
                                        <div class="modal-body p-0 position-relative border-0">
                                            <button type="button" class="btn-close rounded-circle position-absolute" data-bs-dismiss="modal" aria-label="Close"></button>
                                            <div class="video"> 
                                                <iframe id="vtIframe05" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="true" data-autoplay="true"></iframe>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div> 
                            <script> 
                                document.getElementById('vt05').addEventListener('show.bs.modal', function (event) { 
                                    document.getElementById("vtIframe05").src='https://www.youtube.com/embed/7vePSsoJcOo?autoplay=1'; 
                                }) 
                                document.getElementById('vt05').addEventListener('hidden.bs.modal', function (event) { 
                                    document.getElementById("vtIframe05").src=''; 
                                }) 
                            </script> 
                        </div><!--.//col-->
                        <div class="col-12 col-md-6"> 
                            <div class="position-relative video__box"> 
                                <img src="images/projects/video-thumbnail/06.webp" class="img-fluid w-100" alt="image"> 
                                <button class="btn p-0 rounded-circle" data-bs-toggle="modal" data-bs-target="#vt06"> 
                                </button>
                            </div> 
                            <!-- Modal LESELLPSS -->
                            <div class="modal fade video__modal" id="vt06" tabindex="-1" aria-labelledby="vt06Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl modal-lg modal-md">
                                    <div class="modal-content border-0"> 
                                        <div class="modal-body p-0 position-relative border-0">
                                            <button type="button" class="btn-close rounded-circle position-absolute" data-bs-dismiss="modal" aria-label="Close"></button>
                                            <div class="video"> 
                                                <iframe id="vtIframe06" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="true" data-autoplay="true"></iframe>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div> 
                            <script> 
                                document.getElementById('vt06').addEventListener('show.bs.modal', function (event) { 
                                    document.getElementById("vtIframe06").src='https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FAsianet%2Fvideos%2F250923216548282%2F&amp;width=500&amp;show_text=false&amp;height=282&amp;appId'; 
                                }) 
                                document.getElementById('vt06').addEventListener('hidden.bs.modal', function (event) { 
                                    document.getElementById("vtIframe06").src=''; 
                                }) 
                            </script> 
                        </div><!--.//col--> 
                        <div class="col-12 col-md-6"> 
                            <div class="position-relative video__box"> 
                                <img src="images/projects/video-thumbnail/bmw-3-series.webp" class="img-fluid w-100" alt="image"> 
                                <button class="btn p-0 rounded-circle" data-bs-toggle="modal" data-bs-target="#vt07"> 
                                </button>
                            </div> 
                            <!-- Modal LESELLPSS -->
                            <div class="modal fade video__modal" id="vt07" tabindex="-1" aria-labelledby="vt07Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl modal-lg modal-md">
                                    <div class="modal-content border-0"> 
                                        <div class="modal-body p-0 position-relative border-0">
                                            <button type="button" class="btn-close rounded-circle position-absolute" data-bs-dismiss="modal" aria-label="Close"></button>
                                            <div class="video"> 
                                                <iframe id="vtIframe07" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="true" data-autoplay="true"></iframe>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div> 
                            <script> 
                                document.getElementById('vt07').addEventListener('show.bs.modal', function (event) { 
                                    document.getElementById("vtIframe07").src='https://www.youtube.com/embed/qziU6YJm0IQ?autoplay=1'; 
                                }) 
                                document.getElementById('vt07').addEventListener('hidden.bs.modal', function (event) { 
                                    document.getElementById("vtIframe07").src=''; 
                                }) 
                            </script> 
                        </div><!--.//col--> 
                        <div class="col-12 col-md-6"> 
                            <div class="position-relative video__box"> 
                                <img src="images/projects/video-thumbnail/Mohanlal-on-R-P-Foundation.webp" class="img-fluid w-100" alt="image"> 
                                <button class="btn p-0 rounded-circle" data-bs-toggle="modal" data-bs-target="#vt08"> 
                                </button>
                            </div> 
                            <!-- Modal LESELLPSS -->
                            <div class="modal fade video__modal" id="vt08" tabindex="-1" aria-labelledby="vt08Label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl modal-lg modal-md">
                                    <div class="modal-content border-0"> 
                                        <div class="modal-body p-0 position-relative border-0">
                                            <button type="button" class="btn-close rounded-circle position-absolute" data-bs-dismiss="modal" aria-label="Close"></button>
                                            <div class="video"> 
                                                <iframe id="vtIframe08" src="" title="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="true" data-autoplay="true"></iframe>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div> 
                            <script> 
                                document.getElementById('vt08').addEventListener('show.bs.modal', function (event) { 
                                    document.getElementById("vtIframe08").src='https://www.youtube.com/embed/MEzPNGoaxKk?autoplay=1'; 
                                }) 
                                document.getElementById('vt08').addEventListener('hidden.bs.modal', function (event) { 
                                    document.getElementById("vtIframe08").src=''; 
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
                            <a href="images/projects/design/design-21.webp" class="projectItem project__img__box"> 
                                <img src="images/projects/design/design-21.webp" class="img-fluid thumbnail position-absolute top-0 start-0 w-100 h-100" alt="project-thumbnail">  
                            </a>   
                        </div><!--.//col-->
                        <div class="col-md-3 col-sm-6">
                            <a href="images/projects/design/design-22.webp" class="projectItem project__img__box">
                                <img src="images/projects/design/design-22.webp" class="img-fluid position-absolute top-0 start-0 w-100 h-100" alt="Project Image">
                            </a>
                        </div><!--.//col-->
                        <div class="col-md-6">
                            <a href="images/projects/design/design-23.webp" class="projectItem project__img__box">
                                <img src="images/projects/design/design-23.webp" class="img-fluid position-absolute top-0 start-0 w-100 h-100" alt="Project Image">
                            </a>
                        </div><!--.//col-->
                        <div class="col-md-6">
                            <a href="images/projects/design/design-32.webp" class="projectItem project__img__box">
                                <img src="images/projects/design/design-32.webp" class="img-fluid position-absolute top-0 start-0 w-100 h-100" alt="Project Image">
                            </a>
                        </div><!--.//col-->
                        <div class="col-md-3 col-sm-6">
                            <a href="images/projects/design/design-24.webp" class="projectItem project__img__box">
                                <img src="images/projects/design/design-24.webp" class="img-fluid position-absolute top-0 start-0 w-100 h-100" alt="Project Image">
                            </a>
                        </div><!--.//col-->
                        <div class="col-md-3 col-sm-6">
                            <a href="images/projects/design/design-25.webp" class="projectItem project__img__box">
                                <img src="images/projects/design/design-25.webp" class="img-fluid position-absolute top-0 start-0 w-100 h-100" alt="Project Image">
                            </a>
                        </div><!--.//col-->
                        <div class="col-md-3 col-sm-6">
                            <a href="images/projects/design/design-26.webp" class="projectItem project__img__box">
                                <img src="images/projects/design/design-26.webp" class="img-fluid position-absolute top-0 start-0 w-100 h-100" alt="Project Image">
                            </a>
                        </div><!--.//col-->
                        <div class="col-md-3 col-sm-6">
                            <a href="images/projects/design/design-27.webp" class="projectItem project__img__box">
                                <img src="images/projects/design/design-27.webp" class="img-fluid position-absolute top-0 start-0 w-100 h-100" style="object-position: center top;" alt="Project Image">
                            </a>
                        </div><!--.//col-->
                        <div class="col-md-3 col-sm-6">
                            <a href="images/projects/design/design-28.webp" class="projectItem project__img__box">
                                <img src="images/projects/design/design-28.webp" class="img-fluid position-absolute top-0 start-0 w-100 h-100" alt="Project Image">
                            </a>
                        </div><!--.//col-->
                        <div class="col-md-3 col-sm-6">
                            <a href="images/projects/design/design-29.webp" class="projectItem project__img__box">
                                <img src="images/projects/design/design-29.webp" class="img-fluid position-absolute top-0 start-0 w-100 h-100" alt="Project Image">
                            </a>
                        </div><!--.//col--> 
                    </div><!--.//row-->
                </div><!--.//tab2-->

                
            </div><!--.//tab-content-->
              
            <!-- Pagination -->
            <div class="mt-4 mt-lg-5 text-center"> 
                <?php
                    $firstArrow="true"; $lastArrow="true"; 
                    $prevPageUrl="projects-2.php";
                    $nextPageUrl="projects-4.php"; 
                    $active     = '3';
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