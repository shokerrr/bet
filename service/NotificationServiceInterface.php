<?php

interface NotificationServiceInterface
{
    public function sendNotify();

    public static function getType();
}