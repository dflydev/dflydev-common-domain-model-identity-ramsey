<?php

namespace Dflydev\Common\Domain\Model\Identity\Ramsey;

use Dflydev\Common\Domain\Model\Identity\Identity;
use Dflydev\Common\Domain\Model\Identity\IdentityGenerator;

abstract class AbstractStrictRamseyUuidIdentity implements Identity, IdentityGenerator
{
    use StrictRamseyUuidIdentity;
}
