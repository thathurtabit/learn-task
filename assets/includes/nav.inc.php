<?php
// NOTE: You'll need to change this on the live server

$root = "http://localhost/customer.io-learn";

?>

<header class="navbar navbar-inverse fixed-top">
  
  <a class="navbar-brand nav-link" href="<?php echo $root ?>" title="<?php echo $websiteName; ?>"><h1 class="sr-only"><?php echo $websiteName; ?></h1></a>

  <a class="nav-link--border pos--absolute-left hidden-xs-down" href="<?php echo $root ?>" data-animation="false" data-toggle="tooltip" data-placement="right" title="Our Knowledge Base">Learn</a>

  <a class="nav-link pos--absolute-right hidden-xs-down" href="http://customer.io/contact/" data-animation="false" data-toggle="tooltip" data-placement="left" title="Have a question? Ask support"><i class="fa fa-comment-o"></i> Support</a>
  
</header>




