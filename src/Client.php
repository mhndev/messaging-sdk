<?php
namespace mhndev\messagingSdk;

use GuzzleHttp\ClientInterface;
use mhndev\valueObjects\implementations\MobilePhone;

/**
 * Class Client
 * @package mhndev\messagingSdk
 */
class Client
{

    /**
     * @var ClientInterface
     */
    protected $httpClient;

    /**
     * @var string
     */
    protected $send_sms_endpoint;

    /**
     * @var string
     */
    protected $send_email_endpoint;

    /**
     * Client constructor.
     * @param mixed $httpClient
     * @param string $send_sms_endpoint
     * @param string $send_email_endpoint
     */
    public function __construct($httpClient, $send_sms_endpoint, $send_email_endpoint)
    {
        $this->httpClient = $httpClient;
        $this->send_email_endpoint= $send_email_endpoint;
        $this->send_sms_endpoint = $send_sms_endpoint;
    }


    /**
     * @param iEmail $email
     * @return mixed
     */
    public function sendEmail(iEmail $email)
    {
        try{
            $result = $this->httpClient->request(
                'POST',
                $this->send_email_endpoint ,
                [
                    'form_params' =>
                        [
                            'body'     => $email->getBody(),
                            'to'       => $email->getDestination()->__toString(),
                            'subject'  => $email->getSubject(),
                            'from'     => $email->getFrom(),
                            'cc'       => $email->getCc(),
                            'bcc'      => $email->getBcc(),
                            'replyTo'  => $email->getReplyTo()
                        ],
                    'headers' => [
                        'Content-Type' => "application/x-www-form-urlencoded; charset=".$email->getCharset()
                    ]
                ]
            );

            $responseResult = $result->getBody()->getContents();

            return $responseResult;

        }catch (\Exception $e){
            die($e->getMessage());
        }
    }

    /**
     * @param iSms $sms
     * @return mixed
     */
    public function sendSms(iSms $sms)
    {
        try{
            $result = $this->httpClient->request(
                'POST',
                $this->send_sms_endpoint ,
                [
                    'form_params' => [
                        'body'=> $sms->getBody(),
                        'to' => $sms->getDestination()->format(MobilePhone::WithZero)
                    ]
                ]
            );

            $responseResult = $result->getBody()->getContents();

            return $responseResult;


        }catch (\Exception $e){
            die($e->getMessage());
        }
    }


}
