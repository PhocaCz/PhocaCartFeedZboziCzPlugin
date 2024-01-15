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
