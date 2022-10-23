<?php

return (new PhpCsFixer\Config())
    ->setCacheFile('./var/cache/.php-cs-fixer.cache')
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR12' => true,
        'ordered_imports' => [
            'sort_algorithm' => 'alpha',
            'imports_order' => ['class', 'function', 'const'],
        ],
        'phpdoc_order' => true,
        'array_syntax' => ['syntax' => 'short'],
        'strict_comparison' => true,
        'strict_param' => true,
        'no_trailing_whitespace' => false,
        'no_trailing_whitespace_in_comment' => false,
        'braces' => false,
        'single_blank_line_at_eof' => true,
        'blank_line_after_namespace' => false,
    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->exclude('specs')
            ->exclude('vendor')
            ->in(__DIR__)
    );
