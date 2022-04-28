<?php declare(strict_types=1);

namespace Macademy\Blog\ViewModel;

use Magento\Framework\DataObject;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Post implements ArgumentInterface
{
    public function getList(): array
    {
        return [
            new DataObject(['id' => 1, 'title' => 'Post A']),
            new DataObject(['id' => 2, 'title' => 'Post B']),
            new DataObject(['id' => 3, 'title' => 'Post C']),
        ];
    }
}
