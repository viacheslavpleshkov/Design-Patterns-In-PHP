<?php


namespace PropertyContainer;


use PropertyContainer\Interfaces\PropertyContainerInterface;
use Exception;

/**
 * Class PropertyContainer
 * @package PropertyContainer
 */
class PropertyContainer implements PropertyContainerInterface
{
    /**
     * @var array
     */
    private $propertyContainer = [];

    /**
     * @inheritDoc
     */
    public function addProperty($propertyName, $value)
    {
        $this->propertyContainer[$propertyName] = $value;
    }

    /**
     * @inheritDoc
     */
    public function deleteProperty($propertyName)
    {
        unset($this->propertyContainer[$propertyName]);
    }

    /**
     * @inheritDoc
     */
    public function getProperty($propertyName)
    {
        return $this->propertyContainer[$propertyName] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function updateProperty($propertyName, $value)
    {
        if (!isset($this->propertyContainer[$propertyName])) {
            throw new Exception("Property [$propertyName] not found");
        }

        $this->propertyContainer[$propertyName] = $value;
    }

}