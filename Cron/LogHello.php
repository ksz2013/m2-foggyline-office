<?php

namespace Foggyline\Office\Cron;

// to trigger the cronjob
// php bin/magento cron:run

class LogHello
{
    protected $logger;

    public function __construct(
        \Psr\Log\LoggerInterface $logger
    )
    {
        $this->logger = $logger;
    }

    public function execute()
    {
        $this->logger->info('Hello from Cron job!');
        return $this;
    }
}
