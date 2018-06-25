<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductPackagingUnitGui\Communication\Form\Constraint;

use Orm\Zed\ProductPackagingUnit\Persistence\SpyProductPackagingUnitType;
use Symfony\Component\Validator\Constraint;

class UniqueProductPackagingUnitTypeNameConstraint extends Constraint
{
    const OPTION_FACADE = 'facade';

    /**
     * @var \Spryker\Zed\ProductPackagingUnitGui\Dependency\Facade\ProductPackagingUnitGuiToProductPackagingUnitFacadeInterface
     */
    protected $facade;

    /**
     * @param string $name
     *
     * @return \Orm\Zed\ProductPackagingUnit\Persistence\SpyProductPackagingUnitType|null
     */
    public function findProductPackagingUnitTypeByName(string $name): ?SpyProductPackagingUnitType
    {
        return $this->facade
            ->getProductPackagingUnitTypeByName($name);
    }

    /**
     * @param int $id
     *
     * @return \Orm\Zed\ProductPackagingUnit\Persistence\SpyProductPackagingUnitType|null
     */
    public function findProductPackagingUnitTypeById(int $id): ?SpyProductPackagingUnitType
    {
        return $this->facade
            ->getProductPackagingUnitTypeById($id);
    }

    /**
     * @param string $name
     *
     * @return string
     */
    public function getMessage($name)
    {
        return sprintf('A product packaging unit type with name "%s" already exists', $name);
    }
}
