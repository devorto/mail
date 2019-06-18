<?php

namespace devorto\mail;

interface MailInterface
{
    public function setFrom(MailAddressInterface $from): MailInterface;

    public function getFrom(): MailAddressInterface;

    public function setTo(MailAddressInterface $to): MailInterface;

    public function getTo(): MailAddressInterface;

    public function setReplyTo(MailAddressInterface $replyTo): MailInterface;

    public function getReplyTo(): MailAddressInterface;

	public function setCc(MailAddressInterface $cc): MailInterface;

	public function getCc(): MailAddressInterface;

    public function setSubject(MailSubjectInterface $subject): MailInterface;

    public function getSubject(): MailSubjectInterface;

    public function addAttachment(MailAttachmentInterface $attachment): MailInterface;

    /**
     * @return MailAttachmentInterface[]
     */
    public function getAttachments(): array;

	public function setHtmlMessage(MailMessageInterface $message): MailInterface;

	public function getHtmlMessage(): MailMessageInterface;

	public function setTextMessage(MailMessageInterface $message): MailInterface;

    public function getTextMessage(): MailMessageInterface;

    public function send(): bool;
}
