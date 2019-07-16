<?php
/**
 *
 * User: Bob Ma
 * Date: 2019/7/16
 * Time: 23:20
 */

namespace ReasonBobo\PackageTest;

use Illuminate\Support\Facades\Facade as LaravelFacade;

class Facade extends LaravelFacade {
    protected static function getFacadeAccessor() {
        return 'test';
    }
}
