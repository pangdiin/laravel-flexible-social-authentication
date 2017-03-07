<?php

return [

	'services' => [

		'github'	=>	[
			'name'	=>	'GitHub',
		],

		'twitter'	=>	[
			'name'	=>	'Twitter',
		],

		'facebook'	=>	[
			'name'	=>	'Facebook',
		],
		
	],

	'events' =>	[

		'github' =>	[

			'created' => \App\Events\Social\GitHubAccountWasLinked::class,

		],
	
	]
];
