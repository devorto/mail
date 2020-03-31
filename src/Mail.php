<?php

namespace Devorto\Mail;

/**
 * Interface Mailer
 *
 * @package Devorto\Mailer
 */
interface Mail
{
    /**
     * @param Recipient $recipient
     *
     * @return Mail
     */
    public function addTo(Recipient $recipient): Mail;

    /**
     * @param Recipient $recipient
     *
     * @return Mail
     */
    public function addCc(Recipient $recipient): Mail;

    /**
     * @param Recipient $recipient
     *
     * @return Mail
     */
    public function addBcc(Recipient $recipient): Mail;

    /**
     * @param Recipient $recipient
     *
     * @return Mail
     */
    public function setFrom(Recipient $recipient): Mail;

    /**
     * @param Recipient $recipient
     *
     * @return Mail
     */
    public function setReplyTo(Recipient $recipient): Mail;

    /**
     * @param string $subject
     *
     * @return Mail
     */
    public function setSubject(string $subject): Mail;

    /**
     * @param Attachment $attachment
     *
     * @return Mail
     */
    public function addAttachment(Attachment $attachment): Mail;

    /**
     * @param string $message
     *
     * @return Mail
     */
    public function setMessage(string $message): Mail;

    /**
     * Send email.
     */
    public function send(): Mail;
}
