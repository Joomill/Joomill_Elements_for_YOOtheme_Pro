<?php
/*
 *  package: Joomill Elements for YOOtheme Pro
 *  copyright: Copyright (c) 2022. Jeroen Moolenschot | Joomill
 *  license: GNU General Public License version 2 or later
 *  link: https://www.joomill-extensions.com
 */

$el = $this->el('div', [

    'style' => [
        'height: {height}',
    ],

]);
?>

<?= $el($props, $attrs) ?>

<?= $el->end() ?>
