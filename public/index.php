<?php

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';
include_path='.:/opt/alt/php81/usr/share/pear:/opt/alt/php81/usr/share/php:/usr/share/pear:/usr/share/php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
