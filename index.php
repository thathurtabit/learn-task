<?php
  // HEADER
  $pageName = '';
  $myPath = '';
  include_once('dist/includes/header.inc.php');
?>
                    
      <main id="barba-wrapper" class="main-content" role="document">
        
        <?php
          // NAV
          include_once('dist/includes/nav.inc.php');
        ?>

        <div class="barba-container">
          <div id="page-cover" class="page page--home">
          
            <!-- PAGE HEADER -->
      			<div class="jumbotron text-center">
              <!-- PAGE HEADER INNER -->
              <div class="jumbotron-inner">
                <div class="ami-intro__text">
                    <p>Knowledge<br/> is power!</p>
                </div>
                <div class="ami-intro">
                  <div class="ami-intro__cover-img">
                    <img src="<?php echo $root; ?>/dist/images/ami-small.png" class="ami-body img-fluid" alt="Ami" />
                    <img src="<?php echo $root; ?>/dist/images/ami-small-wing-l.png" class="ami-wing-l img-fluid" alt="Ami" />
                    <img src="<?php echo $root; ?>/dist/images/ami-small-wing-r.png" class="ami-wing-r img-fluid" alt="Ami" />
                    <img src="<?php echo $root; ?>/dist/images/ami-small-foot.png" class="ami-foot-l img-fluid" alt="Ami" />
                    <img src="<?php echo $root; ?>/dist/images/ami-small-foot.png" class="ami-foot-r img-fluid" alt="Ami" />
                  </div>

                </div>
                <h1 class="display-3 text-center">Learn</h1>
                <p>Welcome to the Customer.io knowledge base</p>

                <!-- MAIN SEARCH WRAP -->
                <div class="main-search-wrap">
                  <div class="main-search col-sm-8 justify-content-md-center col-md-6 col-lg-5 col-xl-3">
                    <form class="form-inline">
                      <div class="input-group">
                        <input class="form-control" type="text" placeholder="Search" />
                        <button class="btn input-group-addon" type="submit"><span class="sr-only">Search</span><i class="fa fa-search"></i></button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- / MAIN SEARCH WRAP -->

                <!-- LOADER -->
                <?php include_once('dist/includes/loader.inc.php'); ?>
              </div>
              <!-- / PAGE HEADER INNER -->

              <?php
                // TOGGLE THEME
                include_once('dist/includes/theme-toggle.inc.php');
              ?>
            </div>
            <!-- / PAGE HEADER -->
            

            <!-- MAIN CONTENT -->
            <div class="container main-page">
              
              <div class="row">
                <nav class="breadcrumb">
                  <span class="breadcrumb-item active">Learn</span>
                </nav>
              </div>

              <div class="row">
                <h2 class="sub-title-icon" data-animation="false" data-toggle="tooltip" data-placement="top" title="Help &amp; Documentation"><span class="sr-only">Help &amp; Documentation</span><i class="fa fa-graduation-cap"></i></h2>
              </div>
            

              <div class="row">
                <h2 class="sub-title text-center">Help <span class="bp">&amp;</span> Technical Documentation</h2>
              </div>
            
            <div class="row">
              <div class="card-deck col-md-12">
                <a href="<?php echo $root ?>/category" class="card">
                  <div class="card-img-top">
                    <i class="fa fa-code"></i>
                    <span class="swipe-lines"></span>
                  </div>
                  <div class="card-block">
                    <h4 class="card-title">Developer Docs</h4>
                    <p class="card-text hidden-sm-down">How to get data in and out of Customer.io</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </a>
                <a href="<?php echo $root ?>/category" class="card">
                  <div class="card-img-top">
                    <i class="fa fa-power-off"></i>
                    <span class="swipe-lines"></span>
                  </div>
                  <div class="card-block">
                    <h4 class="card-title">Getting Started</h4>
                    <p class="card-text hidden-sm-down">New to Customer.io? Start here!</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </a>
                <a href="<?php echo $root ?>/category" class="card">
                  <div class="card-img-top">
                    <i class="fa fa-question"></i>
                    <span class="swipe-lines"></span>
                  </div>
                  <div class="card-block">
                    <h4 class="card-title">Help Docs</h4>
                    <p class="card-text hidden-sm-down">The nuts &amp; bolts of using Customer.io</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </a>
              </div>
              <div class="card-deck col-md-12">
                <a href="<?php echo $root ?>/category" class="card">
                  <div class="card-img-top">
                    <i class="fa fa-graduation-cap"></i>
                    <span class="swipe-lines"></span>
                  </div>
                  <div class="card-block">
                    <h4 class="card-title">Primers</h4>
                    <p class="card-text hidden-sm-down">Resources to improve your campaigns</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </a>
                <a href="<?php echo $root ?>/category" class="card">
                  <div class="card-img-top">
                    <i class="fa fa-wrench"></i>
                    <span class="swipe-lines"></span>
                  </div>
                  <div class="card-block">
                    <h4 class="card-title">REST API</h4>
                    <p class="card-text hidden-sm-down">API Documentation</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </a>
                <a href="<?php echo $root ?>/category" class="card">
                  <div class="card-img-top">
                    <i class="fa fa-list-ol"></i>
                    <span class="swipe-lines"></span>
                  </div>
                  <div class="card-block">
                    <h4 class="card-title">Recipes</h4>
                    <p class="card-text hidden-sm-down">Campaigns and projects, step by step</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </a>
              </div>
            </div>
            
            <!-- META -->
          <?php include_once('dist/includes/meta-content.inc.php'); ?>


          </div>

          <!-- / MAIN CONTENT -->

          
                                                
          
        </div><!-- /.content -->



      </div><!-- /.wrap -->
      
      </main><!-- /.main -->
                                     

<?php
  // FOOTER
  include_once('dist/includes/footer.inc.php');
?>