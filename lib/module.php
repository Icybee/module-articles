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

use Icybee\Modules\Views\ViewOptions;

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

				ViewOptions::ASSETS => $assets

			],

			'archives' => [

				ViewOptions::TITLE => "Archives des articles",
				ViewOptions::CLASSNAME => __NAMESPACE__ . '\ArchivesView',
				ViewOptions::PROVIDER_CLASSNAME => ViewOptions::PROVIDER_CLASSNAME_AUTO,
				ViewOptions::ASSETS => $assets,
				ViewOptions::RENDERS => ViewOptions::RENDERS_MANY

			]

		]);
	}
}