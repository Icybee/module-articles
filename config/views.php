<?php

namespace Icybee\Modules\Articles;

use Icybee\Modules\Views\ViewOptions as Options;

$assets = [ '../public/page.css' ];

return [

	'articles' => [

		Options::DIRECTIVE_INHERITS => 'contents',

		'list' => [

			Options::ASSETS => $assets

		],

		'archive' => [

			Options::TITLE => "Articles archive",
			Options::CLASSNAME => ArchiveView::class,
			Options::PROVIDER_CLASSNAME => Options::PROVIDER_CLASSNAME_AUTO,
			Options::ASSETS => $assets,
			Options::RENDERS => Options::RENDERS_MANY,
			Options::CONDITIONS => [

				'order' => '-date'

			]

		]

	]

];
