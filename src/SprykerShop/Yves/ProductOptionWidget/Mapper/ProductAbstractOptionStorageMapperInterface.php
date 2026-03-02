<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\ProductOptionWidget\Mapper;

use Generated\Shared\Transfer\ProductAbstractOptionStorageTransfer;
use Generated\Shared\Transfer\ShoppingListItemTransfer;

interface ProductAbstractOptionStorageMapperInterface
{
    public function mapShoppingListItemProductOptionsToProductAbstractOptionStorage(
        ProductAbstractOptionStorageTransfer $productAbstractOptionStorageTransfer,
        ShoppingListItemTransfer $shoppingListItemTransfer
    ): ProductAbstractOptionStorageTransfer;
}
