### Messaging Service Sdk (Client)


##### sample code 
```php


$sms = new \mhndev\messagingSdk\Sms(
    'Hi, how you doing man?',
    new \mhndev\valueObjects\implementations\MobilePhone('09124971706')
);


$email = new \mhndev\messagingSdk\Email(
    new \mhndev\valueObjects\implementations\Email('majid8911303@gmail.com'),
    '<div style="color:white; background-color: black">This is sample Email Message</div>',
    'test Email',
    new \mhndev\valueObjects\implementations\Email('majid@gmail.com')
    
);

$client = new \mhndev\messagingSdk\Client(
    new \GuzzleHttp\Client(),
    'http://digipeyk.com:8060/sms',
    'http://digipeyk.com:8060/email'
);

$client->sendSms($sms);

$client->sendEmail($email);




```