<?php

namespace Dflydev\Common\Domain\Model\Identity\Ramsey;

use Dflydev\Common\Domain\Model\Identity\FlexibleFromString;
use Dflydev\Common\Domain\Model\Identity\StringBasedIdentity;

trait FlexibleRamseyUuidIdentity
{
    use RamseyUuidIdentity;
    use RamseyUuidIdentityGenerator;
    use FlexibleFromString;
}
