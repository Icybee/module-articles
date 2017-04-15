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

use ICanBoogie\Module\Descriptor;
use ICanBoogie\ActiveRecord\Model;

return  [

	Descriptor::CATEGORY => 'contents',
	Descriptor::DESCRIPTION => "Introduces the Article content type.",
	Descriptor::ID => 'articles',
	Descriptor::INHERITS => 'contents',
	Descriptor::MODELS => [

		'primary' => [

			Model::EXTENDING => 'contents'

		]

	],

	Descriptor::NS => __NAMESPACE__,
	Descriptor::TITLE => "Articles"

];
