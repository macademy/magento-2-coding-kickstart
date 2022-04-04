<?php declare(strict_types=1);

namespace Macademy\Blog\Controller\Post;

use Magento\Customer\Model\Session;
use Magento\Framework\App\Action\HttpGetActionInterface;

class Detail implements HttpGetActionInterface
{
    public function execute()
    {
        echo '<pre>';
        var_dump(new Session());
        die();
    }
}
