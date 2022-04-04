<?php declare(strict_types=1);

namespace Macademy\Blog\Controller\Post;

use Magento\Customer\Model\Session;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ObjectManager;

class Detail implements HttpGetActionInterface
{
    public function execute()
    {
        $om = ObjectManager::getInstance();
        $session = $om->get(Session::class);
        echo '<pre>';
        var_dump($session->getData());
        die();
    }
}
