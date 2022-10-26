<?php

namespace Cart53\AdminPanel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Cart53\AdminPanel\AdminPanel
 */
class AdminPanel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Cart53\AdminPanel\AdminPanel::class;
    }
}
