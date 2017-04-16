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
          <div id="page-cover" class="page page--single">
          
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
              <h1 class="display-3 text-center">Integrating with Customer.io</h1>
              <p>Sending data to Customer.io is easy and familiar for most developers.</p>
              
              <!-- LOADER -->
              <?php include_once('dist/includes/loader.inc.php'); ?>

            </div>
            <!-- / PAGE HEADER -->
            

            <!-- MAIN CONTENT -->
            <div class="container main-page">
              
              <div class="row">
                <nav class="breadcrumb col-md-12 col-lg-6">
                  <a class="breadcrumb-item btn--underline" href="<?php echo $root ?>" title="Learn">Learn</a>
                  <a class="breadcrumb-item btn--underline" href="<?php echo $root ?>/category" title="Category">Developer Documentaton</a>
                  <span class="breadcrumb-item active">Integrating with Customer.io</span>                  
                </nav>

                <!-- INNER SEARCH WRAP -->
                <div class="inner-search-wrap col-md-3 offset-md-3">
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
                <h2 class="sub-title-icon" data-animation="false" data-toggle="tooltip" data-placement="top" title="Integrating with Customer.io"><span class="sr-only">Integrating with Customer.io</span><i class="fa fa-code"></i></h2>
              </div>
            
            <div class="row">

                  <div class="sub-title">
                    <h2>Integrating with Customer.io</h2>
                  </div>

              <!-- CONTENT + STICKY -->
              <div class="row sticky-content">
  
                <div class="col-md-3 sticky-content__nav-col">
                  <ul id="fixedsticky" class="nav flex-column fixedsticky">
                    <h4>On this page:</h4>

                    <li class="nav-item">
                      <a class="nav-link btn-scroll--to" href="#section-1"><span>Javascript Snippet</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link btn-scroll--to" href="#section-2"><span>Client Libraries</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link btn-scroll--to" href="#section-3"><span>Segment</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link btn-scroll--to" href="#section-4"><span>Importing your old data</span></a>
                    </li>
                  </ul>
                </div>

                <!-- CONTENT COL -->
                <div class="col-md-7 sticky-content__text-col">
                
                  <p class="lead">Sending data to Customer.io is easy and familiar for most developers. <br />There are three ways we recommend to get started.</p>

                  <h3 id="section-1">Javascript Snippet</h3>

                  <p>The javascript snippet is the easiest way to start sending data to Customer.io. You copy and paste your Customer.io tracking code in to the footer of your website. Then you identify logged in users and any important information about them. You’ll then be able to email everyone who logs in to the website.</p>

                  <a href="#">Javascript quick start</a>

                  <hr />

                  <h3 id="section-2">Client Libraries</h3>

                  <p>Customer.io supports a RESTful API for receiving your customer data. We also maintain libraries for several languages and list libraries graciously contributed by our customers.</p>

                  <ul>
                    <li><a href="#">API Documentation</a></li>
                    <li><a href="#">Libraries</a></li>
                  </ul>

                  <hr />
                  
                  <h3 id="section-3">Segment</h3>
                  <p>There are 2 reasons to take a look at Segment:</p>

                  <ol>
                    <li>Customer.io doesn’t maintain a client library for your language (Java, iOS, Android, OS X)</li>
                    <li>You’re sending similar or the same data to other services</li>
                  </ol>

                  <p>If you’re using (or planning to use) other services alongside Customer.io like: Woopra, Optimizely, Kissmetrics, Mixpanel, Olark or Google Analytics, we recommend using Segment, a third party product to send your data to Customer.io. This will save you a meaningful amount of integration time and is fully supported by us.</p>

                  <a href="#">Check out Segment</a> — and <a href="#">how to use Segment to get started with your Customer.io integration</a>.

                  <hr />
                  
                  <h3 id="section-4">Importing your old data</h3>
                  <p>We can help you backfill old data. Backfill old data</p>



                </div>
                <!-- / CONTENT COL -->

              </div>
              <!-- / CONTENT + STICKY -->



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

        <!-- LOADER -->
        <?php include_once('dist/includes/loader.inc.php'); ?>

      </div><!-- /.wrap -->
      
      </main><!-- /.main -->
                                     

<?php
  // FOOTER
  include_once('dist/includes/footer.inc.php');
?>