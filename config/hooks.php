<?php

/*
 * This file is part of the Icybee package.
 *
 * (c) Olivier Laviale <olivier.laviale@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Icybee\Modules\Articles;

$hooks = Hooks::class . '::';

return [

	'patron.markups' => [

		'articles' => [

			$hooks . 'markup_articles', [

				'by' => 'date',
				'section' => null,
				'order' => 'desc',
				'limit' => null,
				'date' => null,
				'page' => null,
				'category' => null,
				'tag' => null,
				'author' => null

			]
		],

		'articles:read' => [

			$hooks . 'markup_articles_read', [

				'section' => null,
				'order' => 'desc',
				'limit' => 0

			]
		],

		'articles:by:date' => [

			$hooks . 'markup_by_date', [

				'group' => null,
				'order' => 'asc',
				'start' => 0,
				'limit' => 0

			]
		],

		'articles:by:author' => [

			$hooks . 'markup_by_author'

		]
	]
];
