<nav aria-label="Blog Page Navigation">
  <ul class="pagination justify-content-center mt-5 pt-lg-2" id="blogPagination">
      <?php if( $firstArrow === 'true' ) { ?> 
          <li class="page-item">
              <a class="page-link" href="<?php echo $prevPageUrl; ?>" aria-label="Previous">
                  <img src="images/icons/pagination//arrow-left.svg" class="img-fluid" alt="Icon">
              </a>
          </li>
      <?php } ?>

      <li class="page-item">
          <a class="page-link <?php if($active==='1'){echo "active"; }else{ echo ''; }?>" href="projects.php">1</a>
      </li>
      <li class="page-item">
          <a class="page-link <?php if($active==='2'){echo "active"; }else{ echo ''; }?>" href="projects-2.php">2</a>
      </li>
      <li class="page-item">
          <a class="page-link <?php if($active==='3'){echo "active"; }else{ echo ''; }?>" href="projects-3.php">3</a>
      </li> 
      <li class="page-item">
          <a class="page-link <?php if($active==='4'){echo "active"; }else{ echo ''; }?>" href="projects-4.php">4</a>
      </li> 

      <?php if( $lastArrow === 'true' ) { ?> 
          <li class="page-item">
              <a class="page-link" href="<?php echo $nextPageUrl; ?>" aria-label="Next">
                  <img src="images/icons/pagination/arrow-right.svg" class="img-fluid" alt="Icon">
              </a>
          </li>
      <?php } ?>
  </ul>
</nav>