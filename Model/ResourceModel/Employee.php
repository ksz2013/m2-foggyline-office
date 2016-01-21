<?php
namespace Foggyline\Office\Model\ResourceModel;

class Employee extends \Magento\Eav\Model\Entity\AbstractEntity
{
    protected function _construct()
    {
        $this->_read = 'foggyline_office_employe_read';
        $this->_write = 'foggyline_office_employe_write';
    }

    /**
     * Getter and lazy loader for _type
     *
     * @throws \Magento\Framework\Exception\LocalizedException
     * @return \Magento\Eav\Model\Entity\Type
     */
    public function getEntityType()
    {
        if (empty($this->_type)) {
            /* equals to eav_entity_type.entity_type_code */
            /* which further equals to /app/code/Foggyline/Office/Setup/EmployeeSetup.php, key value under the return array of getDefaultEntities method */
            $this->setType(\Foggyline\Office\Model\Employee::ENTITY); /* Here we assigned full, sor of name-spaced value for entity type */
        }
        return parent::getEntityType();
    }

}
