<?php

namespace devorto\mail;

interface MailSubjectInterface
{
    /**
     * MailSubjectInterface constructor.
     *
     * @param string $subject
     */
    public function __construct(string $subject);

    /**
     * @return string
     */
    public function getSubject(): string;
}
