<?php
namespace mhndev\messagingSdk;

/**
 * Class Email
 * @package mhndev\messagingSdk
 */
class Email implements iEmail
{


    /**
     * @var string
     */
    protected $subject;

    /**
     * @var null | string
     */
    protected $body;

    /**
     * @var null | \mhndev\valueObjects\implementations\Email
     */
    protected $from;

    /**
     * @var \mhndev\valueObjects\implementations\Email
     */
    protected $destination;

    /**
     * @var null | \mhndev\valueObjects\implementations\Email
     */
    protected $cc;

    /**
     * @var null | \mhndev\valueObjects\implementations\Email
     */
    protected $bcc;

    /**
     * @var string
     */
    protected $charset;

    /**
     * @var null | \mhndev\valueObjects\implementations\Email
     */
    protected $replyTo;

    /**
     * @var boolean
     */
    protected $isHtml;

    /**
     * @var null | mixed
     */
    protected $attachments;


    /**
     * Email constructor.
     * @param null | \mhndev\valueObjects\implementations\Email $destination
     * @param null | string $body
     * @param string $subject
     * @param null | \mhndev\valueObjects\implementations\Email $from
     * @param string $charset
     * @param null | \mhndev\valueObjects\implementations\Email $cc
     * @param null | \mhndev\valueObjects\implementations\Email $bcc
     * @param null | \mhndev\valueObjects\implementations\Email $replyTo
     */
    public function __construct(
        \mhndev\valueObjects\implementations\Email $destination,
        $body = null,
        $subject = '(No Subject)',
        \mhndev\valueObjects\implementations\Email $from = null,
        $charset = 'ISO-8859-1',
        \mhndev\valueObjects\implementations\Email $cc = null,
        \mhndev\valueObjects\implementations\Email $bcc = null,
        \mhndev\valueObjects\implementations\Email $replyTo = null
    )
    {
        $this->destination = $destination;
        $this->body = $body;
        $this->subject = $subject;
        $this->from = $from;


        if(is_null($charset) ){
            $this->charset = mb_detect_encoding($body);
        }
        else{
            $this->charset = $charset;
        }
        $this->cc = $cc;
        $this->bcc = $bcc;
        $this->replyTo = $replyTo;
    }

    /**
     * @return string
     */
    function getSubject()
    {
        return $this->subject;
    }

    /**
     * @return boolean
     */
    function hasSubject()
    {
        return !empty($this->subject);
    }

    /**
     * @return \mhndev\valueObjects\implementations\Email
     */
    function getFrom()
    {
        return $this->from;
    }

    /**
     * @return boolean
     */
    function hasFrom()
    {
        return !empty($this->from);
    }

    /**
     * @return \mhndev\valueObjects\implementations\Email
     */
    function getCc()
    {
        return $this->cc;
    }

    /**
     * @return boolean
     */
    function hasCc()
    {
        return !empty($this->cc);
    }

    /**
     * @return \mhndev\valueObjects\implementations\Email
     */
    function getBcc()
    {
        return $this->bcc;
    }

    /**
     * @return boolean
     */
    function hasBcc()
    {
        return !empty($this->bcc);
    }

    /**
     * @return string
     */
    function getCharset()
    {
        return $this->charset;
    }

    /**
     * @return null | \mhndev\valueObjects\implementations\Email
     */
    function getReplyTo()
    {
        return $this->replyTo;
    }

    /**
     * @return boolean
     */
    function isReply()
    {
        return !empty($this->replyTo);
    }

    /**
     * @return boolean
     */
    function isHtml()
    {
        return ($this->body != strip_tags($this->body) );
    }

    /**
     * @return mixed
     */
    function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @return boolean
     */
    function hasAttachment()
    {
        return !empty($this->attachments);
    }

    /**
     * @return string
     */
    function getBody()
    {
        return $this->body;
    }

    /**
     * @return \mhndev\valueObjects\implementations\Email
     */
    function getDestination()
    {
        return $this->destination;
    }
}
