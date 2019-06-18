<?php

namespace devorto\mail;

interface MailMessageInterface
{
    /**
     * MailMessageInterface constructor.
     *
     * @param string $content
     * @param string $mimeType
     */
    public function __construct(string $content, string $mimeType = 'text/plain');

    /**
     * @return string
     */
    public function getContent(): string;

    /**
     * @return string
     */
    public function getMimeType(): string;
}
