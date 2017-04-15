<?php
// NOTE: You'll need to change this on the live server

$root = "http://localhost/customer.io-learn/learn-task";

?>

<header class="navbar navbar-inverse fixed-top">
  
  <a class="navbar-brand" href="<?php echo $root ?>" title="<?php echo $websiteName; ?>"><h1 class="sr-only"><?php echo $websiteName; ?></h1></a>

  <a class="nav-link btn--swipe pos--absolute-left hidden-xs-down" href="<?php echo $root ?>" data-animation="false" data-toggle="tooltip" data-placement="right" title="Our Knowledge Base"><span>Learn</span> <i class="fa fa-graduation-cap"></i></a>

  <a class="nav-link btn--swipe pos--absolute-right hidden-xs-down" href="http://customer.io/contact/" data-animation="false" data-toggle="tooltip" data-placement="left" title="Have a question? Ask support"><i class="fa fa-comment-o"></i> <span>Support</span></a>
  
</header>




