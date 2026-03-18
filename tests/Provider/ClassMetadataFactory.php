<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Tests\Provider;

use function array_reverse;

use Doctrine\ORM\Mapping\ClassMetadata;

use Doctrine\ORM\Mapping\ClassMetadataFactory as BaseMetadataFactoryAlias;

class ClassMetadataFactory extends BaseMetadataFactoryAlias
{
    /** @psalm-return list<ClassMetadata<object>> */
    public function getAllMetadata(): array
    {
        return array_reverse(parent::getAllMetadata());
    }
}
