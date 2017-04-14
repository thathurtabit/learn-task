<?php
// NOTE: You'll need to change this on the live server

$root = "http://localhost/customer.io-learn";

?>

<nav class="navbar navbar-toggleable-sm fixed-top">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-bar"></span>
  </button>
  <a class="navbar-brand nav-link" href="<?php echo $root ?>" title="<?php echo $websiteName; ?>"><h1><?php echo $websiteName; ?></h1></a>

  <div class="collapse navbar-collapse" id="navbarToggler">
    <ul class="navbar-nav">
      <li class="nav-item nav-sun">
        <a class="nav-link" href="<?php echo $root ?>/category" title="Category">Category</a>
      </li>
      <li class="nav-item nav-mercury">
        <a class="nav-link" href="<?php echo $root ?>/single" title="Single">Single</a>
      </li>
      <li class="nav-item nav-venus">
        <a class="nav-link" href="<?php echo $root ?>/venus" title="Venus">Venus</a>
      </li>      
    </ul>
  </div>
</nav>