<?php
/*
 * This class was auto-generated from the API references found at
 * https://support.direct.ingenico.com/documentation/api/reference/index.html
 */
namespace Ingenico\Direct\Sdk\Domain;

use Ingenico\Direct\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package Ingenico\Direct\Sdk\Domain
 */
class TokenCardSpecificInput extends DataObject
{
    // Properties
    /**
     * @var TokenData
     */
    private $data;

    // Methods
    /**
     * @return TokenData
     */
    public function getData()
    {
        return $this->data;
    }
    /**
     * @var TokenData
     */
    public function setData($value)
    {
        $this->data = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->data !== null) {
            $object->data = $this->data->toObject();
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
    {
        parent::fromObject($object);
        if (property_exists($object, 'data')) {
            if (!is_object($object->data)) {
                throw new UnexpectedValueException('value \'' . print_r($object->data, true) . '\' is not an object');
            }
            $value = new TokenData();
            $this->data = $value->fromObject($object->data);
        }
        return $this;
    }
}
