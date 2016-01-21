<?php

namespace Foggyline\Office\Controller\Test;

class Messages extends \Foggyline\Office\Controller\Test
{
    protected $resultPageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
    {
        $this->resultPageFactory = $resultPageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {

        /**
         *
         * they appear only on cart page!!! further debugging should be done
         */
        $resultPage = $this->resultPageFactory->create();

        $this->messageManager->addSuccess('Success-1');
        $this->messageManager->addSuccess('Success-2');
        $this->messageManager->addNotice('Notice-1');
        $this->messageManager->addNotice('Notice-2');
        $this->messageManager->addWarning('Warning-1');
        $this->messageManager->addWarning('Warning-2');
        $this->messageManager->addError('Error-1');
        $this->messageManager->addError('Error-2');

        return $resultPage;
    }
}
