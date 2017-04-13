<?php
namespace mhndev\messagingSdk;

use mhndev\valueObjects\implementations\MobilePhone;

/**
 * Class Sms
 * @package mhndev\messagingSdk
 */
class Sms implements iSms
{

    /**
     * @var MobilePhone
     */
    protected $destination;

    /**
     * @var string
     */
    protected $body;


    /**
     * Sms constructor.
     *
     * @param string $body
     * @param MobilePhone $destination
     */
    public function __construct($body, MobilePhone $destination)
    {
        $this->body = $body;
        $this->destination = $destination;
    }

    /**
     * @return MobilePhone
     */
    function getDestination()
    {
        return $this->destination;
    }

    /**
     * @return string
     */
    function getBody()
    {
        return $this->body;
    }

}
