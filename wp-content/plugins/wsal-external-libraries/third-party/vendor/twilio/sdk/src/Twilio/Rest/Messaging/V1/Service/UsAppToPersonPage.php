<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */
namespace WSAL_Vendor\Twilio\Rest\Messaging\V1\Service;

use WSAL_Vendor\Twilio\Http\Response;
use WSAL_Vendor\Twilio\Page;
use WSAL_Vendor\Twilio\Version;
/**
 * PLEASE NOTE that this class contains beta products that are subject to change. Use them with caution.
 */
class UsAppToPersonPage extends Page
{
    /**
     * @param Version $version Version that contains the resource
     * @param Response $response Response from the API
     * @param array $solution The context solution
     */
    public function __construct(Version $version, Response $response, array $solution)
    {
        parent::__construct($version, $response);
        // Path Solution
        $this->solution = $solution;
    }
    /**
     * @param array $payload Payload response from the API
     * @return UsAppToPersonInstance \Twilio\Rest\Messaging\V1\Service\UsAppToPersonInstance
     */
    public function buildInstance(array $payload) : UsAppToPersonInstance
    {
        return new UsAppToPersonInstance($this->version, $payload, $this->solution['messagingServiceSid']);
    }
    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() : string
    {
        return '[Twilio.Messaging.V1.UsAppToPersonPage]';
    }
}
