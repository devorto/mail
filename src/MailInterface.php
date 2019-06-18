<?php

namespace devorto\mail;

interface MailInterface
{
    /**
     * @return MailAddressInterface
     */
    public function getTo(): MailAddressInterface;

    /**
     * @param MailAddressInterface $to
     *
     * @return MailInterface
     */
    public function setTo(MailAddressInterface $to): MailInterface;

    /**
     * @return MailAddressInterface
     */
    public function getCc(): MailAddressInterface;

    /**
     * @param MailAddressInterface $cc
     *
     * @return MailInterface
     */
    public function setCc(MailAddressInterface $cc): MailInterface;

    /**
     * @return MailAddressInterface
     */
    public function getFrom(): MailAddressInterface;

    /**
     * @param MailAddressInterface $from
     *
     * @return MailInterface
     */
    public function setFrom(MailAddressInterface $from): MailInterface;

    /**
     * @return MailAddressInterface
     */
    public function getReplyTo(): MailAddressInterface;

    /**
     * @param MailAddressInterface $replyTo
     *
     * @return MailInterface
     */
    public function setReplyTo(MailAddressInterface $replyTo): MailInterface;

    /**
     * @return MailSubjectInterface
     */
    public function getSubject(): MailSubjectInterface;

    /**
     * @param MailSubjectInterface $subject
     *
     * @return MailInterface
     */
    public function setSubject(MailSubjectInterface $subject): MailInterface;

    /**
     * @return MailAttachmentInterface[]
     */
    public function getAttachments(): array;

    /**
     * @param MailAttachmentInterface $attachment
     *
     * @return MailInterface
     */
    public function addAttachment(MailAttachmentInterface $attachment): MailInterface;

    /**
     * @return MailMessageInterface
     */
    public function getHtmlMessage(): MailMessageInterface;

    /**
     * @param MailMessageInterface $message
     *
     * @return MailInterface
     */
    public function setHtmlMessage(MailMessageInterface $message): MailInterface;

    /**
     * @return MailMessageInterface
     */
    public function getTextMessage(): MailMessageInterface;

    /**
     * @param MailMessageInterface $message
     *
     * @return MailInterface
     */
    public function setTextMessage(MailMessageInterface $message): MailInterface;

    /**
     * @return bool
     */
    public function send(): bool;
}
