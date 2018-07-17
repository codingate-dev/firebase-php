<?php

$finder = PhpCsFixer\Finder::create()
    ->in(['src', 'tests']);

return PhpCsFixer\Config::create()
    ->setUsingCache(true)
    ->setRules([
        '@Symfony' => true,
        'array_syntax' => ['syntax' => 'short'],
        'header_comment' => ['header' => ''],
        'ordered_imports' => true,
        'phpdoc_align' => false,
        'phpdoc_order' => true,
        'yoda_style' => false,
    ])
    ->setFinder($finder);
