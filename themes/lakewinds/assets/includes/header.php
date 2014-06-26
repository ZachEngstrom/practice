<!doctype html>
<html>
    <head>
		<?php Loader::element('header_required'); ?>
		<link rel="stylesheet" type="text/css" href="<?php echo $this->getThemePath(); ?>/assets/css/compressed.css.php" media="all" />
    </head>
    <body id="<?php $page = Page::getCurrentPage(); echo strtolower($page->getCollectionName()); ?>">
        <!--[if lt IE 9]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<header>
			<div class="container">
				<div class="logo"></div>
				<div class="header_right_holder">
					<div class="header_right_one">
						<div class="become_member"><a href="/design" target="_blank">Become a Member</a></div>
						<div class="header_search">
							<input type="text" name="search" placeholder="Search">
						</div>
					</div>
					<div class="header_right_two">
						<div class="connect">Connect with us</div>
						<img class="twitter" src="http://www.placehold.it/18x18/02a9ce/02a9ce">
						<img class="facebook" src="http://www.placehold.it/18x18/02a9ce/02a9ce">
						<img class="youtube" src="http://www.placehold.it/18x18/02a9ce/02a9ce">
					</div>
				</div>
			</div>
		</header>
		<nav>
			<ul>
				<li>About Us</li>
				<li>Locations</li>
				<li>What's In Store</li>
				<li>Food Health</li>
				<li>Recipes</li>
				<li>Community</li>
				<li>Contact Us</li>
			</ul>
		</nav>