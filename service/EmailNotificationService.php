<?php

class EmailNotificationService implements  NotificationServiceInterface
{

    private $api;


    public function __construct($api)
    {
        $this->api = $api;
    }
    public function sendNotify($notify, $users)
    {
        // TODO: Implement sendNotify() method.
        try {
            foreach ($users as $destination) {
                $api->setUser($destination);
                $api->setMessage($notify);

                $api->send();
            }
        } catch (ErrorException $e) {
            throw new \ErrorException('Process sending notify failed');
        }
    }

    public static function getType()
    {
        return 'email';
    }
}