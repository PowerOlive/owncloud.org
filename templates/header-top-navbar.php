<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <a class="brand" href="<?php echo home_url(); ?>/"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_owncloud.svg" title="<?php bloginfo('name'); ?>" itemprop="logo"></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <ul id="menu-header" class="nav navbar-nav">
        <li class="<?php if(is_page('news')){ echo 'top-nav-active '; } ?>menu-news"><a href="/news/">News</a></li>
        <li class="<?php if(is_page('features')){ echo 'top-nav-active '; } ?>menu-features"><a href="/features/">Features</a></li>
        <li class="menu-documentation"><a href="https://doc.owncloud.org">Documentation</a></li>
        <li class="<?php if(is_page('contribute')){ echo 'top-nav-active '; } ?>menu-contribute"><a href="/contribute/">Contribute</a>
        <li class="<?php if(is_page('support')){ echo 'top-nav-active '; } ?>menu-support"><a href="/support/">Support</a></li>
        <li class="menu-commercial"><a target="_blank" href="https://owncloud.com">Enterprise Edition</a></li>
        <li class="<?php if(is_page('news')){ echo 'top-nav-active '; } ?>menu-install"><a href="/install/">Download</a></li>
      </ul>
    </nav>
  </div>
  <?php if(is_page('homepage')): ?>
	<div class="container-fluid teaser-area">
		<div class="col-xs-offset-0 col-sm-offset-1 col-md-offset-2 col-lg-offset-3  col-xs-12 col-sm-10 col-md-8 col-lg-6">
			<div class="text-center intro-text">
				<h1><span class="avoidwrap">ownCloud X is out!</span></h1>
				<h2><span class="avoidwrap">A safe home</span> <span class="avoidwrap">for all your data</span></h2>
				<p><span class="avoidwrap">Access &amp; share your files</span>, calendars, contacts, <span class="avoidwrap">mail &amp; more</span> <span class="avoidwrap">from any device, on your terms</span></p>
				<br>
				<a class="btn btn-primary btn-lg" role="button" href="/install">Get your ownCloud &raquo;</a>
			</div>
		</div>
	</div>
  <?php endif; ?>
</header>
