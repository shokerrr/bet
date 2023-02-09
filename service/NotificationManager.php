<?php

class NotificationManager
{
    private $emailNotificationService;

    public function __construct(
        EmailNotificationService $emailNotificationService,
    ) {
        $this->emailNotificationService = $emailNotificationService;
    }
    public function initSend(AbstractNotification $notify, User $users)
    {
        switch ($notify->getType()) {
            case EmailNotificationService::getType():
                $this->emailNotificationService->sendNotify($notify, $users);
        }
        throw new \LogicException('No service for given type.');
    }
}