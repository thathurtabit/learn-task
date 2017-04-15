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
              <div class="ami-intro__text">
                  <p>Knowledge<br/> is power!</p>
              </div>
              <div class="ami-intro">
                <div class="ami-intro__cover-img">
                  <img src="<?php echo $root; ?>/dist/images/ami-small.png" class="img-fluid" />
                </div>

              </div>
              <h1 class="display-3 text-center">Developer Documentation</h1>
              <p>What you need to know to integrate with Customer.io</p>

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
                  <a class="breadcrumb-item" href="<?php echo $root ?>/category" title="Category">Developer Documentaton</a>
                  
                </nav>
              </div>

              <div class="row">
                <h2 class="sub-title text-center">Sending Data Into Customer<span class="bp">.io</span></h2>
              </div>
            
            <div class="row">

  
Integrating with Customer.io

Planning Your Integration: Guide to Mapping Data in Customer.io

Importing old data in to Customer.io

Send data using the Javascript Snippet

Libraries to help get analytics data into Customer.io

Using Customer.io with Rails



<div class="row">
  <h2 class="sub-title text-center">Integrating With <span class="bp">3rd</span> Parties</h2>
</div>

Using Customer.io with Mixpanel or KISSMetrics

Getting Data Out Of Customer.io

Segment Sources

Send Data to a Data Warehouse with Stitch

Email Webhooks


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