<?php
namespace Foggyline\Office\Model\ResourceModel\Employee;

class Collection extends \Magento\Eav\Model\Entity\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            'Foggyline\Office\Model\Employee',
            'Foggyline\Office\Model\ResourceModel\Employee'
        );
    }
}
