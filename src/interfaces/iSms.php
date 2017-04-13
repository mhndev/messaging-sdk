<?php
namespace mhndev\messagingSdk;

use mhndev\valueObjects\implementations\MobilePhone;

/**
 * Interface iSms
 * @package mhndev\messagingSdk
 */
interface iSms
{

    /**
     * @return MobilePhone
     */
    function getDestination();

    /**
     * @return string
     */
    function getBody();
}
