<?php
/*
 *  package: Joomill Elements for YOOtheme Pro
 *  copyright: Copyright (c) 2022. Jeroen Moolenschot | Joomill
 *  license: GNU General Public License version 2 or later
 *  link: https://www.joomill-extensions.com
 */

// Link
$link = $this->el('a', [
    'class' => [
        'uk-text-{text_color}'
    ],

]);

?>

<?php if ($props['link']) : ?>
    <?= $link($element, [
        'href' => $props['link'],
        'uk-scroll' => str_starts_with((string) $props['link'], '#'),
        'target' => $props['link_target'] ? '_blank' : '',
    ], $props['content']) ?>
<?php else : ?>
    <a class="el-content uk-disabled"><?= $props['content'] ?></a>
<?php endif ?>
