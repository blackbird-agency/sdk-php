<?php
namespace Ingenico\Direct\Sdk\Examples;

use Ingenico\Direct\Sdk\ApiException;
use Ingenico\Direct\Sdk\ClientTestCase;
use Ingenico\Direct\Sdk\Domain\SessionRequest;
use Ingenico\Direct\Sdk\Domain\SessionResponse;

/**
 * @group examples
 *
 */
class SessionTest extends ClientTestCase
{
    /**
     * @return SessionResponse
     * @throws ApiException
     * @throws \Exception
     */
    public function testCreateSession()
    {
        $client = $this->getClient();
        $merchantId = $this->getMerchantId();
        $sessionRequest = new SessionRequest();

        $tokens = array();
        $tokens[] = "122c5b4d-dd40-49f0-b7c9-3594212167a9";
        $tokens[] = "126166b16ed04b3ab85fb06da1d7a167";
        $tokens[] = "226166b16ed04b3ab85fb06da1d7a167";
        $tokens[] = "326166b16ed04b3ab85fb06da1d7a167";
        $tokens[] = "426166b16ed04b3ab85fb06da1d7a167";

        $sessionRequest->setTokens($tokens);

        return $client->merchant($merchantId)->sessions()->createSession($sessionRequest);
    }
}
