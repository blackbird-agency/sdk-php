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
class ThreeDSWhitelist extends DataObject
{
    // Properties
    /**
     * @var string
     */
    private $source;

    /**
     * @var string
     */
    private $status;

    // Methods
    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }
    /**
     * @var string
     */
    public function setSource($value)
    {
        $this->source = $value;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * @var string
     */
    public function setStatus($value)
    {
        $this->status = $value;
    }

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if ($this->source !== null) {
            $object->source = $this->source;
        }
        if ($this->status !== null) {
            $object->status = $this->status;
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
        if (property_exists($object, 'source')) {
            $this->source = $object->source;
        }
        if (property_exists($object, 'status')) {
            $this->status = $object->status;
        }
        return $this;
    }
}
