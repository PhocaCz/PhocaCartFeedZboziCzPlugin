<?php
/* @package Joomla
 * @copyright Copyright (C) Open Source Matters. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * @extension Phoca Extension
 * @copyright Copyright (C) Jan Pavelka www.phoca.cz
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */

use Joomla\CMS\Form\Form;
use Joomla\CMS\Plugin\CMSPlugin;

defined('_JEXEC') or die;

if (file_exists(JPATH_ADMINISTRATOR . '/components/com_phocacart/libraries/bootstrap.php')) {
    // Joomla 5 and newer
    require_once(JPATH_ADMINISTRATOR . '/components/com_phocacart/libraries/bootstrap.php');
} else {
    // Joomla 4
    JLoader::registerPrefix('Phocacart', JPATH_ADMINISTRATOR . '/components/com_phocacart/libraries/phocacart');
}

class plgPCFZbozi_cz extends CMSPlugin
{
	function __construct(& $subject, $config) {

		parent :: __construct($subject, $config);
		$this->loadLanguage();
	}

	public function onPCFBatchForm(string $context, Form $form) {
        if ($context !== 'com_phocacart.phocacartitem') {
            return;
        }

		$form->loadFile(__DIR__ . '/models/forms/batch.xml');
	}
}
