<?php

namespace Icybee\Modules\Articles;

use ICanBoogie\Module\Descriptor;
use ICanBoogie\ActiveRecord\Model;

return  [

	Descriptor::CATEGORY => 'contents',
	Descriptor::DESCRIPTION => "Introduces the Article content type.",
	Descriptor::INHERITS => 'contents',
	Descriptor::MODELS => [

		'primary' => [

			Model::EXTENDING => 'contents'

		]

	],

	Descriptor::NS => __NAMESPACE__,
	Descriptor::TITLE => "Articles"

];
