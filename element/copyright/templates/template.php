<?php
/*
 *  package: Joomill Elements for YOOtheme Pro
 *  copyright: Copyright (c) 2022. Jeroen Moolenschot | Joomill
 *  license: GNU General Public License version 2 or later
 *  link: https://www.joomill-extensions.com
 */

$el = $this->el('div');
$items = $this->el('ul', [
    'class' => [
        'uk-margin-remove-bottom',
        'uk-subnav {@subnav_style: |divider} [uk-subnav-{subnav_style: divider}]',
        'uk-flex-{text_align}[@{text_align_breakpoint} [uk-flex-{text_align_fallback}]]',
        'uk-text-{text_color}'
    ],
    'uk-margin' => true,
]);

$currentYear = date('Y');
$sitename = \Joomla\CMS\Factory::getConfig()->get( 'sitename' );
?>


<?= $el($props, $attrs) ?>

        <?= $items($props) ?>
        <li class="el-item">
        copyright &copy;
        <?php if (empty($props['copyrightyear'])) { ?>
            <?php echo $currentYear; ?>
        <?php } else { ?>
            <?php echo $props['copyrightyear'] . (($props['copyrightyear'] != $currentYear) ? '-' . $currentYear : ''); ?>
        <?php } ?>
        <?php if (empty($props['company'])) { ?>
        <?php echo $sitename; ?>
        <?php } else { ?>
            <?= $props['company'] ?>
        <?php } ?>
        </li>
        
        <?php foreach ($children as $child) : ?>
        <li class="el-item"><?= $builder->render($child, ['element' => $props]) ?></li>
        <?php endforeach ?>
        </ul>


<?= $el->end() ?>
