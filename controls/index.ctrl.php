<?php

	$html = '';

	// create a mustache engine instance
	// @link https://github.com/bobthecow/mustache.php
	$m = new Mustache_Engine(
		array(
			'loader' => new Mustache_Loader_FilesystemLoader( dirname( APPLICATION_PATH ) . '/app/vendor/europeana/ui-components' ),
			'partials_loader' => new Mustache_Loader_FilesystemLoader( dirname( APPLICATION_PATH ) . '/app/vendor/europeana/ui-components' )
		)
	);

	// add the pattern lab ui-components for the page
	$tpl = $m->loadTemplate( 'atoms/meta/_head' );
	$html .= $tpl->render(
		array(
			'css_files' => array(
				array(
					'path' => 'http://develop.styleguide.eanadev.org/css/search/screen.css',
					'media' => 'all'
				)
			),
			'pagetitle' => 'test'
		)
	);

	$tpl = $m->loadTemplate( 'templates/Search/Search-results-list' );
	$html .= $tpl->render();

	$tpl = $m->loadTemplate( 'atoms/meta/_foot' );
	$html .= $tpl->render();

	// output the built up html string
	echo $html;