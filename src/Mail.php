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
     * @return Recipient[]
     */
    public function getTo(): array;

    /**
     * @param Recipient $recipient
     *
     * @return Mail
     */
    public function addTo(Recipient $recipient): Mail;

    /**
     * @return Recipient[]
     */
    public function getCc(): array;

    /**
     * @param Recipient $recipient
     *
     * @return Mail
     */
    public function addCc(Recipient $recipient): Mail;

    /**
     * @return Recipient[]
     */
    public function getBcc(): array;

    /**
     * @param Recipient $recipient
     *
     * @return Mail
     */
    public function addBcc(Recipient $recipient): Mail;

    /**
     * @return Recipient
     */
    public function getFrom(): Recipient;

    /**
     * @param Recipient $recipient
     *
     * @return Mail
     */
    public function setFrom(Recipient $recipient): Mail;

    /**
     * @return Recipient
     */
    public function getReplyTo(): Recipient;

    /**
     * @param Recipient $recipient
     *
     * @return Mail
     */
    public function setReplyTo(Recipient $recipient): Mail;

    /**
     * @return string
     */
    public function getSubject(): string;

    /**
     * @param string $subject
     *
     * @return Mail
     */
    public function setSubject(string $subject): Mail;

    /**
     * @return Attachment[]
     */
    public function getAttachments(): array;

    /**
     * @param Attachment $attachment
     *
     * @return Mail
     */
    public function addAttachment(Attachment $attachment): Mail;

    /**
     * @return string
     */
    public function getMessage(): string;

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
