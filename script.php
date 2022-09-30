<?php
/*
 *  package: Joomill Elements for YOOtheme Pro
 *  copyright: Copyright (c) 2022. Jeroen Moolenschot | Joomill
 *  license: GNU General Public License version 2 or later
 *  link: https://www.joomill-extensions.com
 */

// No direct access to this file
defined('_JEXEC') or die(); 

class plgSystemJoomillelementsInstallerScript
{

    public function install($parent)
    {
        // Enable the extension
        $this->enablePlugin();

        return true;
    }

    private function enablePlugin()
    {
        try
        {
            $db    = JFactory::getDbo();
            $query = $db->getQuery(true)
				->update($db->qn('#__extensions'))
				->set($db->qn('enabled') . ' = ' . $db->q(1))
				->where('type = ' . $db->q('plugin'))
				->where('folder = ' . $db->q('system'))
				->where('element = ' . $db->q('joomillelements'));
            $db->setQuery($query);
            $db->execute();
        }
        catch (\Exception $e)
        {
            return;
        }
    }
}
