<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <title>AUM Productions</title>
 
    <!-- CSS -->
    <?php $folder="root"; include_once('incs/stylesheets.inc.php'); ?>
</head>
<body>  

    <!-- Navbar -->
    <?php $folder="root"; include_once('incs/navbar.inc.php'); ?>
 
    <!-- Header Wrapper Start -->
    <header class="header__wrapper py-5 position-relative">  
        <div class="container-fluid">
            <div class="d-xl-flex align-items-end justify-content-between">
                <h1 class="h1 ff-unbounded fw-bold text-dark text-center text-xl-start">DIGITIZE VIDEOS</h1>
                <p class="desc h5 fw-normal text-center text-xl-end ps-lg-4 my-4 mt-xl-0">
                    At <span class="fw-medium">AUM Productions</span>, we are video strategists who make sure that our clients have the <span class="fw-medium">RIGHT VIDEO</span>, made at the <span class="fw-medium">RIGHT TIME</span>, made use of in the <span class="fw-medium">RIGHT WAY</span> to attract the <span class="fw-medium">RIGHT AUDIENCE</span> and entice them to take the <span class="fw-medium">RIGHT ACTION</span>.
                </p>
            </div>
            <div class="mt-4 text-center text-xl-start">
                <a href="start-project.php" class="btn btn-outline-dark me-2 me-md-3">START A PROJECT</a>
                <a href="about.php" class="btn btn-dark">KNOW MORE</a>
            </div>

            <div class="mt-5 hero__promo__wrapper">
                <div class="position-relative">
                    <img src="images/projects/promo/full-promo.webp" class="img-fluid banner" loading="lazy" alt="video thumbnail">
                    <button data-bs-toggle="modal" data-bs-target="#videoModal" class="btn play__btn rounded-circle position-absolute top-50 start-50 translate-middle p-2 justify-content-center">
                        <img src="images/icons/play-white-icon.svg" class="img-fluid" alt="play icon">
                    </button>
                </div> 
  
                <!-- Modal -->
                <div class="modal fade video__modal" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-md modal-lg modal-xl modal-xxl">
                        <div class="modal-content">

                            <div class="modal-body p-0 position-relative border-0"> 
                                <button type="button" class="btn-close rounded-circle position-absolute" data-bs-dismiss="modal" aria-label="Close"></button>
                                <!-- <div class="video static"> 
                                    <video width="320" height="240" controls autoplay id="videoPlayer">
                                        <source id="source01" src="images/videos/Aum-Video-Production.mp4" type="video/mp4">
                                        <source id="source02" src="images/videos/Aum-Video-Production.ogg" type="video/ogg">
                                        Your browser does not support the video tag.
                                    </video> 
                                </div>  -->
                                <div class="video"> 
                                    <iframe id="heroIframe" src="" title="Reel" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="true" data-autoplay="true"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script> 
                    document.getElementById('videoModal').addEventListener('show.bs.modal', function (event) { 
                        document.getElementById("heroIframe").src='https://www.youtube.com/embed/dT8gtjqjS6M?autoplay=1'; 
                    }) 
                    document.getElementById('videoModal').addEventListener('hidden.bs.modal', function (event) { 
                        document.getElementById("heroIframe").src=''; 
                    }) 
                </script> 
                <!-- <script> 
                    document.getElementById('videoModal').addEventListener('show.bs.modal', function (event) {  
                        document.getElementById("videoPlayer").play(); 
                    }) 
                    document.getElementById('videoModal').addEventListener('hidden.bs.modal', function (event) {  
                        document.getElementById("videoPlayer").pause();  
                    }) 
                </script>  -->
                  
  
            </div>
        </div>
    </header> 
    <!-- Header Wrapper End --> 
    
    <!-- Services Wrapper Start -->
    <section class="pt-3 pt-sm-4 pt-md-5 pb-sm-4 pb-lg-5">
        <div class="container-fluid">  
            <h2 class="text-uppercase ff-unbounded text-center text-md-start">WHAT WE DO</h2>
            <p class="lead-sm fw-medium text-justify text-md-start">
                As a reputable media firm, our sole objective is to collaborate with you to turn your video production objectives into successful pieces of art using our strong knowledge and collaborative efforts. Whether it's music albums or television documentaries, we've what you are looking for. Our skilled and experienced employees can produce art that has real emotional resonance and captures the attention of the intended audience. We always strive to use the maximum originality and skill in whatever we do. We always attempt to identify opportunities, establish attainable goals, and provide excellent work.
            </p>
            <div class="text-center text-md-start"> 
                <a href="projects.php" class="link fw-bold">KNOW MORE</a>
            </div>
             

            <div class="accordion accordion-flush mt-4 mt-xl-5" id="accordionFlushExample">
                <div class="accordion-item">
                    <h3 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button h2 text-uppercase ff-unbounded" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Video production
                        </button>
                    </h3>
                    <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p class="col-lg-10">With branded video material, you can advance a certain idea or goal that your business stands for. We produce branded video content for your business that is authentic, engaging, often under 60 seconds, and aimed towards your target market.</p>
                            <div class="text-end">
                                <a href="video-production.php" class="btn btn-outline-dark">KNOW MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button h2 text-uppercase ff-unbounded collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Branding & Design
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p class="col-lg-10">Our expert services guarantee that the reputation of your organisation grows and aids in the expansion of your business by providing content of genuine value and developing targeted brands people are invested in.</p>
                            <div class="text-end">
                                <a href="branding-design.php" class="btn btn-outline-dark">KNOW MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button h2 text-uppercase ff-unbounded collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Influencer Marketing
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p class="col-lg-10">Our services are the best for making flawless, eye-catching designs since they provide a very distinctive blend of style and refinement in poster design. Our informative digital posters will be very beneficial to your business because of their many enticing characteristics.</p>
                            <div class="text-end">
                                <a href="influencer-marketing.php" class="btn btn-outline-dark">KNOW MORE</a>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div><!--.//container--> 
    </section>
    <!-- Services Wrapper End --> 

    <!-- Services Wrapper Start -->
    <section class="ptb position-relative">  
        <div class="container-fluid"> 
            <h2 class="h2 fw-bold ff-unbounded text-uppercase text-center">OUR REELS</h2> 
            
            <div class="row g-2 mt-2 mt-lg-4">
                <div class="col-12 col-md-6"> 
                    <div class="position-relative video__box"> 
                        <img src="images/projects/promo/ads-promo.webp" class="img-fluid w-100" alt="image"> 
                        <button class="btn p-0 rounded-circle" data-bs-toggle="modal" data-bs-target="#vt01"></button> 
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
                            document.getElementById("vtIframe01").src='https://www.youtube.com/embed/QjNo2cUxW9I?autoplay=1'; 
                            document.getElementById("vtIframe01").title='Advertisment Reel'; 
                        }) 
                        document.getElementById('vt01').addEventListener('hidden.bs.modal', function (event) { 
                            document.getElementById("vtIframe01").src=''; 
                            document.getElementById("vtIframe01").title=''; 
                        }) 
                    </script> 
                </div><!--.//col-->
                 
                <div class="col-12 col-md-6"> 
                    <div class="position-relative video__box"> 
                        <img src="images/projects/promo/Entertainment-PROMO.webp" class="img-fluid w-100" alt="image"> 
                        <button class="btn p-0 rounded-circle" data-bs-toggle="modal" data-bs-target="#vt02"></button> 
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
                            document.getElementById("vtIframe02").src='https://www.youtube.com/embed/OS0uLMrqYr0?autoplay=1'; 
                            document.getElementById("vtIframe02").title='Entertainment Reel'; 
                        }) 
                        document.getElementById('vt02').addEventListener('hidden.bs.modal', function (event) { 
                            document.getElementById("vtIframe02").src=''; 
                            document.getElementById("vtIframe02").title=''; 
                        }) 
                    </script> 
                </div><!--.//col-->

                <div class="col-12 col-md-6"> 
                    <div class="position-relative video__box"> 
                        <img src="images/projects/promo/Corporate-promo.webp" class="img-fluid w-100" alt="image"> 
                        <button class="btn p-0 rounded-circle" data-bs-toggle="modal" data-bs-target="#vt03"></button> 
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
                            document.getElementById("vtIframe03").src='https://www.youtube.com/embed/ktjwZcn5Sg4?autoplay=1'; 
                            document.getElementById("vtIframe03").title='Corporate Reel'; 
                        }) 
                        document.getElementById('vt03').addEventListener('hidden.bs.modal', function (event) { 
                            document.getElementById("vtIframe03").src=''; 
                            document.getElementById("vtIframe03").title=''; 
                        }) 
                    </script> 
                </div><!--.//col-->

                <div class="col-12 col-md-6"> 
                    <div class="position-relative video__box"> 
                        <img src="images/projects/promo/Promotional-promo.webp" class="img-fluid w-100" alt="image"> 
                        <button class="btn p-0 rounded-circle" data-bs-toggle="modal" data-bs-target="#vt04"></button> 
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
                            document.getElementById("vtIframe04").src='https://www.youtube.com/embed/DV3_JCsn1x4?autoplay=1'; 
                            document.getElementById("vtIframe04").title='Promotional Reel'; 
                        }) 
                        document.getElementById('vt04').addEventListener('hidden.bs.modal', function (event) { 
                            document.getElementById("vtIframe04").src=''; 
                            document.getElementById("vtIframe04").title=''; 
                        }) 
                    </script> 
                </div><!--.//col--> 
                 
            </div><!--.//row-->
            
            <div class="mt-4 mt-lg-5 text-center">
                <a href="projects.php" class="btn btn-dark">KNOW MORE</a>
            </div>

        </div><!--.//container-->
    </section>
    <!-- Services Wrapper End --> 
 
    <!-- About Us Wrapper Start -->
    <section class="pb-5 pt-sm-4"> 
        <div class="container-fluid">
            <div class="row g-4 gx-lg-5 align-items-center justify-content-center">
                <div class="col-lg-5 col-md-7 text-center">
                    <a href="video-production.php"> 
                        <img src="images/about/about-thumbnail.webp" class="img-fluid" alt="About Thumbnail">
                    </a>
                    <!-- <h2 class="h1 text-uppercase ff-unbounded text-center text-lg-start"><span class="stroke d-lg-block">Producers</span>  of creative <span class="stroke d-lg-block">and</span> engaging <span class="stroke d-lg-block">videos</span></h2> -->
                </div>
                <div class="col-lg-7"> 
                    <h2 class="text-uppercase ff-unbounded text-center text-lg-start">ABOUT US</h2>
                    <p class="mt-3 text-justify text-lg-start">Videos have been proven to have the most significant emotional impact on viewers. At AUM Productions, we firmly believe in this idea and this serves as the main inspiration for all of our video productions. Our talented video producers are committed to producing only the best shots in each of our videos. From start to end, our team of experts will be there at every stage of the production process to make sure that the final result is nothing but perfect. Every video we produce promises positive results for your business, whether it is a corporate video, social impact film, virtual tour, 3D animation, or social media promotion. Timely completion of work and high-quality production standards are the hallmark traits at AUM Productions.</p>
                    <div class=" text-center text-lg-start"> 
                        <a href="about.php" class="btn btn-dark">Know More</a> 
                    </div>
                </div><!--.//col--> 
            </div><!--.//row-->
        </div><!--.//container-->
    </section>
    <!-- About Us Wrapper End -->  
 
    <!-- Branding Designs Wrapper Start -->
    <div class="pb-5 pt-2 pt-lg-3 pt-xl-4">
        <div class="container-fluid"> 
            <p class="h2 text-uppercase ff-unbounded text-center text-lg-start" style="opacity: .3;"></p>
            <h2 class="h3 fw-bold text-uppercase ff-unbounded text-center text-lg-start d-flex flex-wrap slider__heading">
                <div class="caption">Why choose aum productions for</div>
                <div class="slider"> 
                    <div class="owl-carousel textCarousel">
                        <div>video production</div>
                        <div>Branding designs</div>
                    </div> 
                </div>
            </h2>
            
            <div class="owl-carousel brandingDesignsSlider mt-4 mt-md-5">
                <div class="design__card p-3 p-md-4">
                    <div class="d-flex justify-content-center align-items-center icon p-3 mb-3">
                        <img src="images/icons/enticing-content.svg" class="img-fluid" alt="Icon">
                    </div>
                    <h3 class="h5 fw-bold text-uppercase ff-unbounded">Enticing content</h3>
                    <p class="desc fs-6">Before creating the perfect video, we consider a company from the owner’s and the target audience’s points of view. In order to satisfy your audience’s demands in fresh and engaging ways, we work hard to create stories that reflect the emotions they are feeling.</p> 
                </div>
                <div class="design__card p-3 p-md-4">
                    <div class="d-flex justify-content-center align-items-center icon p-3 mb-3">
                        <img src="images/icons/well-developed-strategy.svg" class="img-fluid" alt="Icon">
                    </div>
                    <h3 class="h5 fw-bold ff-unbounded text-uppercase">Well developed strategy</h3>
                    <p class="desc fs-6">We carefully examine target consumer characteristics to determine the best occasions and tones for connecting with them. We consider all available avenues for communicating your message or idea and devise the most effective and cost-effective course of action.</p>  
                </div> 
                <div class="design__card p-3 p-md-4">
                    <div class="d-flex justify-content-center align-items-center icon p-3 mb-3">
                        <img src="images/icons/enticing-content.svg" class="img-fluid" alt="Icon">
                    </div>
                    <h3 class="h5 fw-bold text-uppercase ff-unbounded">Thorough execution of work</h3>
                    <p class="desc fs-6">By using the best professionals in the field and the appropriate tools for each production, we ensure that every project lives up to our high production standards. Each frame of our art is meticulously crafted with love.</p> 
                </div>
                 
            </div><!--.//owl-carousel--> 
        </div><!--.//container-->
    </div>
    <!-- Branding Designs Wrapper End -->
 
    <!-- Clients Wrapper Start -->
    <div class="pb-5 pt-xl-4">
        <div class="container-fluid">  
            <h2 class="text-uppercase text-center">Our clients</h2>
            <p class="text-center">Our many happy and satisfied clients stand as testimonials of the effectiveness of our services.</p>
            
            <div class="testi__slider__box mt-4 mt-lg-5"> 
                <div class="owl-carousel clientSlider">
                    <div class="p-2"> 
                        <div class="client__card">
                            <img src="images/clients/01.webp" class="img-fluid" alt="client logo">
                        </div> 
                    </div>
                    <div class="p-2"> 
                        <div class="client__card">
                            <img src="images/clients/02.webp" class="img-fluid" alt="client logo">
                        </div> 
                    </div>
                    <div class="p-2"> 
                        <div class="client__card">
                            <img src="images/clients/03.webp" class="img-fluid" alt="client logo">
                        </div> 
                    </div>
                    <div class="p-2"> 
                        <div class="client__card">
                            <img src="images/clients/04.webp" class="img-fluid" alt="client logo">
                        </div> 
                    </div>
                    <div class="p-2"> 
                        <div class="client__card">
                            <img src="images/clients/05.webp" class="img-fluid" alt="client logo">
                        </div> 
                    </div>
                    <div class="p-2"> 
                        <div class="client__card">
                            <img src="images/clients/06.webp" class="img-fluid" alt="client logo">
                        </div> 
                    </div> 
                    <div class="p-2"> 
                        <div class="client__card">
                            <img src="images/clients/08.webp" class="img-fluid" alt="client logo">
                        </div> 
                    </div>
                    <div class="p-2"> 
                        <div class="client__card">
                            <img src="images/clients/09.webp" class="img-fluid" alt="client logo">
                        </div> 
                    </div>
                    <div class="p-2"> 
                        <div class="client__card">
                            <img src="images/clients/10.webp" class="img-fluid" alt="client logo">
                        </div> 
                    </div>
                    <div class="p-2"> 
                        <div class="client__card">
                            <img src="images/clients/11.webp" class="img-fluid" alt="client logo">
                        </div> 
                    </div> 
                    <div class="p-2"> 
                        <div class="client__card">
                            <img src="images/clients/Lifekart.webp" class="img-fluid" alt="client logo">
                        </div> 
                    </div>
                    <div class="p-2"> 
                        <div class="client__card">
                            <img src="images/clients/Tacchhi.webp" class="img-fluid" alt="client logo">
                        </div> 
                    </div>
                    <div class="p-2"> 
                        <div class="client__card">
                            <img src="images/clients/arab-dreams.webp" class="img-fluid" alt="client logo">
                        </div> 
                    </div>
                    
                </div><!--.//owl-carousel-->
            </div> 
        </div><!--.//container-->
    </div>
    <!-- Clients Wrapper End -->

    <!-- OUR TEAM Wrapper Start --> 
    <?php $folder="root"; include_once('incs/quick-contact.inc.php'); ?>
    <!-- OUR TEAM Wrapper End -->

    <!-- Over View Wrapper Start --> 
    <?php $folder="root"; include_once('incs/ready-for-start-project-promo.inc.php'); ?>
    <!-- Over View Wrapper End -->
  
    <!-- Footer -->
    <?php $folder="root"; include_once('incs/footer.inc.php'); ?>
    
</body>
</html>


