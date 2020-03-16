<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace eZ\Publish\API\Repository\Values\Content\Query\Criterion;

use eZ\Publish\API\Repository\Values\Content\Query\Criterion;
use eZ\Publish\API\Repository\Values\Content\Query\Criterion\Operator\Specifications;

/**
 * A criterion that matches content based on its id.
 *
 * Supported operators:
 * - IN: will match from a list of ContentId
 * - EQ: will match against one ContentId
 */
class ContentId extends Criterion
{
    /**
     * Creates a new ContentId criterion.
     *
     * @param int|int[] $value One or more content Id that must be matched.
     *
     * @throws \InvalidArgumentException if a non numeric id is given
     * @throws \InvalidArgumentException if the value type doesn't match the operator
     */
    public function __construct($value)
    {
        parent::__construct(null, null, $value);
    }

    public function getSpecifications(): array
    {
        $types = Specifications::TYPE_INTEGER | Specifications::TYPE_STRING;

        return [
            new Specifications(Operator::IN, Specifications::FORMAT_ARRAY, $types),
            new Specifications(Operator::EQ, Specifications::FORMAT_SINGLE, $types),
        ];
    }
}
