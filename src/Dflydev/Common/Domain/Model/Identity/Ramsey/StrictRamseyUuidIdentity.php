<?php

namespace Dflydev\Common\Domain\Model\Identity\Ramsey;

use Dflydev\Common\Domain\Model\Identity\StrictUuidFromString;
use Dflydev\Common\Domain\Model\Identity\StringBasedIdentity;

trait StrictRamseyUuidIdentity
{
    use RamseyUuidIdentity;
    use RamseyUuidIdentityGenerator;
    use StrictUuidFromString;
}
