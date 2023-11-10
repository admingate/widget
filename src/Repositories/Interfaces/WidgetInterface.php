<?php

namespace Admingate\Widget\Repositories\Interfaces;

use Admingate\Support\Repositories\Interfaces\RepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

interface WidgetInterface extends RepositoryInterface
{
    public function getByTheme(string $theme): Collection;
}
