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

use Brickrouge\Form;
use Brickrouge\Element;

/**
 * A block used to edit articles.
 */
class EditBlock extends \Icybee\Modules\Contents\EditBlock
{
	protected function lazy_get_children()
	{
		return array_merge
		(
			parent::lazy_get_children(), array
			(
				Article::DATE => new \Brickrouge\DateTime
				(
					array
					(
						Form::LABEL => 'Date',
						Element::REQUIRED => true,
						Element::DEFAULT_VALUE => date('Y-m-d H:i:s')
					)
				)
			)
		);
	}
}
