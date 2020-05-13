<?php
/**
 *
 * Copyright © Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Unit2\Secret\Controller\Adminhtml\Action;

/**
 * Class Index
 * @package Unit2\Secret\Controller\Adminhtml\Action
 */
class Index extends \Magento\Backend\App\Action
{
    /**
     * @var \Magento\Framework\Controller\Result\RawFactory
     */
    protected $resultRawFactory;


    /**
     * @param \Magento\Framework\Controller\Result\RawFactory $resultRawFactory
     */
    public function __construct(
        \Magento\Framework\Controller\Result\RawFactory $resultRawFactory,
        \Magento\Backend\App\Action\Context $context
    ){
        $this->resultRawFactory = $resultRawFactory;
        parent::__construct($context);
    }

    /**
     * execute method
     */
    public function execute()
    {
        $result = $this->resultRawFactory->create();
        $result->setContents('<strong>Hello World From Secret Module!</strong>');
        return $result;
    }

    /**
     * @return int
     */
    protected function _isAllowed() {
        $secret = $this->getRequest()->getParam('secret');
        return isset($secret) && (int)$secret==1;
    }

    /**
     * Link must be generated by server side
     * It's only for education purpose!
     *
     * @return bool
     */
    public function _processUrlKeys()
    {
        return true;
    }
}