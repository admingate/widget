<?php

namespace Admingate\Widget\Facades;

use Admingate\Widget\WidgetGroup;
use Illuminate\Support\Facades\Facade;

/**
 * @see \Admingate\Widget\Factories\WidgetFactory
 */
class WidgetFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'admingate.widget';
    }

    public static function group(string $name): WidgetGroup
    {
        return app('admingate.widget-group-collection')->group($name);
    }
}
