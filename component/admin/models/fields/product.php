<?php

/**
 * @package     Joommerce.Administrator
 * @subpackage  com_joommerce
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

JFormHelper::loadFieldClass('list');

/**
 * Product Form Field class for the Joommerce component
 *
 * @since  0.0.1
 */
class JFormFieldProduct extends JFormFieldList
{
	/**
	 * The field type.
	 *
	 * @var         string
	 */
	protected $type = 'Product';

	/**
	 * Method to get a list of options for a list input.
	 *
	 * @return  array  An array of JHtml options.
	 */
	protected function getOptions()
	{
		$db    = JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select('id, name');
		$query->from('#__joommerce_product');
		$db->setQuery((string) $query);
		$items = $db->loadObjectList();
		$options  = array();

		if ($items) {
			foreach ($items as $item) {
				$options[] = JHtml::_('select.option', $item->id, $item->name);
			}
		}

		$options = array_merge(parent::getOptions(), $options);

		return $options;
	}
}
