<?php
namespace Xel\Container\Dependency;

function containerEntry(...$register): array
{
    return array_merge(
       ...$register
    );
}
