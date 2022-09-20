<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\Operator\OperatorLinebreakFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $config): void {
    $config->rule(OperatorLinebreakFixer::class);
};
