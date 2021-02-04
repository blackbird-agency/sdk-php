<?php
/*
 * This class was auto-generated from the API references found at
 * https://support.direct.ingenico.com/documentation/api/reference
 */
namespace Ingenico\Direct\Sdk;

use Ingenico\Direct\Sdk\Merchant\MerchantClient;
use Ingenico\Direct\Sdk\Merchant\MerchantClientInterface;

/**
 * Ingenico Direct
 */
class Client extends Resource implements ClientInterface
{
    const API_VERSION = 'v2';

    /** @var Communicator */
    private $communicator;

    /** @var string */
    private $clientMetaInfo;

    /**
     * Construct a new Ingenico ePayments platform server-to-server API client.
     *
     * @param Communicator $communicator
     * @param string $clientMetaInfo
     *
     */
    public function __construct(Communicator $communicator, $clientMetaInfo = '')
    {
        parent::__construct();
        $this->communicator = $communicator;
        $this->setClientMetaInfo($clientMetaInfo);
        $this->context = array('apiVersion' => static::API_VERSION);
    }

    /**
     * @return Communicator
     */
    protected function getCommunicator()
    {
        return $this->communicator;
    }

    /**
     * @param CommunicatorLogger $communicatorLogger
     */
    public function enableLogging(CommunicatorLogger $communicatorLogger)
    {
        $this->getCommunicator()->enableLogging($communicatorLogger);
    }

    /**
     *
     */
    public function disableLogging()
    {
        $this->getCommunicator()->disableLogging();
    }

    /**
     * @param string $clientMetaInfo
     * @return $this
     */
    public function setClientMetaInfo($clientMetaInfo)
    {
        $this->clientMetaInfo = $clientMetaInfo ? base64_encode($clientMetaInfo) : '';
        return $this;
    }

    /**
     * @return string
     */
    protected function getClientMetaInfo()
    {
        return $this->clientMetaInfo;
    }

    /**
     * {@inheritDoc}
     */
    public function merchant($merchantId)
    {
        $newContext = $this->context;
        $newContext['merchantId'] = $merchantId;
        return new MerchantClient($this, $newContext);
    }
}
