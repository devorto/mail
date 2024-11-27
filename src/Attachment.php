<?php

namespace Devorto\Mail;

use InvalidArgumentException;

/**
 * Class Attachment
 *
 * @package Devorto\Mail
 */
class Attachment
{
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var string
     */
    protected string $mimeType;

    /**
     * @var string
     */
    protected string $content;

    /**
     * Attachment constructor.
     *
     * @param string $name
     * @param string $mimeType
     * @param string $content
     */
    public function __construct(string $name, string $mimeType, string $content)
    {
        $name = trim($name);
        if (empty($name)) {
            throw new InvalidArgumentException('Name cannot be empty.');
        }

        $mimeType = strtolower(trim($mimeType));
        if (empty($mimeType) || 1 !== preg_match('/^[a-z]+\/.+$/', $mimeType)) {
            throw new InvalidArgumentException('Invalid mime type.');
        }

        if (empty($content)) {
            throw new InvalidArgumentException('Content cannot be empty.');
        }

        $this->name = $name;
        $this->mimeType = $mimeType;
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
}
