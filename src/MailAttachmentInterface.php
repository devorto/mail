<?php

namespace devorto\mail;

interface MailAttachmentInterface
{
    /**
     * MailAttachmentInterface constructor.
     *
     * @param string $name
     * @param string $content
     * @param string $mimeType
     */
    public function __construct(string $name, string $content, string $mimeType = 'text/plain');

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string
     */
    public function getContent(): string;

    /**
     * @param string $content
     *
     * @return MailAttachmentInterface
     */
    public function setContent(string $content): MailAttachmentInterface;

    /**
     * @param string $path
     *
     * @return MailAttachmentInterface
     */
    public function setContentFromFile(string $path): MailAttachmentInterface;

    /**
     * @return string
     */
    public function getMimeType(): string;
}
