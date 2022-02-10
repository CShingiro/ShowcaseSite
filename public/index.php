<?php

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';
include_once dirname(_DIR_).'/opt/alt/php81/usr/share/pear';
include_once dirname(_DIR_).'/opt/alt/php81/usr/share/php';
include_once dirname(_DIR_).'/usr/share/pear';
include_once dirname(_DIR_).'/usr/share/php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
