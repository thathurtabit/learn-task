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
          <div id="page-cover" class="page page--category">
          
            <!-- PAGE HEADER -->
            <div class="jumbotron text-center">
              <div class="plane-intro">
                <div class="plane-intro__cover-img">
                  <img src="<?php echo $root; ?>/dist/images/plane.png" class="img-fluid plane-intro__plane" alt="Customer.io Plane" />
                  <img src="<?php echo $root; ?>/dist/images/cloud1.png" class="img-fluid plane-intro__cloud1" alt="Cloud" />
                  <img src="<?php echo $root; ?>/dist/images/cloud2.png" class="img-fluid plane-intro__cloud2" alt="Cloud" />
                  <img src="<?php echo $root; ?>/dist/images/cloud3.png" class="img-fluid plane-intro__cloud3" alt="Cloud" />
                </div>

              </div>
              <h1 class="display-3 text-center">Developer Documentation</h1>
              <p>What you need to know to integrate with Customer.io</p>

              <!-- LOADER -->
              <?php include_once('dist/includes/loader.inc.php'); ?>
              
            </div>
            <!-- / PAGE HEADER -->
            

            <!-- MAIN CONTENT -->
            <div class="container main-page">
              
              <div class="row">
                <nav class="breadcrumb col-md-12 col-lg-8">
                  <a class="breadcrumb-item" href="<?php echo $root ?>" title="Learn">Learn</a>
                  <span class="breadcrumb-item active">Developer Documentaton</span>                  
                </nav>

                <!-- INNER SEARCH WRAP -->
                <div class="inner-search-wrap col-md-3 offset-md-1">
                  <div class="inner-search pull-right">
                    <form class="form-inline">
                      <div class="input-group">
                        <input class="form-control" type="text" placeholder="Search" />
                        <button class="btn input-group-addon" type="submit"><span class="sr-only">Search</span><i class="fa fa-search"></i></button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- / INNER SEARCH WRAP -->


              </div>

              <div class="row">
                <h2 class="sub-title-icon" data-animation="false" data-toggle="tooltip" data-placement="top" title="Developer Documentation"><span class="sr-only">Developer Documentation</span><i class="fa fa-code"></i></h2>
              </div>
            
            <div class="row">

              <!-- PULL IN CONTENT -->
              <div class="pull-in-content col-md-8 offset-md-2">
  

              <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
              <div class="card">
                <div class="card-header" role="tab" id="headingOne">
                  <h5 class="mb-0">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Sending Data Into Customer.io
                    </a>
                  </h5>
                </div>

                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                  <div class="card-block">
                    <ul class="nav flex-column">
                      <li class="nav-item">
                        <a class="nav-link" href="single"><span>Integrating with Customer.io</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="single"><span>Planning Your Integration: Guide to Mapping Data in Customer.io</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="single"><span>Importing old data in to Customer.io</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="single"><span>Send data using the Javascript Snippet</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="single"><span>Libraries to help get analytics data into Customer.io</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="single"><span>Using Customer.io with Rails</span></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab" id="headingTwo">
                  <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Integrating With 3rd Parties
                    </a>
                  </h5>
                </div>
                <div id="collapseTwo" class="collapse show" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="card-block">
                    <ul class="nav flex-column">
                      <li class="nav-item">
                        <a class="nav-link" href="single"><span>Using Customer.io with Mixpanel or KISSMetrics</span></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab" id="headingThree">
                  <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Getting Data Out Of Customer.io
                    </a>
                  </h5>
                </div>
                <div id="collapseThree" class="collapse show" role="tabpanel" aria-labelledby="headingThree">
                  <div class="card-block">
                   <ul class="nav flex-column">
                      <li class="nav-item">
                        <a class="nav-link" href="single"><span>Segment Sources</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="single"><span>Send Data to a Data Warehouse with Stitch</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="single"><span>Email Webhooks</span></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!-- / PULL IN CONTENT -->



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