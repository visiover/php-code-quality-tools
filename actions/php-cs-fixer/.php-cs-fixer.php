<?php

use Ergebnis\PhpCsFixer\Config;

$config = Config\Factory::fromRuleSet(new Config\RuleSet\Php80(), [
    'declare_strict_types' => false,
    'final_class' => false,
    'final_internal_class' => false,
    'final_public_method_for_abstract_class' => false,
    'php_unit_test_class_requires_covers' => false,
    'phpdoc_to_property_type' => false,
    'yoda_style' => false,
    'protected_to_private' => false,
    'strict_comparison' => false,
    'error_suppression' => [
        'noise_remaining_usages' => false,
    ],
]);

$config->getFinder()->in(__DIR__);
$config->setCacheFile(__DIR__ . '/.build/php-cs-fixer/.php-cs-fixer.cache');

return $config;