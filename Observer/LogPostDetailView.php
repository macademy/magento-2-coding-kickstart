<?php declare(strict_types=1);

namespace Macademy\Blog\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class LogPostDetailView implements ObserverInterface
{
    public function __construct(
        private LoggerInterface $logger,
    ) {}

    public function execute(Observer $observer)
    {
        $request = $observer->getData('request');
        $this->logger->info('blog post detail viewed', [
            'params' => $request->getParams(),
        ]);
    }
}
