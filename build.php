#!/usr/bin/env php
<?php
\chdir(__DIR__);

$returnStatus = null;

$composer = \json_decode(\file_get_contents('composer.json'), true);
unset($composer['autoload'], $composer['autoload-dev']);

\file_put_contents('composer.json', \json_encode($composer, \JSON_PRETTY_PRINT));


\passthru('composer update', $returnStatus);
if (0 !== $returnStatus) {
    exit(1);
}

\passthru("./vendor/bin/phpunit", $returnStatus);
if (0 !== $returnStatus) {
    exit(1);
}
