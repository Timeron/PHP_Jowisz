<?php

/*
 * |--------------------------------------------------------------------------
 * | Application Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register all of the routes for an application.
 * | It's a breeze. Simply tell Laravel the URIs it should respond to
 * | and give it the controller to call when that URI is requested.
 * |
 */
Route::get ( '/test', function () {
	return view ( 'welcome' );
} );

Route::get ( '/', function () {
	$model = array(
		'title' => "Timeron",
		'bodySectionArticle' => array(
			'Article' => array(
				'bodySectionHeader' => 'bodySectionHeader1',
				'bodySectionArticle' => 'bodySectionArticle1',
				'bodySectionFooter' => 'bodySectionFooter1'
			)
		),
		'headerMenu' => array(
			'headerMenu1', 'headerMenu2', 'headerMenu3', 'headerMenu4'
		),
		'bodyNavSection' => array('menuButton1', 'menuButton2', 'menuButton3', 'menuButton4', )
	);
	
	return View::make('home', $model);
} );
	