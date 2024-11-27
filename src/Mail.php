<?php

namespace Devorto\Mail;

/**
 * Class Mail
 *
 * @package Devorto\Mail
 */
class Mail
{
    /**
     * @var Recipient[]
     */
    protected array $to = [];

    /**
     * @var Recipient[]
     */
    protected array $cc = [];

    /**
     * @var Recipient[]
     */
    protected array $bcc = [];

    /**
     * @var Recipient|null
     */
    protected ?Recipient $from = null;

    /**
     * @var Recipient|null
     */
    protected ?Recipient $replyTo = null;

    /**
     * @var string
     */
    protected string $subject = '';

    /**
     * @var Attachment[]
     */
    protected array $attachments = [];

    /**
     * @var string
     */
    protected string $message = '';

    /**
     * @return Recipient[]
     */
    public function getTo(): array
    {
        return $this->to;
    }

    /**
     * @param Recipient ...$to
     *
     * @return Mail
     */
    public function setTo(Recipient ...$to): Mail
    {
        $this->to = $to;

        return $this;
    }

    /**
     * @return Recipient[]
     */
    public function getCc(): array
    {
        return $this->cc;
    }

    /**
     * @param Recipient ...$cc
     *
     * @return Mail
     */
    public function setCc(Recipient ...$cc): Mail
    {
        $this->cc = $cc;

        return $this;
    }

    /**
     * @return Recipient[]
     */
    public function getBcc(): array
    {
        return $this->bcc;
    }

    /**
     * @param Recipient ...$bcc
     *
     * @return Mail
     */
    public function setBcc(Recipient ...$bcc): Mail
    {
        $this->bcc = $bcc;

        return $this;
    }

    /**
     * @return Recipient|null
     */
    public function getFrom(): ?Recipient
    {
        return $this->from;
    }

    /**
     * @param Recipient $from
     *
     * @return Mail
     */
    public function setFrom(Recipient $from): Mail
    {
        $this->from = $from;

        return $this;
    }

    /**
     * @return Recipient|null
     */
    public function getReplyTo(): ?Recipient
    {
        return $this->replyTo;
    }

    /**
     * @param Recipient $replyTo
     *
     * @return Mail
     */
    public function setReplyTo(Recipient $replyTo): Mail
    {
        $this->replyTo = $replyTo;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     *
     * @return Mail
     */
    public function setSubject(string $subject): Mail
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * @return Attachment[]
     */
    public function getAttachments(): array
    {
        return $this->attachments;
    }

    /**
     * @param Attachment ...$attachments
     *
     * @return Mail
     */
    public function setAttachments(Attachment ...$attachments): Mail
    {
        $this->attachments = $attachments;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return Mail
     */
    public function setMessage(string $message): Mail
    {
        $this->message = $message;

        return $this;
    }
}
