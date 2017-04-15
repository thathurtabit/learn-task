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
              <div class="ami-intro__text">
                  <p>Knowledge<br/> is power!</p>
              </div>
              <div class="ami-intro">
                <div class="ami-intro__cover-img">
                  <img src="<?php echo $root; ?>/dist/images/ami-small.png" class="img-fluid" />
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

            </div>
            <!-- / PAGE HEADER -->
            

            <!-- MAIN CONTENT -->
            <div class="container main-page">
              
              <div class="row">
                <nav class="breadcrumb">
                  <a class="breadcrumb-item" href="<?php echo $root ?>" title="Learn">Learn</a>
                  <a class="breadcrumb-item" href="<?php echo $root ?>/category" title="Category">Category</a>
                  <a class="breadcrumb-item" href="<?php echo $root ?>/single" title="Single">Single</a>
                </nav>
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
            
            <hr />

            <div id="split-meta-content" class="split-meta-content container mt-5">
              <div class="row">
                
                <div class="col-md-6 split-meta-content__col">
                    <a href="<?php echo $root ?>/category" class="split-meta-content__block">
                      <div class="ami-meta">
                        <div class="ami-meta__cover-img">
                          <img src="<?php echo $root; ?>/dist/images/ami-small.png" class="img-fluid" />
                        </div>
                      </div>
                     <h3 class="split-meta-content__block-h">Need some help?</h3>
                      <p class="split-meta-content__block-p">If you have questions or can't find what you're looking for, we're here for you. Click here to get in touch!</p>
                    </a>
                </div>

                <div class="col-md-6 split-meta-content__col">
                    <a href="<?php echo $root ?>/category" class="split-meta-content__block">
                      <div class="ami-meta">
                        <div class="ami-meta__cover-img">
                          <img src="<?php echo $root; ?>/dist/images/ami-small.png" class="img-fluid" />
                        </div>
                      </div>
                      <h3 class="split-meta-content__block-h">Keep on learning</h3>
                      <p class="split-meta-content__block-p">Discover ways to communicate with your customers to increase engagement on the Customer.io blog.</p>
                    </a>                  
                </div>

              </div>
            </div>


          </div>

          <!-- / MAIN CONTENT -->

          
                                                
          
        </div><!-- /.content -->
      </div><!-- /.wrap -->
      
      </main><!-- /.main -->
                                     

<?php
  // FOOTER
  include_once('dist/includes/footer.inc.php');
?>