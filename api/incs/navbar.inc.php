<!-- Check Root Folder or Inside Folder By $folder  -->
<?php if ($folder === 'root') { ?>
    <!-- PRELOADER --> 
    <div id="preloader"> 
        <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    </div>  
   
      
    <!-- navigation start --> 
    <nav class="navbar " id="mainNav">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand p-0 m-0">
                <img src="images/star-channel.webp" alt="Site-logo">
            </a> 
            <div class="nav__content d-flex justify-content-end justify-content-xl-between align-items-center">
                <ul class="links d-none d-xl-flex text-uppercase" id="link__list">  
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" type="button" id="dropdownMenu1" data-bs-toggle="dropdown" aria-expanded="false">
                            Video production
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="ad-film-videos.php" class="dropdown-item">Ad Film Videos</a></li> 
                            <li><a href="entertainment-videos.php" class="dropdown-item">Entertainment Videos</a></li>
                            <li><a href="corporate-videos.php" class="dropdown-item">Corporate film Videos</a></li> 
                            <li><a href="promotional-videos.php" class="dropdown-item">Promotional Videos</a></li> 
                        </ul> 
                    </li>   
                    <li class="nav-item"><a href="branding-design.php" class="nav-link">Branding & Design</a></li> 
                    <li class="nav-item"><a href="influencer-marketing.php" class="nav-link">Influencer Marketing</a></li> 
                </ul>
                <div class="d-flex align-items-center">
                    <a href="start-project.php" class="btn btn-outline-dark me-3 me-xxl-4 d-none d-sm-inline-flex">Start A Project</a>
                    <button class="navbar-toggler bgi collapsed" onclick="openSideNemu()"><span></span><span></span><span></span></button> 
                </div>
            </div>
        </div> 
    </nav>
    <aside class="position-fixed top-0 start-0 w-100 h-100 side__menu" id="sideNav">
        <div class="content ms-auto w-100">
            <div class="py-2 px-3"> 
                <button class="btn btn-close rounded-circle p-2" onclick="closeSideNemu()"></button>
            </div>
            <ul class="links" id="sideNavLinks"> 
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">about us</a></li>
                <li>
                    <!-- <a class="collapsed drop__btn" data-bs-toggle="collapse" href="#collapseService" role="button" aria-expanded="false" aria-controls="collapseService">
                        Service
                    </a> -->
                    <div class="d-flex justify-content-between submenu__btns">
                        <a href="video-production.php" class="_link">Video production</a>
                        <a class="collapsed drop__btn collapsed p-0" data-bs-toggle="collapse" href="#videoProductionMenu" role="button" aria-expanded="false" aria-controls="videoProductionMenu"></a>
                    </div>
                    <ul class="collapse" id="videoProductionMenu">
                        <li><a href="ad-film-videos.php" class="inner-link line">Ad Film Videos</a></li> 
                        <li><a href="corporate-videos.php" class="inner-link line">Corporate Videos</a></li>  
                        <!--  -->
                        <li><a href="entertainment-videos.php" class="inner-link line">Entertainment Videos</a></li>
                        <li><a href="animation-videos.php" class="inner-link line">Animation Videos</a></li>
                        <li><a href="documentary-films.php" class="inner-link line">Documentary Films</a></li>
                        <li><a href="film-productions-videos.php" class="inner-link line">Film Productions Videos</a></li>
                        <li><a href="educational-videos.php" class="inner-link line">Educational Videos</a></li>
                        <li><a href="product-photoshoot.php" class="inner-link line">Product photoshoot</a></li>
                        <li><a href="product-videos.php" class="inner-link line">Product Videos</a></li>
                        <li><a href="explainer-videos.php" class="inner-link line">Explainer Videos</a></li>
                        <li><a href="testimonial-videos.php" class="inner-link line">Testimonial Videos</a></li>
                        <!--  -->
                        <li><a href="video-editing.php" class="inner-link line">Video Editing</a></li>
                    </ul>
                </li>
                
                <!--  -->
                <li> 
                    <div class="d-flex justify-content-between submenu__btns">
                        <a href="branding-design.php" class="_link">Branding and design</a>
                        <a class="collapsed drop__btn collapsed p-0" data-bs-toggle="collapse" href="#brandingMenu" role="button" aria-expanded="false" aria-controls="brandingMenu"></a>
                    </div>
                    <ul class="collapse" id="brandingMenu">
                        <li><a href="content-creation.php" class="inner-link line">Content Creation</a></li>
                        <li><a href="graphic-designing.php" class="inner-link line">Graphic Designing</a></li>  
                        <li><a href="poster-designing.php" class="inner-link line">Poster Designing</a></li>  
                        <li><a href="branding-logo.php" class="inner-link line">Branding & Logo</a></li>  
                    </ul>
                </li>
                <!--  -->
                <li><a href="influencer-marketing.php">Influencer Marketing</a></li> 
                <li><a href="greenmat-studio-floor.php">Greenmat Studio Floor</a></li>  
                   
                <li><a href="projects.php">projects</a></li>  
                <li><a href="#">online learning</a></li>  
                <li><a href="./blog/">blog</a></li>  
                <li><a href="contact.php">Contact</a></li>  
            </ul> 
        </div>
    </aside>
<?php } if ($folder === 'blog') { ?>
     <!-- PRELOADER --> 
    <div id="preloader"> 
        <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    </div>   
      
    <!-- navigation start --> 
    <nav class="navbar " id="mainNav">
        <div class="container-fluid">
            <a href="../index.php" class="navbar-brand p-0 m-0">
                <img src="../images/logo.svg" alt="Site-logo">
            </a> 
            <div class="nav__content d-flex justify-content-end justify-content-xl-between align-items-center">
                <ul class="links d-none d-xl-flex text-uppercase" id="link__list">  
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" type="button" id="dropdownMenu1" data-bs-toggle="dropdown" aria-expanded="false">
                            Video production
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="../ad-film-videos.php" class="dropdown-item">Ad Film Videos</a></li> 
                            <li><a href="../entertainment-videos.php" class="dropdown-item">Entertainment Videos</a></li>
                            <li><a href="../corporate-videos.php" class="dropdown-item">Corporate film Videos</a></li> 
                            <li><a href="../promotional-videos.php" class="dropdown-item">Promotional Videos</a></li> 
                        </ul> 
                    </li>   
                    <li class="nav-item"><a href="../branding-design.php" class="nav-link">Branding & Design</a></li> 
                    <li class="nav-item"><a href="../influencer-marketing.php" class="nav-link">Influencer Marketing</a></li> 
                </ul>
                <div class="d-flex align-items-center">
                    <a href="../start-project.php" class="btn btn-outline-dark me-3 me-xxl-4 d-none d-sm-inline-flex">Start A Project</a>
                    <button class="navbar-toggler bgi collapsed" onclick="openSideNemu()"><span></span><span></span><span></span></button> 
                </div>
            </div>
        </div> 
    </nav>
    <aside class="position-fixed top-0 start-0 w-100 h-100 side__menu" id="sideNav">
        <div class="content ms-auto w-100">
            <div class="py-2 px-3"> 
                <button class="btn btn-close rounded-circle p-2" onclick="closeSideNemu()"></button>
            </div>
            <ul class="links" id="sideNavLinks"> 
                <li><a href="../index.php">Home</a></li>
                <li><a href="../about.php">about us</a></li>
                <li>
                    <!-- <a class="collapsed drop__btn" data-bs-toggle="collapse" href="#collapseService" role="button" aria-expanded="false" aria-controls="collapseService">
                        Service
                    </a> -->
                    <div class="d-flex justify-content-between submenu__btns">
                        <a href="../video-production.php" class="_link">Video production</a>
                        <a class="collapsed drop__btn collapsed p-0" data-bs-toggle="collapse" href="#videoProductionMenu" role="button" aria-expanded="false" aria-controls="videoProductionMenu"></a>
                    </div>
                    <ul class="collapse" id="videoProductionMenu">
                        <li><a href="../ad-film-videos.php" class="inner-link line">Ad Film Videos</a></li> 
                        <li><a href="../corporate-videos.php" class="inner-link line">Corporate Videos</a></li>  
                        <!--  -->
                        <li><a href="../entertainment-videos.php" class="inner-link line">Entertainment Videos</a></li>
                        <li><a href="../animation-videos.php" class="inner-link line">Animation Videos</a></li>
                        <li><a href="../documentary-films.php" class="inner-link line">Documentary Films</a></li>
                        <li><a href="../film-productions-videos.php" class="inner-link line">Film Productions Videos</a></li>
                        <li><a href="../educational-videos.php" class="inner-link line">Educational Videos</a></li>
                        <li><a href="../product-photoshoot.php" class="inner-link line">Product photoshoot</a></li>
                        <li><a href="../product-videos.php" class="inner-link line">Product Videos</a></li>
                        <li><a href="../explainer-videos.php" class="inner-link line">Explainer Videos</a></li>
                        <li><a href="../testimonial-videos.php" class="inner-link line">Testimonial Videos</a></li>
                        <!--  -->
                        <li><a href="../video-editing.php" class="inner-link line">Video Editing</a></li>
                    </ul>
                </li>
                
                <!--  -->
                <li> 
                    <div class="d-flex justify-content-between submenu__btns">
                        <a href="../branding-design.php" class="_link">Branding and design</a>
                        <a class="collapsed drop__btn collapsed p-0" data-bs-toggle="collapse" href="#brandingMenu" role="button" aria-expanded="false" aria-controls="brandingMenu"></a>
                    </div>
                    <ul class="collapse" id="brandingMenu">
                        <li><a href="../content-creation.php" class="inner-link line">Content Creation</a></li>
                        <li><a href="../graphic-designing.php" class="inner-link line">Graphic Designing</a></li>  
                        <li><a href="../poster-designing.php" class="inner-link line">Poster Designing</a></li>  
                        <li><a href="../branding-logo.php" class="inner-link line">Branding & Logo</a></li>  
                    </ul>
                </li>
                <!--  -->
                <li><a href="../influencer-marketing.php">Influencer Marketing</a></li> 
                <li><a href="../greenmat-studio-floor.php">Greenmat Studio Floor</a></li>  
                   
                <li><a href="../projects.php">projects</a></li>  
                <li><a href="#">online learning</a></li>  
                <li><a href="../blog/">blog</a></li>  
                <li><a href="../contact.php">Contact</a></li>  
            </ul> 
        </div>
    </aside>
<?php } ?>
    
    

    <script>
        function openSideNemu() {
            document.getElementById("sideNav").classList.add('js--open');
        }
        function closeSideNemu() {
            document.getElementById("sideNav").classList.remove('js--open');
        }
    </script>
       