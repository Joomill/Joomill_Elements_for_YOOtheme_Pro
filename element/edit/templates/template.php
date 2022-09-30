<?php
/*
 *  package: Joomill Elements for YOOtheme Pro
 *  copyright: Copyright (c) 2022. Jeroen Moolenschot | Joomill
 *  license: GNU General Public License version 2 or later
 *  link: https://www.joomill-extensions.com
 */

use Joomla\CMS\Factory;
use Joomla\CMS\Component\ComponentHelper;
use Joomla\Component\Content\Administrator\Extension\ContentComponent;
use Joomla\CMS\Helper\ContentHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Layout\LayoutHelper;
use Joomla\CMS\Uri\Uri;

$user       = Factory::getUser();
$userId     = $user->get('id');
$canDo      = ContentHelper::getActions('com_content', 'category', $item->catid);
$canEdit    = $canDo->get('core.edit');
$canEditOwn = $user->authorise('core.edit.own', 'com_content.category.' . $item->catid) && $item->created_by == $userId;

$uri = Uri::getInstance();
$returnUrl = $uri->toString();

// Hide Yootheme Edit Button 
$wa = Factory::getApplication()->getDocument()->getWebAssetManager();
$wa->addInlineStyle('a.uk-position-medium.uk-position-bottom-right.uk-position-z-index.uk-button.uk-button-primary {display: none;}');

$el = $this->el('div', [

]);
?>

<?= $el($props, $attrs) ?>

<?php if ($canEdit || $canEditOwn) { ?>  

    <a class="uk-button <?php echo $props['linkclass'] ?>" href='/index.php?option=com_content&task=article.edit<?php if (!empty($props['itemid'])) { ?>&Itemid=<?php echo $props['itemid'] ?><?php }?>&a_id=<?php echo($item->id); ?>&return=<?php echo(urlencode(base64_encode($returnUrl))); ?>'>        
            <?php echo Text::_('JACTION_EDIT'); ?>             
    </a> 
    
<?php } ?>

<?= $el->end() ?>