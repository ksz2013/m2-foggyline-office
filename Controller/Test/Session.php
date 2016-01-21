<?php

namespace Foggyline\Office\Controller\Test;

class Session extends \Foggyline\Office\Controller\Test
{
    protected $resultPageFactory;
    protected $sessionConfig;
    protected $sessionManager;
    protected $cookieMetadataFactory;
    protected $cookieManager;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Framework\Session\Config\ConfigInterface $sessionConfig,
        \Magento\Framework\Session\SessionManagerInterface $sessionManager,
        \Magento\Framework\Stdlib\Cookie\CookieMetadataFactory $cookieMetadataFactory,
        \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager
    )
    {
        $this->resultPageFactory = $resultPageFactory;
        $this->sessionConfig = $sessionConfig;
        $this->sessionManager = $sessionManager;
        $this->sessionManager = $sessionManager;
        $this->cookieMetadataFactory = $cookieMetadataFactory;
        $this->cookieManager = $cookieManager;
        return parent::__construct($context);
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $this->sessionManager->setFoggylineOfficeVar1('Office1');
        print_r($this->sessionManager->getFoggylineOfficeVar1());

//        echo '<pre>';
//        print_r($this->sessionManager->getData());


        //        print_r($this->sessionConfig);


        /*  public cookie */
        $cookieValue = 'Just some value';
        $cookieMetadata = $this->cookieMetadataFactory
            ->createPublicCookieMetadata()
            ->setDuration(3600)
            ->setPath($this->sessionConfig->getCookiePath())
            ->setDomain($this->sessionConfig->getCookieDomain())
            ->setSecure($this->sessionConfig->getCookieSecure())
            ->setHttpOnly($this->sessionConfig->getCookieHttpOnly());

        $this->cookieManager
            ->setPublicCookie('cookie_name_1', $cookieValue, $cookieMetadata);


        /**
         * private cookie in session
         */
        $cookieMetadata = $this->cookieMetadataFactory
            ->createSensitiveCookieMetadata()
            ->setPath($this->sessionConfig->getCookiePath())
            ->setDomain($this->sessionConfig->getCookieDomain());
        $this->cookieManager
            ->setSensitiveCookie('cookie_name_2', $cookieValue,
                $cookieMetadata);


        return $resultPage;
    }
}
