<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\ProductOptionWidget\Plugin\ProductDetailPage;

use Generated\Shared\Transfer\ProductViewTransfer;
use Spryker\Yves\Kernel\Widget\AbstractWidgetPlugin;
use SprykerShop\Yves\ProductDetailPage\Dependency\Plugin\ProductOptionWidget\ProductOptionWidgetPluginInterface;
use SprykerShop\Yves\ProductOptionWidget\Widget\ProductOptionConfiguratorWidget;

/**
 * @deprecated Use {@link \SprykerShop\Yves\ProductOptionWidget\Widget\ProductOptionConfiguratorWidget} instead.
 *
 * @method \SprykerShop\Yves\ProductOptionWidget\ProductOptionWidgetFactory getFactory()
 */
class ProductOptionWidgetPlugin extends AbstractWidgetPlugin implements ProductOptionWidgetPluginInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     */
    public function initialize(ProductViewTransfer $productViewTransfer): void
    {
        $widget = new ProductOptionConfiguratorWidget($productViewTransfer);

        $this->parameters = $widget->getParameters();
    }

    /**
     * {@inheritDoc}
     *
     * @api
     */
    public static function getName(): string
    {
        return static::NAME;
    }

    /**
     * {@inheritDoc}
     *
     * @api
     */
    public static function getTemplate(): string
    {
        return ProductOptionConfiguratorWidget::getTemplate();
    }
}
