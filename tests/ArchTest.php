<?php

declare(strict_types=1);

arch()->preset()->php();
arch()->preset()->strict();
arch()->preset()->security();

arch('base')
    ->expect('Fkrzski\PhpPackageSkeleton')
    ->toUseStrictEquality()
    ->toUseStrictTypes();
