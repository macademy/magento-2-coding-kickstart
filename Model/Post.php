<?php declare(strict_types=1);

namespace Macademy\Blog\Model;

use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel\Post::class);
    }
}
