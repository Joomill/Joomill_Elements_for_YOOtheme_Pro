<?php
/*
 *  package: Joomill Elements for YOOtheme Pro
 *  copyright: Copyright (c) 2022. Jeroen Moolenschot | Joomill
 *  license: GNU General Public License version 2 or later
 *  link: https://www.joomill-extensions.com
 */

// No direct access to this file
defined('_JEXEC') or die(); 

use Joomla\CMS\Plugin\CMSPlugin;
use YOOtheme\Application;

class plgSystemJoomillelements extends CMSPlugin
{	
    function onAfterInitialise()
    {
        if (!class_exists(Application::class, false)) {
            return;
        }
        $app = Application::getInstance();
        $app->load(__DIR__ . '/bootstrap.php');
    }
}