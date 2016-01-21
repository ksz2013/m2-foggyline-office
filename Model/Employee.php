<?php
namespace Foggyline\Office\Model;

class Employee extends \Magento\Framework\Model\AbstractModel
{

    const ENTITY = 'foggyline_office_employee';

    protected function _construct()
    {
        $this->_init('Foggyline\Office\Model\ResourceModel\Employee');
    }

}
