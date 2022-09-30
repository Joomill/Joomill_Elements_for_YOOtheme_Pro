<?php
/*
 *  package: Joomill Elements for YOOtheme Pro
 *  copyright: Copyright (c) 2022. Jeroen Moolenschot | Joomill
 *  license: GNU General Public License version 2 or later
 *  link: https://www.joomill-extensions.com
 */

namespace YOOtheme;

return [
    'transforms' => [
        'render' => function ($node) {
            // Don't render element if content fields are empty
            return (bool) Str::length($node->props['content']);
        },
    ],
];
