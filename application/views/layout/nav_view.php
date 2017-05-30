<!-- NAVBAR -->
<nav class="navbar navbar-default navbar-fixed-top ">
	<div class="container">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse">
			<span class="sr-only">Toggle Navigation</span>
			<i class="fa fa-bars"></i>
		</button>
		<a href="<?php echo site_url(); ?>" class="navbar-brand">
			<img src="<?php echo base_url('assets/img/logo/logo.png'); ?>" alt="Sentinel Logo" height="36">
		</a>
		<div id="main-nav-collapse" class="collapse navbar-collapse">
			<ul class="nav navbar-nav main-navbar-nav">
				<li <?php if($page_title === 'home'): ?> class="active" <?php endif; ?>>
					<a href="<?php echo site_url(); ?>">HOME</a>
				</li>

				<li <?php if($page_title === 'products'): ?> class="active" <?php endif; ?>>
					<a href="<?php echo site_url('pages/products'); ?>">PRODUCTS</a>
				</li>

				<li <?php if($page_title === 'services'): ?> class="active" <?php endif; ?>>
					<a href="<?php echo site_url('pages/services'); ?>">SERVICES</a>
				</li>

				<!-- <li class="dropdown ">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">PRODUCTS <i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Rebar Steels</a></li>
						<li><a href="#">RHS</a></li>
					</ul>
				</li>
				<li class="dropdown ">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">SERVICES <i class="fa fa-angle-down"></i></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="page-about.html">About</a></li>
						<li><a href="page-services.html">Services</a></li>
						<li><a href="page-contact.html">Contact</a></li>
					</ul>
				</li> -->
				<li <?php if($page_title === 'about'): ?> class="active" <?php endif; ?>>
					<a href="<?php echo site_url('pages/about'); ?>">ABOUT</a>
				</li>

				<li <?php if($page_title === 'blogs'): ?> class="active" <?php endif; ?>>
					<a href="<?php echo site_url('pages/blogs'); ?>">BLOGS</a>
				</li>

				<li <?php if($page_title === 'contact'): ?> class="active" <?php endif; ?>>
					<a href="<?php echo site_url('pages/contact'); ?>">CONTACTS</a>
				</li>

				<li <?php if($page_title === 'faq'): ?> class="active" <?php endif; ?>>
					<a href="<?php echo site_url('pages/faq'); ?>">FAQ</a>
				</li>
			</ul>
		</div>
		<!-- END MAIN NAVIGATION -->
	</div>
</nav>
<!-- END NAVBAR -->