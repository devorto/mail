<?php

namespace Devorto\Mail;

/**
 * Interface Mailer
 *
 * @package Devorto\Mail
 */
interface Mailer
{
    /**
     * @param Mail $mail
     */
    public function send(Mail $mail): void;
}
