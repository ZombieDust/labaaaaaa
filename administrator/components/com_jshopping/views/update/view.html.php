<?php
/**
* @version      4.3.1 13.08.2013
* @author       MAXXmarketing GmbH
* @package      Jshopping
* @copyright    Copyright (C) 2010 webdesigner-profi.de. All rights reserved.
* @license      GNU/GPL
*/
defined('_JEXEC') or die('Restricted access');
jimport( 'joomla.application.component.view');

class JshoppingViewUpdate extends JViewLegacy
{
    function display($tpl=null){
        
        JToolBarHelper::title( _JSHOP_INSTALL_AND_UPDATE, 'generic.png' );         
        
        parent::display($tpl);
	}
}
?>