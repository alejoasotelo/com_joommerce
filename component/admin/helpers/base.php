<?php

/**
 * @package     Base.Administrator
 * @subpackage  com_base
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * HelloWorld component helper.
 *
 * @param   string  $submenu  The name of the active view.
 *
 * @return  void
 *
 * @since   1.6
 */
abstract class BaseHelper extends JHelperContent
{
	/**
	 * Configure the Linkbar.
	 *
	 * @return Bool
	 */

	public static function addSubmenu($submenu) 
	{
		JHtmlSidebar::addEntry(
			JText::_('COM_BASE_ITEMS_SUBMENU'),
			'index.php?option=com_base&view=items',
			$submenu == 'items'
		);

		JHtmlSidebar::addEntry(
			JText::_('COM_BASE_CUSTOMERS_SUBMENU'),
			'index.php?option=com_base&view=customers',
			$submenu == 'customers'
		);

		###__replace__###
	}
}