<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mailgun' => [
		'domain' => '',
		'secret' => '',
	],

	'mandrill' => [
		'secret' => '',
	],

	'ses' => [
		'key' => '',
		'secret' => '',
		'region' => 'us-east-1',
	],

	'stripe' => [
		'model'  => 'App\User',
		'secret' => '',
	],

        'facebook' => [
  		'client_id' => '516116908563932',
 		'client_secret' => '889173fcaf894e152096c9c7627b8faf',
	        'redirect' => 'http://localhost:8000/facebook_callback',
	],

        'google' => [
                'client_id' => '882263032131-t1d3snk6uuf415f21vjktc5t2es1vlfp.apps.googleusercontent.com',
                'client_secret' => 'G4Hwhu1Tj2XwyxKolp751P6J',
                'redirect' => 'http://localhost:8000/google_callback',
        ],

        'twitter' => [
                'client_id' => 'A1koj0U36VaGxlaIP9D1EG56a',
                'client_secret' => 'D7o502CMRvG1Wf0wmzearCnKrckXT5sf44SG3I3FQKnDUiAnGd',
                'redirect' => 'http://localhost:8000/twitter_callback',
        ],

        'medium' => [
        		'client_id' => 'd2fb388b5865',
                'client_secret' => 'e223815cfbd0b1ccc308c1c133c0e4d7e4c5fe57',
                'redirect' => 'http://localhost:8000/medium_callback',
        ],

];
