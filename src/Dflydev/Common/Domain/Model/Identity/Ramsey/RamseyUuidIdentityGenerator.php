<?php

namespace Dflydev\Common\Domain\Model\Identity\Ramsey;

use Ramsey\Uuid\Uuid;

trait RamseyUuidIdentityGenerator
{
    abstract function __construct($id);

    /**
     * {@inheritdoc}
     */
    public static function generate()
    {
        return new static(Uuid::uuid4()->toString());
    }
}
