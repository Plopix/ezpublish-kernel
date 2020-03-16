<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace eZ\Publish\API\Repository\Values\Content\Query\FacetBuilder;

use eZ\Publish\API\Repository\Values\Content\Query\FacetBuilder;

/**
 * Build a section facet.
 *
 * If provided the search service returns a SectionFacet. Which contains the counts for
 * content in the existing sections.
 */
class SectionFacetBuilder extends FacetBuilder
{
}
