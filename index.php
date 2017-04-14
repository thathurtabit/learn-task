<?php
  // HEADER
  $pageName = '';
  $myPath = '';
  include_once('dist/includes/header.inc.php');
?>
                    
      <main id="barba-wrapper" class="main-content sps" role="document">
        
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
                  <img src="dist/images/ami-small.png" class="img-fluid" />
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
                  <a class="breadcrumb-item" href="<?php echo $root ?>" title="Home">Home</a>
                  <a class="breadcrumb-item" href="<?php echo $root ?>/category" title="Category">Category</a>
                  <a class="breadcrumb-item" href="<?php echo $root ?>/single" title="Single">Single</a>
                  <span class="breadcrumb-item active">-</span>
                </nav>
              </div>
            
            <div class="row">
              <div class="card-deck">
                <a href="<?php echo $root ?>/category" class="card">
                  <div class="card-img-top">
                    <i class="fa fa-code"></i>
                  </div>
                  <div class="card-block">
                    <h4 class="card-title">Developer Docs</h4>
                    <p class="card-text">How to get data in and out of Customer.io</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </a>
                <a href="<?php echo $root ?>/category" class="card">
                  <div class="card-img-top">
                    <i class="fa fa-code"></i>
                  </div>
                  <div class="card-block">
                    <h4 class="card-title">Getting Started</h4>
                    <p class="card-text">New to Customer.io? Start here!</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </a>
                <a href="<?php echo $root ?>/category" class="card">
                  <div class="card-img-top">
                    <i class="fa fa-code"></i>
                  </div>
                  <div class="card-block">
                    <h4 class="card-title">Help Docs</h4>
                    <p class="card-text">The nuts &amp; bolts of using Customer.io</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </a>
              </div>
              <div class="card-deck">
                <a href="<?php echo $root ?>/category" class="card">
                  <div class="card-img-top">
                    <i class="fa fa-code"></i>
                  </div>
                  <div class="card-block">
                    <h4 class="card-title">Primers</h4>
                    <p class="card-text">Resources to improve your campaigns</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </a>
                <a href="<?php echo $root ?>/category" class="card">
                  <div class="card-img-top">
                    <i class="fa fa-code"></i>
                  </div>
                  <div class="card-block">
                    <h4 class="card-title">REST API</h4>
                    <p class="card-text">API Documentation</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </a>
                <a href="<?php echo $root ?>/category" class="card">
                  <div class="card-img-top">
                    <i class="fa fa-code"></i>
                  </div>
                  <div class="card-block">
                    <h4 class="card-title">Recipes</h4>
                    <p class="card-text">Campaigns and projects, step by step</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </a>
              </div>
            </div>
            

            <div class="container mt-3">
              <div class="row">
                
                <ul class="list-unstyled">
                  <li class="media">
                    <img class="d-flex mr-3" src="http://placehold.it/80x80" alt="Generic placeholder image">
                    <div class="media-body">
                      <h5 class="mt-0 mb-1">List-based media object</h5>
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                  </li>
                  <li class="media my-3">
                    <img class="d-flex mr-3" src="http://placehold.it/80x80" alt="Generic placeholder image">
                    <div class="media-body">
                      <h5 class="mt-0 mb-1">List-based media object</h5>
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                  </li>
                  <li class="media">
                    <img class="d-flex mr-3" src="http://placehold.it/80x80" alt="Generic placeholder image">
                    <div class="media-body">
                      <h5 class="mt-0 mb-1">List-based media object</h5>
                      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                  </li>
                </ul>

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