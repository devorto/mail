<?php

namespace devorto\mail;

interface MailSubjectInterface
{
    public function __construct(string $subject);

    public function getSubject(): string;
}
