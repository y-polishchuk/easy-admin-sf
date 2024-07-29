<?php

declare(strict_types=1);

use Rector\Symfony\Set\SymfonySetList;
// use Rector\Symfony\Set\SymfonyLevelSetList;
use Rector\Config\RectorConfig;
// use Rector\Set\ValueObject\LevelSetList;

return RectorConfig::configure()
    ->withSymfonyContainerXml(__DIR__ . '/var/cache/dev/App_KernelDevDebugContainer.xml')
    ->withSets([
        SymfonySetList::SYMFONY_64,
        SymfonySetList::SYMFONY_CODE_QUALITY,
        SymfonySetList::SYMFONY_CONSTRUCTOR_INJECTION,
    ]);
