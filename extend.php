<?php

/*
 * This file is part of madchatthew/themelightshadow.
 *
 * Copyright (c) 2019 Madchatthew.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Madchatthew\ThemeLightShadow;

use Flarum\Extend;
<<<<<<< HEAD
use Illuminate\Contracts\Events\Dispatcher;
=======
>>>>>>> 11c991a... Initial beta 8 commit

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js')
        ->css(__DIR__.'/resources/less/forum.less'),
    (new Extend\Frontend('admin'))
        ->js(__DIR__.'/js/dist/admin.js')
        ->css(__DIR__.'/resources/less/admin.less'),
    new Extend\Locales(__DIR__ . '/resources/locale')
];
