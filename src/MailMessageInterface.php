<?php

namespace devorto\mail;

interface MailMessageInterface
{
    public function __construct(string $content, string $mimeType = 'text/plain');

    public function getContent(): string;

    public function getMimeType(): string;
}
