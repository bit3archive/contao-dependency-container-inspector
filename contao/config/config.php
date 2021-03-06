<?php

/**
 * Dependency Container for Contao Open Source CMS
 * Copyright (C) 2013 Tristan Lins
 *
 * PHP version 5
 *
 * @copyright  bit3 UG 2013
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @package    avisota
 * @license    LGPL-3.0+#
 * @filesource
 */

/**
 * Backend modules
 */
$GLOBALS['BE_MOD']['devtools']['services'] = array(
	'callback' => 'DependencyInjection\Inspector\InspectorBackend',
	'icon'     => 'system/modules/dependency-container-inspector/assets/images/services.png',
);
