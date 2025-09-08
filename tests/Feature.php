<?php

declare(strict_types=1);

use Fkrzski\PhpPackageSkeleton\Example;

mutates(Example::class);

it('foo', function (): void {
    $example = new Example;

    $result = $example->foo();

    expect($result)->toBe('bar');
});
