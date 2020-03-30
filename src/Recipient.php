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
    protected $email;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * Recipient constructor.
     *
     * @param string $email
     * @param string|null $name
     */
    public function __construct(string $email, string $name = null)
    {
        $email = trim($email);
        $name = trim($name);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException('Invalid email address provided.');
        }

        $this->email = $email;
        $this->name = empty($name) ? null : $name;
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
