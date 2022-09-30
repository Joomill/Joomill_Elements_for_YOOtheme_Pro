<?php
/*
 *  package: Joomill Elements for YOOtheme Pro
 *  copyright: Copyright (c) 2022. Jeroen Moolenschot | Joomill
 *  license: GNU General Public License version 2 or later
 *  link: https://www.joomill-extensions.com
 */


// Link
$link = $this->el('a', [
    'href' => '#', // WordPress Preview reloads if `href` is empty
    'title' => ['{link_title}'],
    'uk-totop' => true,
    'uk-scroll' => true,
]);

// Title
$title = $this->el('div', [

    'class' => [
        'el-title',
        'uk-text-{title_style}',
    ],

]);

// Grid
$grid = $this->el('div', [
    'class' => [
        'uk-child-width-expand[@{title_grid_breakpoint}]',
        $props['title_grid_column_gap'] == $props['title_grid_row_gap'] ? 'uk-grid-{title_grid_column_gap}' : '[uk-grid-column-{title_grid_column_gap}] [uk-grid-row-{title_grid_row_gap}]',
        'uk-flex-inline uk-flex-middle',
    ],
    'uk-grid' => true,
]);

$cell_title = $this->el('div', [
    'class' => [
        'uk-flex-first[@{title_grid_breakpoint}] uk-width-auto[@{title_grid_breakpoint}]',
    ],
]);

?>


<div id="backtotop" class="uk-position-fixed uk-margin-bottom uk-margin-right backtotop" style="bottom: 0; right: 0; display: none;">
    <?= $grid($props) ?>
        <div>
            <?= $link($props, '') ?>
        </div>
    <?= $grid->end() ?>
</div>

<script>
function windowScroll(ev){
    if(window.pageYOffset>400)document.getElementById("backtotop").style.display = "block";
    if(window.pageYOffset<400)document.getElementById("backtotop").style.display = "none";
}
window.onscroll=windowScroll
</script>
