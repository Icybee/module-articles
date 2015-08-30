<?php

/*
 * This file is part of the Icybee package.
 *
 * (c) Olivier Laviale <olivier.laviale@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Icybee\Modules\Articles\Block;

use ICanBoogie\DateTime;

use Brickrouge\DateTime as DateTimeElement;
use Brickrouge\Element;
use Brickrouge\Group;

use Icybee\Modules\Articles\Article;

/**
 * A block used to edit articles.
 */
class EditBlock extends \Icybee\Modules\Contents\Block\EditBlock
{
	protected function lazy_get_children()
	{
		return array_merge(parent::lazy_get_children(), [

			Article::DATE => new DateTimeElement([

				Group::LABEL => 'Date',
				Element::REQUIRED => true,
				Element::DEFAULT_VALUE => DateTime::now()

			])

		]);
	}
}
