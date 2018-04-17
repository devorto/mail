<?php

namespace devorto\mail;

interface MailAttachmentInterface
{
    public function __construct(string $name, string $content, string $mimeType = 'text/plain');

    public function getName(): string;

    public function getContent(): string;

    public function getMimeType(): string;

    public function setContentFromFile(string $path): MailAttachmentInterface;

    public function setContent(string $content): MailAttachmentInterface;
}
