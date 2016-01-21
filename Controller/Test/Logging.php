<?php

namespace Foggyline\Office\Controller\Test;

class Logging extends \Foggyline\Office\Controller\Test
{
    protected $resultPageFactory;
    protected $logger;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Psr\Log\LoggerInterface $logger
    )
    {
        $this->resultPageFactory = $resultPageFactory;
        $this->logger = $logger;
        return parent::__construct($context);
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();

        \Magento\Framework\Profiler::start('foggyline:office');

        $this->logger->log(\Monolog\Logger::DEBUG, 'debug msg');
        $this->logger->log(\Monolog\Logger::INFO, 'info msg');
        $this->logger->log(\Monolog\Logger::NOTICE, 'notice msg');
        $this->logger->log(\Monolog\Logger::WARNING, 'warning msg');
        $this->logger->log(\Monolog\Logger::ERROR, 'error msg');
        $this->logger->log(\Monolog\Logger::CRITICAL, 'critical msg');
        $this->logger->log(\Monolog\Logger::ALERT, 'alert msg');
        $this->logger->log(\Monolog\Logger::EMERGENCY, 'emergency msg');

        $this->logger->debug('debug msg');
        $this->logger->info('info msg');
        $this->logger->notice('notice msg');
        $this->logger->warning('warning msg');
        $this->logger->error('error msg');
        $this->logger->critical('critical msg');
        $this->logger->alert('alert msg');
        $this->logger->emergency('emergency msg');

        sleep(2); /* code block or single expression here */
        \Magento\Framework\Profiler::stop('foggyline:office');

        return $resultPage;
    }
}
