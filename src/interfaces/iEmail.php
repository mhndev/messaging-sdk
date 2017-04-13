<?php
namespace mhndev\messagingSdk;

use mhndev\messagingSdk\exceptions\EmailNotSentException;

/**
 * Interface iEmail
 * @package mhndev\messagingSdk
 */
interface iEmail
{

    /**
     * @return string
     */
    function getSubject();

    /**
     * @return boolean
     */
    function hasSubject();

    /**
     * @return EmailNotSentException
     */
    function getDestination();

    /**
     * @return EmailNotSentException
     */
    function getFrom();

    /**
     * @return boolean
     */
    function hasFrom();

    /**
     * @return string
     */
    function getBody();

    /**
     * @return EmailNotSentException
     */
    function getCc();

    /**
     * @return boolean
     */
    function hasCc();

    /**
     * @return EmailNotSentException
     */
    function getBcc();

    /**
     * @return boolean
     */
    function hasBcc();

    /**
     * @return string
     */
    function getCharset();

    /**
     * @return EmailNotSentException
     */
    function getReplyTo();

    /**
     * @return boolean
     */
    function isReply();

    /**
     * @return boolean
     */
    function isHtml();

    /**
     * @return mixed
     */
    function getAttachments();

    /**
     * @return boolean
     */
    function hasAttachment();

}
