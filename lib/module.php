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

use Icybee\Modules\Views\View;

class Module extends \Icybee\Modules\Contents\Module
{
	/**
	 * Adds the "archives" view type and adds assets to the inherited "list" view type.
	 */
	protected function lazy_get_views()
	{
		$assets = [ 'css' => [ DIR . 'public/page.css' ] ];

		return \ICanBoogie\array_merge_recursive(parent::lazy_get_views(), [

			'list' => [

				View::ASSETS => $assets

			],

			'archives' => [

				View::TITLE => "Archives des articles",
				View::CLASSNAME => __NAMESPACE__ . '\ArchivesView',
				View::PROVIDER => 'Icybee\Modules\Nodes\ViewProvider',
				View::ASSETS => $assets,
				View::RENDERS => View::RENDERS_MANY

			]

		]);
	}
}