<?php
/**
 * Created by PhpStorm.
 * Author: littledragoner
 * Date: 2018/12/19
 * Time: 16:06
 */

namespace App\Observers;

use App\Models\Link;
use Cache;

class LinkObserver
{

    public function saved(Link $link)
    {
        Cache::forget($link->cache_key);
    }
}