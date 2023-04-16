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
 * Product View
 *
 * @since  0.0.1
 */
class JoommerceViewProduct extends JViewLegacy
{
	/**
	 * View form
	 *
	 * @var         form
	 */
	protected $form = null;

	/**
	 * Display the Product view
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  void
	 */
	public function display($tpl = null)
	{
		// Get the Data
		$this->form = $this->get('Form');
		$this->item = $this->get('Item');

		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode('<br />', $errors));

			return false;
		}


		// Set the toolbar
		$this->addToolBar();

		// Display the template
		parent::display($tpl);

		// Set the document
		$this->setDocument();
	}

	/**
	 * Add the page title and toolbar.
	 *
	 * @return  void
	 *
	 * @since   1.6
	 */
	protected function addToolBar()
	{
		$input = JFactory::getApplication()->input;

		// Hide Joomla Administrator Main menu
		$input->set('hidemainmenu', true);

		$isNew = ($this->item->id == 0);

		if ($isNew)
		{
			$title = JText::_('COM_JOOMMERCE_PRODUCT_MANAGER_NEW');
		}
		else
		{
			$title = JText::_('COM_JOOMMERCE_PRODUCT_MANAGER_EDIT');
		}

		JToolbarHelper::title($title, 'product');
		JToolbarHelper::apply('product.apply');
		JToolbarHelper::save('product.save');
		JToolbarHelper::save2new('product.save2new');
		JToolbarHelper::cancel(
			'product.cancel',
			$isNew ? 'JTOOLBAR_CANCEL' : 'JTOOLBAR_CLOSE'
		);
	}

	/**
	 * Method to set up the document properties
	 *
	 * @return void
	 */
	protected function setDocument() 
	{
		$isNew = ($this->item->id < 1);
		$document = JFactory::getDocument();
		$document->setTitle($isNew ? JText::_('COM_JOOMMERCE_PRODUCT_CREATING') :
                JText::_('COM_JOOMMERCE_PRODUCT_EDITING'));
	}
}