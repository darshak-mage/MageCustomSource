<?php
/**
 * @author NineteenGraphQls
 * @copyright NineteenGraphQls. All rights reserved.
 * @package NineteenGraphQls Product Attribute in Graph Ql for Magento 2.
 */
declare(strict_types=1);

namespace NineteenGraphQls\ProductAttributeGraphQl\Model\Source\Config;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class Options extends AbstractSource
{
    /**
     * @return array
     */
    public function getAllOptions(): array
    {
        $this->_options = [
            ['label' => '', 'value' => '0'],
            ['label' => 'New', 'value' => '1'],
            ['label' => 'Sale', 'value' => '2'],
            ['label' => 'Exclusive', 'value' => '3']
        ];
        return $this->_options;
    }
}