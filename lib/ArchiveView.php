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

use Icybee\Modules\Contents\View;

class ArchiveView extends View
{
	/**
	 * Returns records grouped by month.
	 *
	 * @inheritdoc
	 */
	protected function provide($provider, array $conditions)
	{
		$records = parent::provide($provider, $conditions);

		$by_month = [];

		foreach ($records as $record)
		{
			$date = substr($record->date, 0, 7) . '-01';
			$by_month[$date][] = $record;
		}

		return $by_month;
	}
}
