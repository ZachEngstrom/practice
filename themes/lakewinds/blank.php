<!doctype html>
<html>
    <head>
		<?php Loader::element('header_required'); ?>
		<link rel="stylesheet" type="text/css" href="<?php echo $this->getThemePath(); ?>/assets/css/compressed.css.php" media="all" />
    </head>
    <body id="<?php $page = Page::getCurrentPage(); echo strtolower($page->getCollectionName()); ?>">
        
		<div class="design"></div>

		<script src="<?php echo $this->getThemePath(); ?>/assets/js/modernizr.min.js"></script>
		<!--[if lt IE 9]>
			<script src="<?php echo $this->getThemePath(); ?>/assets/js/html5shiv.min.js"></script>
		<![endif]-->
		<script src="<?php echo $this->getThemePath(); ?>/assets/js/plugins.js"></script>
		<script src="<?php echo $this->getThemePath(); ?>/assets/js/main.js"></script>
		<?php Loader::element('footer_required'); ?>
    </body>
</html>
