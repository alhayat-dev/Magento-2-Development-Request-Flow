<?php

/**
 *
 * Copyright © Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Unit2\CatalogProductPlugin\Plugin\Controller\Product;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

/**
 * Class View
 * @package Unit2\CatalogProductPlugin\Controller\Product
 */
class View
{
    /**
    * @var \Magento\Framework\Controller\Result\RawFactory
     */
    protected $resultRawFactory;


    /**
     * @param \Magento\Framework\Controller\Result\RawFactory $resultRawFactory
     */
    public function __construct( \Magento\Framework\Controller\Result\RawFactory $resultRawFactory)
    {
        $this->resultRawFactory     = $resultRawFactory;

    }

    /**
     * @param \Magento\Catalog\Controller\Product\View $controller
     * @param $result
     * @return mixed
     */

    public function afterExecute(\Magento\Catalog\Controller\Product\View $controller, $result)
    {
        $result = $this->resultRawFactory->create();
        $result->setContents('<strong>echo Preference</strong>');
        return $result;
    }
}
