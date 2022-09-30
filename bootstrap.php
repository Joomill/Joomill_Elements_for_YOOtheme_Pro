<?php
/*
 *  package: Joomill Elements for YOOtheme Pro
 *  copyright: Copyright (c) 2022. Jeroen Moolenschot | Joomill
 *  license: GNU General Public License version 2 or later
 *  link: https://www.joomill-extensions.com
 */

// No direct access to this file
defined('_JEXEC') or die(); 

use YOOtheme\Builder;
use YOOtheme\Path;

return [

    // Add builder elements
    'extend' => [

        Builder::class => function (Builder $builder) {
            $builder->addTypePath(Path::get('./element/*/element.json'));
        }

    ]

];
