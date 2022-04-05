<?php declare(strict_types=1);

namespace Macademy\Blog\Controller\Post;

use Magento\Customer\Model\Session;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\RequestInterface;

class Detail implements HttpGetActionInterface
{
    public function __construct(
        private Session $session,
        private RequestInterface $request,
    ) {}

    public function execute()
    {
        echo '<pre>';
        var_dump($this->session->getData());
        var_dump($this->request->getParams());
        die();
    }
}
