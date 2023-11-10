<?php

namespace Admingate\Widget\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Admingate\Widget\WidgetGroupCollection
 */
class WidgetGroupFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'admingate.widget-group-collection';
    }
}
