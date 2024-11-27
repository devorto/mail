<?php

namespace Devorto\Mail;

use InvalidArgumentException;

/**
 * Class Recipient
 *
 * @package Devorto\Mail
 */
class Recipient
{
    /**
     * @var string
     */
    protected string $email;

    /**
     * @var string|null
     */
    protected ?string $name = null;

    /**
     * Recipient constructor.
     *
     * @param string $email
     * @param string|null $name
     */
    public function __construct(string $email, ?string $name = null)
    {
        $email = trim($email);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException('Invalid email address provided.');
        }

        $this->email = $email;
        $this->name = trim((string)$name) ?: null;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
}
