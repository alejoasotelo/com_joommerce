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

/**
 * HelloWorld component helper.
 *
 * @param   string  $submenu  The name of the active view.
 *
 * @return  void
 *
 * @since   1.6
 */
abstract class JoommerceHelper extends JHelperContent
{
	/**
	 * Configure the Linkbar.
	 *
	 * @return Bool
	 */

	public static function addSubmenu($submenu) 
	{
		JHtmlSidebar::addEntry(
			JText::_('COM_JOOMMERCE_PRODUCTS_SUBMENU'),
			'index.php?option=com_joommerce&view=products',
			$submenu == 'products'
		);

		JHtmlSidebar::addEntry(
			JText::_('COM_JOOMMERCE_CUSTOMERS_SUBMENU'),
			'index.php?option=com_joommerce&view=customers',
			$submenu == 'customers'
		);

		JHtmlSidebar::addEntry(
			JText::_('COM_JOOMMERCE_ORDERS_SUBMENU'),
			'index.php?option=com_joommerce&view=orders',
			$submenu == 'orders'
		);

		JHtmlSidebar::addEntry(
			JText::_('COM_JOOMMERCE_ORDER_STATES_SUBMENU'),
			'index.php?option=com_joommerce&view=orderstates',
			$submenu == 'orderstates'
		);

		JHtmlSidebar::addEntry(
			JText::_('COM_JOOMMERCE_ORDER_HISTORIES_SUBMENU'),
			'index.php?option=com_joommerce&view=orderhistories',
			$submenu == 'orderhistories'
		);

		JHtmlSidebar::addEntry(
			JText::_('COM_JOOMMERCE_ORDER_PRODUCTS_SUBMENU'),
			'index.php?option=com_joommerce&view=orderproducts',
			$submenu == 'orderproducts'
		);

		JHtmlSidebar::addEntry(
			JText::_('COM_JOOMMERCE_ORDER_PAYMENTS_SUBMENU'),
			'index.php?option=com_joommerce&view=orderpayments',
			$submenu == 'orderpayments'
		);

		###__replace__###
	}
}