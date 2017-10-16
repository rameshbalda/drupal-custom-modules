<?php
  global $base_path;
  $theme_path .= $base_path . drupal_get_path('theme', 'balajitemple');       
          
?>
<main class="container">
		<header class="header_strip">
			<img src="<?php echo $theme_path;?>/images/header_strip.jpg" class="img-responsive"/>
			<div class="logo">
				<h1>Balaji Temple</h1>
				<p>( Hindu Temple of Virgnia)</p>
			</div>
		</header>
		<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand hidden-sm hidden-lg" href="#">Balaji Temple</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
	  <?php print render($page['header']); ?>
			
	</ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <!-- Container start -->
    <div class="main-container">
      <?php
      if (arg(0)=='temple') {
        include("front-page.tpl.php");    
      }
      else {
      ?>
      <section class="breadcrumb_strip">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li><li class="active">About Us</li>
        </ol>
      </section>
      <article class="content innerpage">
        <div class="paper_box_top"></div>
        <section class="paper_box">
          <?php if (!empty($page['highlighted'])): ?>
            <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
          <?php endif; ?>
          <a id="main-content"></a>
          <?php print render($title_prefix); ?>
          <?php print $messages; ?>
          <?php if (!empty($tabs) && user_is_logged_in()): ?>
            <?php print render($tabs); ?>
          <?php endif; ?>
          <?php if (!empty($page['help'])): ?>
            <?php print render($page['help']); ?>
          <?php endif; ?>
          <?php if (!empty($action_links)): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
          <?php endif; ?>
          <?php print render($page['content']); ?>
	<?php print render($page['calendar_primary']); ?>

        </section>
        <div class="paper_box_bottom"></div>
      </article>
      <?php
      }
      ?>
	  
    </div>
    <!-- Container end -->
		<footer class="footer">
			<div class="col-xs-12 col-sm-3 footer1">
				<p class="h3">Gallery</p>
				<img src="<?php echo $theme_path;?>/images/gallery.jpg"/>
				<ul>
					<li><i class="fa fa-file-image-o" aria-hidden="true"></i><a href="<?php echo $base_url;?>/photo-gallery">View Image Gallery </a></li>
					<li><i class="fa fa-file-audio-o" aria-hidden="true"></i><a href="#">	View Audio Gallery </a></li>
					<li><i class="fa fa-file-video-o" aria-hidden="true"></i><a href="<?php echo $base_url;?>/video-gallery">View Video Gallery </a></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-3 footer2">
				<p class="h3">Services</p>
				<ul>
					<li><a href="<?php echo $base_url;?>/services/pooja">Pooja Services</a></li>
					<li><a href="<?php echo $base_url;?>/religious-poojas">Religious Services </a></li>
					<li><a href="<?php echo $base_url;?>/volunteer-services">Voluntery Services</a></li>
					<li><a href="<?php echo $base_url;?>/member-ship">Member ship</a></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-3 footer3">
				<p class="h3">Contact Us</p>
				<ul>
					<li><b>Location:</b></li>
				<li>Phone: 046-0555555,046-45724555 </li>
				<li>Email: templenew@gmail.com </li>
				<li><b>Reach Us:</b></li>
				<li>
				<form class="form-inline">
				  <div class="form-group">
					<div class="input-group">
					  <input type="text" class="form-control" id="exampleInputAmount" placeholder="Email">
					  <button class="input-group-addon"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
					</div>
				  </div>
				</form>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-4 footer4">
				<p class="h3">News</p>
				<div class="marquee">
				<marquee direction="up" scrollamount="4">
				<ul>
					<li><i class="fa fa-caret-square-o-right" aria-hidden="true"></i> Letting Women Worship Here Is 'A Sin': Sabarimala Temple Defends Ban  <a href="#">See More..</a></li>
					<li><i class="fa fa-caret-square-o-right" aria-hidden="true"></i>Letting Women Worship Here Is 'A Sin': Sabarimala Temple Defends Ban  <a href="#">See More..</a></li>
					<li><i class="fa fa-caret-square-o-right" aria-hidden="true"></i>Letting Women Worship Here Is 'A Sin': Sabarimala Temple Defends Ban  <a href="#">See More..</a></li>
					<li><i class="fa fa-caret-square-o-right" aria-hidden="true"></i>Letting Women Worship Here Is 'A Sin': Sabarimala Temple Defends Ban  <a href="#">See More..</a></li>
				</ul>
				</marquee>
				</div>
			</div>
		</footer>
	</main>
	<section class="copy">
		<div class="container">
		<p class="pull-left">HINDU TEMPLE of Virginia © 2016 All rights reserved</p>
		<ul class="list-inline pull-right">
			<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
		</ul>
		</div>
	</section>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo $theme_path;?>/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo $theme_path;?>/js/bootstrap.min.js"></script>
    <script src="<?php echo $theme_path;?>/js/jquery.bxslider.min.js"></script>
    <script src="<?php echo $theme_path;?>/js/script.js"></script>
	<script>
		$(document).ready(function(){
			$("ul li.expanded").click(function(){
				$("ul li.expanded ul").hide();
				$(this).find(".menu").show();
			})
			$(".expanded>a").click(function(e){
				e.preventDefault();
			})
		})
	</script>
   