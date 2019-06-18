<?php

namespace devorto\mail;

interface MailAddressInterface
{
    /**
     * MailAddressInterface constructor.
     *
     * @param string $address
     * @param string $name
     */
    public function __construct(string $address, string $name = null);

    /**
     * @return string
     */
    public function getAddress(): string;

    /**
     * @return null|string
     */
    public function getName(): ?string;
}
