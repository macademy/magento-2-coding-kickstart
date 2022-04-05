<?php declare(strict_types=1);

namespace Macademy\Blog\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\Redirect;
use Magento\Framework\Controller\Result\RedirectFactory;

class Index implements HttpGetActionInterface
{
    public function __construct(
        private RedirectFactory $redirectFactory,
    ) {}

    public function execute(): Redirect
    {
        $redirect = $this->redirectFactory->create();
        return $redirect->setPath('*/post/list');
    }
}
