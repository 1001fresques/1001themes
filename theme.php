<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Encoding, browser compatibility, viewport -->
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Search Engine Optimization (SEO) -->
		<meta name="title" content="<?= $Wcms->page('title') ?>" />
		<meta name="description" content="<?= $Wcms->page('description') ?>">
		<meta name="author" content="<?= $Wcms->get('config', 'siteTitle') ?>" />
		<meta name="robots" content="index, follow" />
		<meta property="og:url"                content="<?= $this->url() ?>" />
		<meta property="og:type"               content="website" />
		<meta property="og:site_name" content="<?= $Wcms->get('config', 'siteTitle') ?>" />
		<meta property="og:title" content="<?= $Wcms->page('title') ?>" />
		<meta property="og:description"        content="<?= $Wcms->page('description') ?>" />
		<meta property="og:image"              content="https://www.1001fresques.fr/partage.png" />

		<!-- Website and page title -->
		<title>
			<?= $Wcms->page('title') ?>

		</title>

		<!-- Admin CSS -->
		<?= $Wcms->css() ?>
		
		<!-- Theme CSS -->
		<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/style.css') ?>">
		<style>
		@import url('<?= $Wcms->asset('css/fonts.css') ?>');
		</style>

	</head>

    <body>
	<?= $Wcms->settings() ?>
	<?= $Wcms->alerts() ?>

	<div class="content">
		<div class="col colfull coltit">
			<p>&nbsp;</p>
			<a href="<?= $Wcms->url() ?>"><h1><span>1001 fresques</span></h1></a>
		</div>
		<div class="col colpart pt3">
			<?php /*<h2><?= $Wcms->get('config','siteTitle') ?></h2>*/ ?>
			<?= $Wcms->menu() ?>


			<div class="lieux" style="height: auto;display: block; background:transparent;">
				<?= $Wcms->page('content') ?>
				
			</div>
		</div>

		<div class="col colcomp colanim"  style="">
			<?= $Wcms->block('subside') ?>
		</div>
	</div>


	<div class="content">
    	<div class="colcol">
    		<?= $Wcms->footer() ?>
			<p>
            <a href="https://www.facebook.com/1001fresques/" target="_blank" title="Facebook 1001 fresques"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg></a>

            &nbsp;&nbsp;&nbsp;

            <a href="https://www.instagram.com/1001fresques/" target="_blank" title="Instagram 1001 fresques"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>
        </p>
		</div>
	</div>


<!-- Admin JavaScript. More JS libraries can be added below -->
<?= $Wcms->js() ?>

</body>
</html>